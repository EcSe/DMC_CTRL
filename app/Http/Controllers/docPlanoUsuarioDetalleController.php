<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\docPlanoUsuarioDetalleModel;
use App\Models\documentoPlanoModel;

class docPlanoUsuarioDetalleController extends Controller
{
    public function agregar() {
        $docPlanoUsuarioDetalle = new docPlanoUsuarioDetalleModel ();
        $usuario = session('usu');
        $idPlano = $_POST['idPlano'];
        $documentoPlano = documentoPlanoModel::where('IN_ID_PLANO',$idPlano)->first();

        $userDoc = docPlanoUsuarioDetalleModel::where([
                                                ['CH_ID_USUARIO', $_POST['idUsuario']],
                                                ['IN_ID_DOC_PLANO',$documentoPlano->IN_ID_DOC_PLANO]        
                                                ])->first();
        if (count((array)$userDoc) != 0) {
            return response ()->json("El usuario ya estaba asignado al documento");
        }else{
            $docPlanoUsuarioDetalle->CH_ID_USUARIO = $_POST['idUsuario'];
            $docPlanoUsuarioDetalle->IN_ID_DOC_PLANO = $documentoPlano->IN_ID_DOC_PLANO;
            $docPlanoUsuarioDetalle->CH_ID_USUARIO_CREACION = $usuario->CH_ID_USUARIO;
            $docPlanoUsuarioDetalle->DT_FECHA_CREACION = now();
            $docPlanoUsuarioDetalle->save();

            return response()->json('El usuario ha sido asignado correctamente');
        }
    }

    public function buscar () {
        $usuario = session('usu');
        $opcion = $_POST['opcion'];
        $valor = $_POST['valor'];
        if($usuario->IN_ID_PERFIL == 1){
            $vista = DB::select('CALL USP_LISTAR_DOCUMENTOS_ADM(?,?)',array($opcion,$valor));
        }
       return response()->json($vista);
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
