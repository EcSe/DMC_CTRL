<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedorModel;

class proveedorController extends Controller
{
    public function agregarProveedor(){
        $newProveedor = new proveedorModel();
        $usuario = session('usu');

        $newProveedor->VC_NOMBRE = $_POST['nombre'];
        $newProveedor->VC_DESCRIPCION = $_POST['descripcion'];
        $newProveedor->VC_EMAIL = $_POST['email'];
        $newProveedor->CH_ID_USUARIO_CREACION  = $usuario->CH_ID_USUARIO;
        $newProveedor->DT_FECHA_CREACION = now();
        $newProveedor->save();

        return response()->json('El proveedor '.$_POST['nombre'].' se ha creado correctamente');
    }

    public function listarProveedor(){
        $listProveedor = proveedorModel::all();
        return response()->json($listProveedor);
    }
}
