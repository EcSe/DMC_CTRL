<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedorModel;

class proveedorController extends Controller
{
    public function agregarProveedor(Request $request){
        $newProveedor = new proveedorModel();
        $usuario = session('usu');

        $newProveedor->VC_NOMBRE = $request->input('inNombreProv');
        $newProveedor->VC_DESCRIPCION = $request->input('inDescripcionProv');
        $newProveedor->VC_EMAIL = $request->input('inEmailProv');
        $newProveedor->CH_ID_USUARIO_CREACION  = $usuario->CH_ID_USUARIO;
        $newProveedor->DT_FECHA_CREACION = now();
        $newProveedor->save();

        return response()->json('El proveedor '. $request->input('inNombreProv').' se ha creado correctamente',200);
    }

    public function listarProveedor(){
        $listProveedor = proveedorModel::all();
        return response()->json($listProveedor);
    }
}
