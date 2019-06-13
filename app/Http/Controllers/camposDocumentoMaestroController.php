<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\camposDocumentoMaestroModel;
use App\Models\documentoMaestroModel;

class camposDocumentoMaestroController extends Controller
{
    public function Agregar () {
        $usuario = session('usu');
        $cdm = new camposDocumentoMaestroModel();
        $cdm->IN_ID_DOC_MAESTRO = $_POST['idDocumentoMaestro'];
        $cdm->VC_VALOR_CADENA_1 = $_POST['descripcion'];
        $cdm->VC_VALOR_CADENA_2 =  $_POST['imagenCampos'];
        $cdm->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
        $cdm->DT_FECHA_CREACION = now();
        $cdm->save();
        return response()->json('El campos ha sido agregado correctamente');
    }

    public function listarCampos (Request $request){
        $usuario = session('usu');
        $idDocumentoMaestro = $request->input('idDocumentoMaestro');
        // $idDocumentoMaestro2 = $request->input('valorprueba');
        $listaCampos = camposDocumentoMaestroModel::where('IN_ID_DOC_MAESTRO',$idDocumentoMaestro)
                                                    ->get();
        $documentoMaestro = documentoMaestroModel::with('proyecto.proveedor')
                                                    ->where('IN_ID_DOC_MAESTRO',$idDocumentoMaestro)
                                                    ->first();
        return view('docTemplate',array(
            'campos' => $listaCampos,
            'datosDocumento' => $documentoMaestro
        ));
    }
}
