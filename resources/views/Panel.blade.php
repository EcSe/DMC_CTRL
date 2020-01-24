<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/dmcctrl.css">
    <title>Document</title>
</head>

<body>
    @php $usuarioActual = session('usu'); @endphp
    <div id="navbar-example">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabVistas" role="tab">VISTAS</a>
            </li>
            @if($usuarioActual->IN_ID_PERFIL == 1)
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabCampos">CAMPOS</a>
            </li>
            <li class="nav-item" name="liRegistro" id="liRegistro">
                <a class="nav-link" data-toggle="tab" href="#tabRegistroUsuario">REGISTRO USUARIOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabRegistro" role="tab">PANEL CONTROL</a>
            </li>
            @endif
        </ul>
        <div class="flex my-3">
            <div class="ml-3 w-2/3">
                <p>Bienvenido, <span class="italic">{{$usuarioActual->VC_NOMBRE}} {{$usuarioActual->VC_APELLIDOS}}</span></p>
            </div>
            <div class="w-1/3 mr-3">
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <input type="submit" value="Salir" class="bg-red-500 font-bold text-white rounded py-2 px-4 float-right mr-0 ml-3">
                </form>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tabVistas" name="tabVistas" role="tabpanel">
                <h1 class="uppercase text-4xl">Vistas</h1>
                <div class="divMensaje" id="divMensajeVista">
                    <p></p>
                </div>
                <div class="container-fluid">
                    <form id="frmVista">
                        @csrf @if($usuarioActual->IN_ID_PERFIL == 1)
                        <div class="md:flex md:justify-between" id="opcionesBusqueda">
                            <div class="flex md:w-2/5  md:mr-3">
                                <label for="opciones" class="flex-auto font-bold text-lg text-gray-700 md:self-center">Buscar por: </label>
                                <select id="selectOpciones" name="selectOpciones" required class="flex-auto block bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline md:my-4">
                                                <option value="" selected disabled>--Elegir Criterio</option>
                                                <option value="1">Usuario</option>
                                                <option value="2">Proveedor</option>
                                                <option value="3">Proyecto</option>
                                                <option value="4">Plano</option>
                                </select>
                            </div>
                            <div class="my-3 md:w-2/5 md:mx-3">
                                <input type="text" id="inValor" name='inValor' placeholder="Ingresar nombre o parte de el" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="flex justify-between my-3 md:w-1/5">
                                <input type="submit" class="btn btn-success md:px-2" id="subBusqueda" value="Buscar" style="float: left">
                                <input type="button" class="btn btn-success md:mr-2 md:px-1 md:ml-3" value="Por fecha" onclick="listarDocPlanoUsuario()" style="float: right">
                            </div>
                        </div>
                        @endif
                    </form>
                    <div class="w-full overflow-x-auto">
                        <table id="tblVistaDoc">
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabRegistro" name="tabRegistro" role="tabpanel">
                <div class="container">
                    <div id="alertRegistro" class="bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3 hidden" role="alert">
                        <p class="font-bold">Mensaje Informativo</p>
                        <p id="pRegisterMessage" class="text-sm"></p>
                    </div>
                    <div class="flex">
                        <span class="self-center mr-3">ELIjA UNA ACCION</span>
                        <select id="cboAgregarTipo" name="cboAgregarTipo" onclick="controlFormularios()" class="flex-auto block bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline ml-3 mb-2">
                            <option value="0">Crear proveedor</option>
                            <option value="1">Crear proyecto</option>
                            <option value="2">Agregar plano</option>
                            <option value="3">Asignar Usuario-Documento</option>
                        </select>
                    </div>
                </div>
                <div class="container" id="divAddProveedor" style="display: block">
                    <form id="frmProveedor">
                        @csrf
                        <div class="flex flex-col my-2 md:flex-row">
                            <input type="text" id="inNombreProv" name="inNombreProv" placeholder="Nombre Proveedor" required class="w-full text-center my-2 rounded py-3 px-4 focus:bg-white md:w-1/3 md:mr-2">
                            <input type="text" id="inDescripcionProv" name="inDescripcionProv" placeholder="Descripcion Proveedor" required class="w-full text-center my-2 rounded py-3 px-4 focus:bg-white md:w-1/3 md:mr-2">
                            <input type="text" id="inEmailProv" name="inEmailProv" placeholder="Email Proveedor" required class="w-full text-center my-2 rounded py-3 px-4 focus:bg-white md:w-1/3 md:ml-2">
                        </div>
                        <div class="flex justify-center">
                            <input class="text-white py-2 px-3 bg-green-500 rounded" type="submit" value="AGREGAR" id="inSubAgregarProv">
                        </div>
                    </form>
                </div>
                <div class="container" id="divAddProyecto" style="display: none">
                    <form id="frmProyecto">
                        @csrf
                        <div class="flex flex-col my-2 md:flex-row">
                            <input class='hidden' id="inIdProv" name="inIdProv">
                            <input type="text" id="inNombreProv" name="inNombreProv" placeholder="Nombre Proveedor" disabled class="w-full text-center py-2 px-3 rounded my-2 md:w-1/3 md:mr-2">
                            <input type="text" id="inNombreProy" name="inNombreProy" placeholder="Nombre Proyecto" required class="w-full text-center py-2 px-3 rounded my-2 md:w-1/3 md:mx-2">
                            <input type="text" id="inDescripcionProy" name="inDescripcionProy" placeholder="Descripcion Proyecto" required class="w-full text-center py-2 px-3 rounded my-2 md:w-1/3 md:ml-2">
                        </div>
                        <div class="flex justify-center my-2">
                            <input class="text-white bg-green-500 rounded py-2 px-3" type="submit" value="AGREGAR" id="inSubAgregarProy">
                        </div>
                        <div class="w-full overflow-x-auto">
                            <table id="tblProyecto"></table>
                        </div>
                    </form>
                </div>
                <div class="container" id="divAddPlano" style="display: none">
                    <form id="frmPlano">
                        @csrf
                        <div class="flex flex-col my-2 md:flex-row">
                            <input  id="inIdProy" class='hidden' name="inIdProy">
                            <input type="text" id="inNombreProy" name="inNombreProy" placeholder="Nonbre Proyecto" disabled class="w-full text-center py-2 px-3 my-2 md:w-1/3 md:mr-2">
                            <input type="text" id="inNombrePlano" name="inNombrePlano" placeholder="Nombre Plano" required class="w-full text-center py-2 px-3 my-2 md:w-1/3 md:mx-2">
                            <input type="text" id="inDescripcionPlano" name="inDescripcionPlano" placeholder="Descripcion Plano" required class="w-full text-center py-2 px-3 my-2 md:w-1/3 md:mx-2">
                            <input type="date" id="inFechaFin" name="inFechaFin" required class="w-full text-center py-2 px-3 my-2 md:w-1/3 md:ml-2">
                        </div>
                        <div class="flex justify-center my-2">
                            <input class="text-white bg-green-500 rounded py-2 px-3" type="submit" value="AGREGAR" id="inSubAgregarPlano">
                        </div>
                        <div class="w-full overflow-x-auto">
                            <table id="tblPlano"></table>
                        </div>
                    </form>
                </div>
                <div class="container" id="divAddUsuarioPlano" style="display: none">
                    <form id="frmUsuarioPlanoDetalle">
                        @csrf
                        <div class="flex flex-col my-2 md:flex-row">
                            <input class='hidden' id="inIdPlano" name="inIdPlano">
                            <input type="text" id="inNombrePlano" name="inNombrePlano" placeholder="Nombre Plano" disabled class="w-full py-2 px-3 my-2 md:w-1/2 md:mr-2">
                            <select id="userSelect" name="userSelect" class="my-2 py-2 px-3 md:w-1/2 md:ml-2">
                                        <option value="" selected disabled>--Escoger Usuario--</option>
                            </select>
                        </div>
                        <div class="flex justify-center my-2">
                            <input class="text-white bg-green-500 rounded py-2 px-3" type="submit" value="AGREGAR" id="inSubAddUsuarioPlano">
                        </div>
                    </form>
                    <div class="w-full overflow-x-auto">
                        <table id="tblUsuarioPlano"></table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabCampos" name="tabCampos" role="tabpanel">
                <h1 class="uppercase text-4xl">CAMPOS</h1>
                <div class="container-fluid">
                    <div id="alertCampo" class="bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3 hidden" role="alert">
                        <p class="font-bold">Mensaje Informativo</p>
                        <p id="pCampoMessage" class="text-sm"></p>
                    </div>
                    <form id="frmDocumentoMaestro" enctype="multipart/form-data">
                        @csrf
                        <div class="md:flex mb-2">
                            <input class='hidden' id="inIdDocumentoMaestro" name="inIdDocumentoMaestro">
                            <input type="text" id="inNombreProyCampo" name="inNombreProyCampo" placeholder="Nombre Proyecto" disabled class="w-full my-2 text-center px-2 py-3 md:mr-3">
                            <input type="text" id="inDescripcionCampo" name="inDescripcionCampo" placeholder="Ingresar Descripcion" required class="w-full my-2 text-center py-2 px-3 md:mx-3">
                            <input type="text" id="inImagenCampo" name="inImagenCampo" placeholder="Ingresar Ruta Imagen" class="w-full my-2 text-center py-2 px-3 border-solid md:ml-3">
                            <input type="text" id="inNameSheet" name="inNameSheet" placeholder="Nombre hoja Excel" class="w-full my-2 text-center py-2 px-3 border-solid md:ml-3">
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group" id="divGuardarCancelar" style="text-align: center; display: none;">
                                <input class="btn btn-success" type="submit" id="btnGuardarCampo" value="GUARDAR">
                                <button class="btn btn-danger" onclick="cancelAddCampo()">CANCELAR</button>
                            </div>
                        </div>
                    </form>
                    <div class="w-full overflow-x-auto">
                        <table id="tblProyectoDocumento"></table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabRegistroUsuario" name="tabRegistroUsuario" role="tabpanel">
                <h1 class="uppercase text-2xl">REGISTRO USUARIOS</h1>
                <div class="container">
                    <div id="alertUser" class="bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3 hidden" role="alert">
                        <p class="font-bold">Mensaje Informativo</p>
                        <p id="pUserMessage" class="text-sm"></p>
                    </div>
                    <form id="frmUsuario">
                        @csrf
                        <div class="flex flex-col md:flex-row md:justify-between">
                            <input type="text" name="idUsuario" id="idUsuario" placeholder="Ingresar Usuario ID" class="my-2 py-2 px-3 rounded text-center md:w-1/3 md:mr-3">
                            <input type="password" name="password" id="password" placeholder="Ingrese Contraseña" class="my-2 py-2 px-3 rounded text-center md:w-1/3 md:mx-3">
                            <input type="text" name="nombre" id="nombre" placeholder="Ingresar Nombre" class="my-2 py-2 px-3 rounded text-center md:w-1/3 md:ml-3">
                        </div>
                        <div class="flex flex-col md:flex-row md:justify-between">
                            <input type="text" name="apellidos" id="apellidos" placeholder="Ingresar Apellidos" class="my-2 py-2 px-3 rounded text-center md:w-1/3 md:mr-3">
                            <select name="idPerfil" id="idPerfil" class="my-2 py-2 px-3 rounded text-center md:w-1/3 md:mx-3">
                                        <option value="" selected disabled>--Elegir Perfil--</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Usuario</option>
                                        <option value="3">Proveedor</option>
                                    </select>
                            <input type="email" name="email" id="email" placeholder="Ingrese Email" class="my-2 py-2 px-3 rounded text-center md:w-1/3 md:ml-3">
                        </div>
                        <div class="flex my-2 justify-center">
                            <input type="submit" class="text-white bg-green-500 rounded py-2 px-3" value="Agregar">
                        </div>
                    </form>
                    <div class="w-full overflow-x-auto">
                        <table id="tblUsuario"></table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
    <script src="js/dmcctrl.js" type="text/javascript"></script>
    <script>
		let appurl = "{{config("app.url")}}";
    </script>
</body>

</html>