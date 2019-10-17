<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\planoModel;
use App\Models\documentoMaestroModel;
use App\Models\documentoPlanoModel;

class planoController extends Controller
{
    public function agregarPlano(Request $request){
        $newPlano = new planoModel();
        $usuario = session('usu');

        $newPlano->IN_ID_PROYECTO = $request->input('inIdProy');
        $newPlano->VC_NOMBRE = $request->input('inNombrePlano');
        $newPlano->VC_DESCRIPCION = $request->input('inDescripcionPlano'); 
        $newPlano->DT_FECHA_FIN = $request->input('inFechaFin'); 
        $newPlano->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
        $newPlano->DT_FECHA_CREACION = now();
        $newPlano->save();

        /*AL CREAR UN PLANO SE ACTIVA UN DOCUMENTO MAESTRO PARA EL PROYECTO
        VERIFICAMOS SI YA HAY UN DOCUMENTO MAESTRO CREADO*/
        $documentoMaestro = documentoMaestroModel::where('IN_ID_PROYECTO',$request->input('inIdProy'))
                                                    ->first();
        if(count((array) $documentoMaestro) == 0){
            $newDocumentoMaestro = new documentoMaestroModel();
            $newDocumentoMaestro->IN_ID_PROYECTO = $request->input('inIdProy');
            $newDocumentoMaestro->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
            $newDocumentoMaestro->DT_FECHA_CREACION = now();
            $newDocumentoMaestro->save(); 
        }
       
        //TAMBIEN GENERAMOS UN DOCUMENTO PARA EL PLANO
        $plano = planoModel::where([
            ['VC_NOMBRE',$request->input('inNombrePlano')],
            ['VC_DESCRIPCION',$request->input('inDescripcionPlano')]
            ])->first();
        $documentoMaestro = documentoMaestroModel::where('IN_ID_PROYECTO','=',$request->input('inIdProy'))
                                                    ->first();
        
        $newDocPlano = new documentoPlanoModel();
        $newDocPlano->IN_ID_DOC_MAESTRO = $documentoMaestro->IN_ID_DOC_MAESTRO;
        $newDocPlano->IN_ID_PLANO = $plano->IN_ID_PLANO;
        $newDocPlano->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
        $newDocPlano->DT_FECHA_CREACION = now();
        $newDocPlano->save();

        return response()->json('El plano '.$request->input('inNombrePlano').' se ha creado correctamente',200);
    }

    public function listarPlano(){
        $listPlano = planoModel::with('proyecto.proveedor')->get();
        return response()->json($listPlano);
    }
}
