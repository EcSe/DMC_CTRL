<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyectoModel;

class proyectoController extends Controller
{
    public function agregarProyecto(Request $request){
        $newProyeto = new proyectoModel();
        $usuario = session('usu');

        $newProyeto->IN_ID_PROVEEDOR = $request->input('inIdProv'); 
        $newProyeto->VC_NOMBRE = $request->input('inNombreProy');
        $newProyeto->VC_DESCRIPCION = $request->input('inDescripcionProy');
        $newProyeto->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
        $newProyeto->DT_FECHA_CREACION = now();

        $newProyeto->save();
        return response() ->json('El proyecto '.$request->input('inNombreProy').' se ha creado correctamente',200);
    }

    public function listarProyecto(){
        $listProyecto = proyectoModel::with('proveedor')->get();
        return response()->json($listProyecto);
    }
}
