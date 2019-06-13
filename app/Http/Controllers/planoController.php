<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\planoModel;
use App\Models\documentoMaestroModel;
use App\Models\documentoPlanoModel;

class planoController extends Controller
{
    public function agregarPlano(){
        $newPlano = new planoModel();
        $usuario = session('usu');

        $newPlano->VC_NOMBRE = $_POST['nombre'];
        $newPlano->VC_DESCRIPCION = $_POST['descripcion'];
        $newPlano->DT_FECHA_FIN = $_POST['fecha'];
        $newPlano->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
        $newPlano->DT_FECHA_CREACION = now();
        $newPlano->IN_ID_PROYECTO = $_POST['idProyecto'];
        $newPlano->save();

        /*AL CREAR UN PLANO SE ACTIVA UN DOCUMENTO MAESTRO PARA EL PROYECTO
        VERIFICAMOS SI YA HAY UN DOCUMENTO MAESTRO CREADO*/
        //$idproyecto = $_POST['idProyecto'];
        $documentoMaestro = documentoMaestroModel::where('IN_ID_PROYECTO',$_POST['idProyecto'])
                                                    ->first();
        if(count((array) $documentoMaestro) == 0){
            $newDocumentoMaestro = new documentoMaestroModel();
            $newDocumentoMaestro->IN_ID_PROYECTO = $_POST['idProyecto'];
            $newDocumentoMaestro->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
            $newDocumentoMaestro->DT_FECHA_CREACION = now();
            $newDocumentoMaestro->save(); 
        }
       
        //TAMBIEN GENERAMOS UN DOCUMENTO PARA EL PLANO
        $plano = planoModel::where([
            ['VC_NOMBRE',$_POST['nombre']],
            ['VC_DESCRIPCION',$_POST['descripcion']]
            ])->first();
        $documentoMaestro = documentoMaestroModel::where('IN_ID_PROYECTO','=',$_POST['idProyecto'])
                                                    ->first();
        
        $newDocPlano = new documentoPlanoModel();
        $newDocPlano->IN_ID_DOC_MAESTRO = $documentoMaestro->IN_ID_DOC_MAESTRO;
        $newDocPlano->IN_ID_PLANO = $plano->IN_ID_PLANO;
        $newDocPlano->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
        $newDocPlano->DT_FECHA_CREACION = now();
        $newDocPlano->save();

        return response()->json('El plano '.$_POST['nombre'].' se ha creado correctamente');
    }

    public function listarPlano(){
        $listPlano = planoModel::with('proyecto.proveedor')->get();
        return response()->json($listPlano);
    }
}
