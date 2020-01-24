<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\docPlanoUsuarioDetalleModel;
use App\Models\documentoPlanoModel;

class docPlanoUsuarioDetalleController extends Controller
{
    public function agregar(Request $request) {
        $usuario = session('usu');
        if (!$request->input('inIdPlano')) {
           return response()->json('Es necesario elegir un plano',400);
        }
        $docPlanoUsuarioDetalle = new docPlanoUsuarioDetalleModel ();
        $idPlano = $request->input('inIdPlano');
        $documentoPlano = documentoPlanoModel::where('IN_ID_PLANO',$idPlano)->first();

        $userDoc = docPlanoUsuarioDetalleModel::where([
                                                ['CH_ID_USUARIO',$request->input('userSelect')],
                                                ['IN_ID_DOC_PLANO',$documentoPlano->IN_ID_DOC_PLANO]        
                                                ])->first();
        if ($userDoc) {
            return response()->json("El usuario ya esta asignado al documento",400);
        }else{
            $docPlanoUsuarioDetalle->CH_ID_USUARIO =$request->input('userSelect');
            $docPlanoUsuarioDetalle->IN_ID_DOC_PLANO = $documentoPlano->IN_ID_DOC_PLANO;
            $docPlanoUsuarioDetalle->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
            $docPlanoUsuarioDetalle->DT_FECHA_CREACION = now();
            $docPlanoUsuarioDetalle->save();

            return response()->json('El usuario  ha sido asignado correctamente',200);
        }
    }

    public function buscar (Request $request) {
        $usuario = session('usu');
        $opcion = $request->input('opcion');
        $valor = $request->input('valor');
        if($usuario->IN_ID_PERFIL === 1){
            $vista = DB::select('CALL USP_LISTAR_DOCUMENTOS_ADM(?,?)',array($opcion,$valor));
        }
       return response()->json($vista,200);
    }

    public function listar () {
        $usuario = session('usu');
        if($usuario->IN_ID_PERFIL == 1){
            $opcion = '0';
            $valor = '';
            $lstVista = DB::select('CALL USP_LISTAR_DOCUMENTOS_ADM(?,?)',array($opcion,$valor));
        }else {
            $lstVista = DB::select('CALL USP_LISTAR_DOCUMENTOS(?)',array($usuario->CH_ID_USUARIO));
        }
        return response()->json([
            'listaVista' => $lstVista,
            'idPerfil' => $usuario->IN_ID_PERFIL 
        ]);
    }
}
