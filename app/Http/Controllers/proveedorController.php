<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\proveedorModel;

class proveedorController extends Controller
{
    public function agregarProveedor(Request $request){
        $usuario = session('usu');

        $newProveedor = proveedorModel::create([
            'VC_NOMBRE' => $request->input('inNombreProv'),
            'VC_DESCRIPCION' => $request->input('inDescripcionProv'),
            'VC_EMAIL' => $request->input('inEmailProv'),
            'CH_ID_USUARIO_CREACION' => $usuario->CH_ID_USUARIO,
            'DT_FECHA_CREACION' => now()
        ]);
        return response()->json('El proveedor '.$newProveedor->VC_NOMBRE.' se ha creado correctamente');
    }

    public function listarProveedor(){
        $listProveedor = proveedorModel::all();
        return response()->json($listProveedor);
    }
}
