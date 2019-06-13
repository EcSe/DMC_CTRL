<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\usuarioModel;
use Illuminate\Support\Facades\DB;

class usuarioController extends Controller
{
    public function LoginUser(Request $request)
    {
        $usuario = $request->input('idUsuario');
        $password = $request->input('password');
    
        if(DB::table('USUARIO')->count() == 0){
            //Creacion Usuario Maestro
            if($usuario == 'esalinas' && $password == '08121988'){
                $new_user = new usuarioModel();

                $new_user->CH_ID_USUARIO = 'esalinas';
                $new_user->VC_NOMBRE     = 'ELVIN';  
                $new_user->VC_APELLIDOS  = 'SALINAS ESPINOZA';
                $new_user->IN_ID_PERFIL  = 1;
                $password =  '08121988';
                $passwordHash = password_hash($password,PASSWORD_DEFAULT);
                $new_user->VC_PASSWORD   = $passwordHash;
                $new_user->VC_EMAIL      = 'ecse88@gmail.com';
        
                $new_user->save();
                return view('panel',array(
                    session(['usu' => $new_user])
                ));
            }else{
                return redirect()->route('inicioSesion')->with(array(
                    'avisoUser' => 'El Usuario y/o Contraseña son Invalidos'
                ));
            }
        }else{
            $usuarioBD = usuarioModel::where('CH_ID_USUARIO',$usuario)->first();

            if(count((array)$usuarioBD) > 0 && password_verify($password,$usuarioBD->VC_PASSWORD))
            {
             return view('panel',array(
                 session(['usu'=>$usuarioBD])
             ));
            } else{
                return redirect()->route('inicioSesion')->with(array(
                    'avisoUser' => 'El Usuario y/o Contraseña son Invalidos'
                ));
            }
        }
    }

    public function Logout(Request $request)
    {
        $request->session()->flush();
        return view('login');
    }

    public function AgregarUsuario(Request $request)
    {
        $new_user = new usuarioModel();

        $new_user->CH_ID_USUARIO = $_POST['idUsuario'];
        $new_user->VC_NOMBRE     = $_POST['nombre'];   
        $new_user->VC_APELLIDOS  = $_POST['apellidos'];
        $new_user->IN_ID_PERFIL  = $_POST['idPerfil'];
        $password = $_POST['password'];
        $passwordHash = password_hash($password,PASSWORD_DEFAULT);
        $new_user->VC_PASSWORD   = $passwordHash;
        $new_user->VC_EMAIL      = $_POST['email'];

        $new_user->save();
    }

    public function ListarUsuario (){
        $listUser = usuarioModel :: with('perfil')->get();
        return response()->json($listUser);
    }

}
