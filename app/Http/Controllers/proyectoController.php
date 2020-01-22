<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyectoModel;

class proyectoController extends Controller
{
    public function agregarProyecto(Request $request){
        $usuario = session('usu');

        if(!$request->input('inIdProv')){
            return response()->json('Escoja un proveedor',400);
        }
        if(!$request->input('inNombreProy')){
            return response()->json('Es necesario elegir un proveedor',400);
        }
        
        $newProyecto = proyectoModel::create([
            'IN_ID_PROVEEDOR' => $request->input('inIdProv'),
            'VC_NOMBRE' => $request->input('inNombreProy'),
            'VC_DESCRIPCION' => $request->input('inDescripcionProy'),
            'CH_ID_USUARIO_CREACION' => $usuario->CH_ID_USUARIO,
            'DT_FECHA_CREACION' => now()
        ]);

        return response()->json('El proyecto '.$newProyecto->VC_NOMBRE.' se ha creado correctamente',200);
    }

    public function listarProyecto(){
        $listProyecto = proyectoModel::with('proveedor')->get();
        return response()->json($listProyecto);
    }
}
