<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
                        @if($usuarioActual->IN_ID_PERFIL == 1)
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
                                <input type="text" id="inValor" placeholder="Ingresar nombre o parte de el" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700  focus:outline-none focus:shadow-outline">
                            </div>
                            <div class="flex justify-between my-3 md:w-1/5">
                                <input type="submit" class="btn btn-success md:px-2" id="subBusqueda" value="Buscar" style="float: left">
                                <input type="button" class="btn btn-success md:mr-2 md:px-1 md:ml-3" value="Por fecha" onclick="listarDocPlanoUsuario()" style="float: right">
                            </div>
                        </div>
                        @endif
                    </form>
                    <div class="w-full">
                        <table id="tblVistaDoc">
                        </table>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabRegistro" name="tabRegistro" role="tabpanel">
                <div class="divMensaje" id="divMensaje">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 form-group" style="display:inline-flex;">
                            <div class="col-md-4">
                                ELIGA UNA ACCION
                            </div>
                            <div class="col-md-4">
                                <select id="cboAgregarTipo" name="cboAgregarTipo" onclick="controlFormularios()" class="flex-auto block bg-white border border-gray-400 hover:border-gray-500 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    <option value="0">Crear proveedor</option>
                                    <option value="1">Crear proyecto</option>
                                    <option value="2">Agregar plano</option>
                                    <option value="3">Asignar Usuario-Documento</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid" id="divAddProveedor" style="display: block">
                    <form id="frmProveedor">
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <input type="text" id="inNombreProv" placeholder="Nombre Proveedor" required class="w-full  bg-gray-200 rounded py-3 px-4 focus:bg-white">
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="inDescripcionProv" placeholder="Descripcion Proveedor" required class="w-full  bg-gray-200 rounded py-3 px-4 focus:bg-white">
                                </div>
                                <div class="col-md-4">
                                    <input class="w-full  bg-gray-200 rounded py-3 px-4 focus:bg-white" type="text" id="inEmailProv" placeholder="Email Proveedor" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <input class="btn btn-success" type="submit" value="AGREGAR" id="inSubAgregarProv">
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid" id="divAddProyecto" style="display: none">
                    <form id="frmProyecto">
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <input type="hidden" id="inIdProv" name="inIdProv">
                                <div class="col-md-4">
                                    <input type="text" id="inNombreProv" name="inNombreProv" placeholder="Nombre Proveedor" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="inNombreProy" placeholder="Nombre Proyecto" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="inDescripcionProy" placeholder="Descripcion Proyecto" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <input class="btn btn-success" type="submit" value="AGREGAR" id="inSubAgregarProy">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="tblProyecto"></table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid" id="divAddPlano" style="display: none">
                    <form id="frmPlano">
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <input type="hidden" id="inIdProy">
                                <div class="col-md-3">
                                    <input type="text" id="inNombreProy" placeholder="Nonbre Proyecto" disabled>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="inNombrePlano" placeholder="Nombre Plano" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" id="inDescripcionPlano" placeholder="Descripcion Plano" required>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" id="inFechaFin" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <input class="btn btn-success" type="submit" value="AGREGAR" id="inSubAgregarPlano">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <table id="tblPlano"></table>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container-fluid" id="divAddUsuarioPlano" style="display: none">
                    <form id="frmUsuarioPlanoDetalle">
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <input type="hidden" id="inIdPlano">
                                <div class="col-md-4">
                                    <input type="text" id="inNombrePlano" placeholder="Nombre Plano" disabled>
                                </div>
                                <div class="col-md-4">
                                    <select id="userSelect" name="userSelect">
                                        <option value="" selected disabled>--Escoger Usuario--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <input class="btn btn-success" type="submit" value="AGREGAR" id="inSubAddUsuarioPlano">
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="tblUsuarioPlano"></table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabCampos" name="tabCampos" role="tabpanel">
                <h1 class="uppercase text-4xl">CAMPOS</h1>
                <div class="divMensajeCampo" id="divMensajeCampo">
                    <p></p>
                </div>
                <div class="container-fluid">
                    <form id="frmDocumentoMaestro" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <input type="hidden" id="inIdDocumentoMaestro">
                                <div class="col-md-4">
                                    <input type="text" id="inNombreProyCampo" placeholder="Nombre Proyecto" disabled>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="inDescripcionCampo" placeholder="Ingresar Descripcion" required>
                                </div>
                                <div class="col-md-4">
                                    <input type="text" id="inImagenCampo" placeholder="Ingresar Ruta Imagen">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group" id="divGuardarCancelar" style="text-align: center; display: none;">
                                <input class="btn btn-success" type="submit" id="btnGuardarCampo" value="GUARDAR">
                                <button class="btn btn-danger" onclick="cancelAddCampo()">CANCELAR</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-md-12">
                            <table id="tblProyectoDocumento"></table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tabRegistroUsuario" name="tabRegistroUsuario" role="tabpanel">
                <h1 class="uppercase text-4xl">REGISTRO USUARIOS</h1>
                <div class="container">
                    <form id="frmUsuario" action="" method="">
                        <div class="row">
                            <div class="col-md-12 form-group" style="display:inline-flex">
                                <div class="col col-md-4">
                                    <input type="text" name="idUsuario" id="idUsuario" placeholder="Ingresar Usuario ID" style="display: inline">
                                </div>
                                <div class="col col-md-4">
                                    <input type="password" name="password" id="password" placeholder="Ingrese Contraseña">
                                </div>
                                <div class="col col-md-4 ">
                                    <input type="text" name="nombre" id="nombre" placeholder="Ingresar Nombre" style="display: inline">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group" style="display:inline-flex">
                                <div class="col-md-4">
                                    <input type="text" name="apellidos" id="apellidos" placeholder="Ingresar Apellidos">
                                </div>
                                <div class="col-md-4">
                                    <select name="idPerfil" id="idPerfil" class="custom-select">
                                        <option value="" selected disabled>--Elegir Perfil--</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Usuario</option>
                                        <option value="3">Proveedor</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <input type="email" name="email" id="email" placeholder="Ingrese Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 form-group">
                                <input type="submit" class="btn btn-success" value="Agregar" style="display: block;margin:auto">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <table id="tblUsuario"></table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
    <script src="js/dmcctrl.js" type="text/javascript"></script>
</body>

</html>