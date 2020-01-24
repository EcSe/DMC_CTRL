<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\camposDocumentoMaestroModel;
use App\Models\documentoMaestroModel;

class camposDocumentoMaestroController extends Controller
{
    public function Agregar (Request $request) {
        try {
            if (!$request->input('inIdDocumentoMaestro')) {
                return response()->json('Es necesario elegir un proyecto',400);
            }
            // $rutaImagen = $request->input('inImagenCampo');
            // $ruta_http = substr($rutaImagen,0,8);
            $usuario = session('usu');
            $cdm = camposDocumentoMaestroModel::create([
                'IN_ID_DOC_MAESTRO' => $request->input('inIdDocumentoMaestro'),
                'VC_VALOR_CADENA_1' => $request->input('inDescripcionCampo'),
                'VC_VALOR_CADENA_2' => $request->input('inImagenCampo'),
                'VC_VALOR_CADENA_3' => $request->input('inNameSheet'),
                'CH_ID_USUARIO_CREACION' => $usuario->CH_ID_USUARIO,
                'DT_FECHA_CREACION' => now()
            ]);
            return response()->json('El campo '.$cdm->VC_VALOR_CADENA_1.' ha sido agregado correctamente',200);
        } catch (\Throwable $th) {
           return response()->json($th->getMessage(),500);
        }
      
    }
}
