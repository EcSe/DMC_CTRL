<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\documentoMaestroModel;

class documentoMaestroController extends Controller
{
    public function listar(){
        $listDocMaestro = documentoMaestroModel::with('proyecto.proveedor')->get();
        return response()->json($listDocMaestro);
    }
}
