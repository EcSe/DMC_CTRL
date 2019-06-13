<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proyectoModel;

class proyectoController extends Controller
{
    public function agregarProyecto(){
        $newProyeto = new proyectoModel();
        $usuario = session('usu');
        
        $newProyeto->VC_NOMBRE = $_POST['nombre'];
        $newProyeto->VC_DESCRIPCION = $_POST['descripcion'];
        $newProyeto->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
        $newProyeto->DT_FECHA_CREACION = now();
        $newProyeto->IN_ID_PROVEEDOR = $_POST['idProveedor'];

        $newProyeto->save();
        return response() ->json('El proyecto '.$_POST['nombre'].' se ha creado correctamente');
    }

    public function listarProyecto(){
        $listProyecto = proyectoModel::with('proveedor')->get();
        return response()->json($listProyecto);
    }
}
