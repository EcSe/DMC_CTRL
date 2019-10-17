<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\camposDocumentoMaestroModel;
use App\Models\documentoMaestroModel;

class camposDocumentoMaestroController extends Controller
{
    public function Agregar (Request $request) {
        $usuario = session('usu');
        $cdm = new camposDocumentoMaestroModel();
        $cdm->IN_ID_DOC_MAESTRO = $request->input('inIdDocumentoMaestro');
        $cdm->VC_VALOR_CADENA_1 = $request->input('inDescripcionCampo');
        $cdm->VC_VALOR_CADENA_2 =  $request->input('inImagenCampo');
        $cdm->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
        $cdm->DT_FECHA_CREACION = now();
        $cdm->save();
        return response()->json('El campo ha sido agregado correctamente',200);
    }
}
