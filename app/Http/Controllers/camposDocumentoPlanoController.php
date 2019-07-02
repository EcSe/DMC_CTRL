<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documentoPlanoModel;
use App\Models\camposDocumentoMaestroModel;
use App\Models\camposDocumentoPlanoModel;
use Illuminate\Support\Facades\Storage;

class camposDocumentoPlanoController extends Controller
{
    public function listar () {
        $idDocPlano = $_POST['id'];
        $docuPlano = documentoPlanoModel::where('IN_ID_DOC_PLANO',$idDocPlano)
                                        ->first();
        $listCamposDocuMaestro = camposDocumentoMaestroModel::where('IN_ID_DOC_MAESTRO',$docuPlano->IN_ID_DOC_MAESTRO)
                                                            ->get();
        $listCamposDocuPlano = camposDocumentoPlanoModel::where('IN_ID_DOC_PLANO',$idDocPlano)
                                                        ->get();
        
        return response()->json([
            'camposMaestro' => $listCamposDocuMaestro,
            'camposPlano' => $listCamposDocuPlano
        ]);                                             
    }
    
    public function agregar (Request $request) {
        $usuario = session('usu');
        $datos = $request->all();
        $idDocPlano = $datos['idDocPlano'];
        for($i = 0; $i<count($datos)-1 ; $i++) {
                $campoPlano = camposDocumentoPlanoModel::where([
                                                                ['VC_VALOR_CADENA_2','c'.($i+1)],
                                                                ['IN_ID_DOC_PLANO',$idDocPlano]
                                                                ])->first();
                if(count((array)$campoPlano) > 0){
                    $campoPlano->VC_VALOR_CADENA_1 = $datos['c'.($i+1)];
                    $campoPlano->CH_ID_USUARIO_UPDATE = $usuario->CH_ID_USUARIO;
                    $campoPlano->DT_FECHA_UPDATE = now();
                    $campoPlano->save();
                } else {
                $cdplano = new camposDocumentoPlanoModel();
                $cdplano->IN_ID_DOC_PLANO = $idDocPlano;
                $cdplano->VC_VALOR_CADENA_1 = $datos['c'.($i+1)];
                $cdplano->VC_VALOR_CADENA_2 = 'c'.($i+1);
                $cdplano->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
                $cdplano->DT_FECHA_CREACION = now();
                $cdplano->save(); 
                }
        }
    }

    public function agregarImagenes (Request $request) {
        $usuario = session('usu');
        $datos = $request->all();
        $idDocPlano = $datos['idDocPlano'];
        $cabeceras = array_keys($datos);
        $image = $datos[$cabeceras[1]]; 
        $indice = substr($cabeceras[1],10);
        $checkImagen = camposDocumentoPlanoModel::where([
                                                        ['IN_ID_DOC_PLANO',$idDocPlano],
                                                        ['VC_VALOR_CADENA_2','img'.$indice]
        ])->first();

        if(count((array)$checkImagen) > 0){
            Storage::disk('img')->delete($checkImagen->VC_VALOR_CADENA_1);
            if($image){
                $image_path_update = time().$image->getClientOriginalName();
                \Storage::disk('img')->put($image_path_update,\File::get($image));
            }
            $checkImagen->VC_VALOR_CADENA_1 = $image_path_update;
            $checkImagen->CH_ID_USUARIO_UPDATE = $usuario->CH_ID_USUARIO;
            $checkImagen->DT_FECHA_UPDATE = now();
            $checkImagen->save();
        }else{
            if($image){
                $image_path = time().$image->getClientOriginalName();
                \Storage::disk('img')->put($image_path,\File::get($image));
            }
            $campoImagen = new camposDocumentoPlanoModel();
            $campoImagen->IN_ID_DOC_PLANO = $idDocPlano;
            $campoImagen->VC_VALOR_CADENA_1 = $image_path;
            $campoImagen->VC_VALOR_CADENA_2 = 'img'.$indice;
            $campoImagen->VC_VALOR_CADENA_3 = 'IMG';
            $campoImagen->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
            $campoImagen->DT_FECHA_CREACION = now();
            $campoImagen->save();
        }
       

    }
}
