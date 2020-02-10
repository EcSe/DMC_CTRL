<?php

namespace App\Http\Controllers;

use App\Exports\Kantutec\camposDocumentoPlanoImport; /* Carpeta dentro de exports*/
use App\Exports\Kantutec\exportKantutec; /*Controlador Principal Importacion */
use App\Models\camposDocumentoMaestroModel;
use App\Models\camposDocumentoPlanoModel;
use App\Models\documentoPlanoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//Exportacion
use Illuminate\Support\Facades\Storage;

class camposDocumentoPlanoController extends Controller
{
    public function listar($id)
    {
        $idDocPlano = $id;
        $docuPlano = documentoPlanoModel::where('IN_ID_DOC_PLANO', $idDocPlano)
            ->first();
        $listCamposDocuMaestro = camposDocumentoMaestroModel::where('IN_ID_DOC_MAESTRO', $docuPlano->IN_ID_DOC_MAESTRO)
            ->get();
        $listCamposDocuPlano = camposDocumentoPlanoModel::where('IN_ID_DOC_PLANO', $idDocPlano)
            ->get();
        $nombres_prov_proy_pl = DB::select('CALL USP_VC_NOMBRES(?)', array($docuPlano->IN_ID_PLANO));

        $nameSheets = array_map(function ($elements) {
            return $elements['VC_VALOR_CADENA_3'];
        }, $listCamposDocuMaestro->toArray());

        $nameSheetsUniqueNotNull = array_values(array_filter(array_unique($nameSheets))); /*array_filter te devuelve los valores con los indices, 
                                                                                            array_value los ordena desde 0 */
        return response()->json([
            'camposMaestro' => $listCamposDocuMaestro,
            'camposPlano' => $listCamposDocuPlano,
            'nombresProvProyPl' => $nombres_prov_proy_pl,
            'sheets' => $nameSheetsUniqueNotNull
        ],200);
    }

    public function agregar(Request $request, $id)
    {
        $usuario = session('usu');
        $datos = $request->all();
        $idDocPlano = $id;
        for ($i = 0; $i < count($datos) - 1; $i++) {
            $campoPlano = camposDocumentoPlanoModel::where([
                ['VC_VALOR_CADENA_2', 'c' . ($i + 1)],
                ['IN_ID_DOC_PLANO', $idDocPlano],
            ])->first();
            if ($campoPlano) {
                $campoPlano->VC_VALOR_CADENA_1 = $datos['c' . ($i + 1)];
                $campoPlano->CH_ID_USUARIO_UPDATE = $usuario->CH_ID_USUARIO;
                $campoPlano->DT_FECHA_UPDATE = now();
                $campoPlano->save();
            } else {
                $cdplano = new camposDocumentoPlanoModel();
                $cdplano->IN_ID_DOC_PLANO = $idDocPlano;
                $cdplano->VC_VALOR_CADENA_1 = $datos['c' . ($i + 1)];
                $cdplano->VC_VALOR_CADENA_2 = 'c' . ($i + 1);
                $cdplano->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
                $cdplano->DT_FECHA_CREACION = now();
                $cdplano->save();
            }
        }
    }

    public function agregarImagenes(Request $request, $id)
    {
        $usuario = session('usu');
        $datos = $request->all();

        if (count($datos) < 2) {
            return response()->json('Pruebe seleccionando una imagen', 400);
        } else {
            $idDocPlano = $id;
            $cabeceras = array_keys($datos);
            $image = $datos[$cabeceras[1]];

            $indice = substr($cabeceras[1], 10);
            $checkImagen = camposDocumentoPlanoModel::where([
                ['IN_ID_DOC_PLANO', $idDocPlano],
                ['VC_VALOR_CADENA_2', 'img' . $indice],
            ])->first();

            if ($checkImagen) {
                Storage::disk('img')->delete($checkImagen->VC_VALOR_CADENA_1);
                if ($image) {
                    $image_path_update = time() . $image->getClientOriginalName();
                    Storage::disk('img')->put($image_path_update, File::get($image));
                }
                $checkImagen->VC_VALOR_CADENA_1 = $image_path_update;
                $checkImagen->CH_ID_USUARIO_UPDATE = $usuario->CH_ID_USUARIO;
                $checkImagen->DT_FECHA_UPDATE = now();
                $checkImagen->save();
            } else {
                if ($image) {
                    $image_path = time() . $image->getClientOriginalName();
                    Storage::disk('img')->put($image_path, File::get($image));
                }
                $campoImagen = new camposDocumentoPlanoModel();
                $campoImagen->IN_ID_DOC_PLANO = $idDocPlano;
                $campoImagen->VC_VALOR_CADENA_1 = $image_path;
                $campoImagen->VC_VALOR_CADENA_2 = 'img' . $indice;
                $campoImagen->VC_VALOR_CADENA_3 = 'IMG';
                $campoImagen->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
                $campoImagen->DT_FECHA_CREACION = now();
                $campoImagen->save();

                return response()->json('La imagen se ha cargado correctamente', 200);
            }
        }
    }

    public function eliminarImagen(Request $request)
    {
        //$nameImg = $_POST['nameImg'];
        $nameImg = $request->input('nameImg');
        Storage::disk('img')->delete($nameImg);
        $campoImagen = camposDocumentoPlanoModel::where('VC_VALOR_CADENA_1', $nameImg)
            ->first();
        $campoImagen->delete();
        return response()->json('La imagen se elimino correctamente');
    }
}
