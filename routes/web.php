<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',function(){
    return view('Login');
})->name('inicioSesion');
Route::post('panel', array(
    'as' => 'loginUser',
    'uses' => 'usuarioController@LoginUser'
));
Route::post('/logout',array(
    'as' => 'logout',
    'uses' => 'usuarioController@Logout'
));

// RUTAS AJAX
Route::post('/agregarProveedor','proveedorController@agregarProveedor');
Route::get('/listarProveedor','proveedorController@listarProveedor');
Route::post('/agregarProyecto','proyectoController@agregarProyecto');
Route::get('/listaProyectos','proyectoController@listarProyecto');
Route::post('/agregarPlano','planoController@agregarPlano');
Route::get('/listaPlanos','planoController@listarPlano');
Route::post('/agregarUsuario','usuarioController@AgregarUsuario');
Route::get('/listUsuarios','usuarioController@ListarUsuario');
Route::post('/agregarDocumentPlanoUsuario','docPlanoUsuarioDetalleController@agregar');

//RUTAS AJAX PANEL CAMPOS 
Route::get('/listarDocumentoMaestro','documentoMaestroController@listar');
Route::post('/agregarCampoDocumento','camposDocumentoMaestroController@Agregar');
Route::post('/listarCampos','camposDocumentoMaestroController@listarCampos');

Route::post('documentoMaestro',array(
    'as' => 'documento',
    'uses' => 'camposDocumentoMaestroController@listarCampos'
));

//RUTAS AJAX PARA PANEL VISTA
Route::post('/buscarDocUsuario','docPlanoUsuarioDetalleController@buscar');
Route::get('/listarDocUsuario','docPlanoUsuarioDetalleController@listar');