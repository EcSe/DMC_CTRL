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
Route::post('/',array(
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
Route::get('/verDocPlano', function (){
    return view('docPlantillas');
}); /*---> Ruta para el href de la seccion de vistas */

//RUTAS AJAX PARA PANEL VISTA
Route::post('/buscarDocUsuario','docPlanoUsuarioDetalleController@buscar');
Route::get('/listarDocUsuario','docPlanoUsuarioDetalleController@listar');
//Route::post('/verDocumento','camposDocumentoPlanoController@listar');
Route::post('/verDocumento/{id}','camposDocumentoPlanoController@listar');

//RUTAS DOCUMENTO
Route::post('/agregarImagenes/{id}','camposDocumentoPlanoController@agregarImagenes');
Route::post('/agregarCamposPlano/{id}','camposDocumentoPlanoController@agregar');
Route::post('/borrarImagen','camposDocumentoPlanoController@eliminarImagen');

//RUTA DESCARGA DOCUMENTO
//Route::post('/downloadExcel','camposDocumentoPlanoController@Exportar');
Route::post('/downloadExcel/{idDocPlano}','exportExcelController@leerExcel');
