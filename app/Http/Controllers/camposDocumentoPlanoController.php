<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documentoPlanoModel;
use App\Models\camposDocumentoMaestroModel;
use App\Models\camposDocumentoPlanoModel;

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
}
