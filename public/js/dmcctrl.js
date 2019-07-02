// Variables Globales
var divMensaje = document.getElementById('divMensaje'),
    divProveedor = document.getElementById('divAddProveedor'),
    divProyecto = document.getElementById('divAddProyecto'),
    divPlano = document.getElementById('divAddPlano'),
    tblProyecto = document.getElementById('tblProyecto'),
    tblPlano = document.getElementById('tblPlano'),
    tblUsuarioPlano = document.getElementById('tblUsuarioPlano');
frmProveedor = document.getElementById('frmProveedor'),
    frmProyecto = document.getElementById('frmProyecto'),
    frmUsuario = document.getElementById('frmUsuario');
frmUsuarioPlanoDetail = document.getElementById('frmUsuarioPlanoDetalle');
// cboProv = document.getElementById('cboProveedor');

//#region VARIABLES PANEL CAMPOS
var divMensajeCampo = document.getElementById('divMensajeCampo'),
    divGuardarCancelar = document.getElementById('divGuardarCancelar'),
    inNombreProyectoCampo = document.getElementById('inNombreProyCampo'),
    inIdDocumentoMaestro = document.getElementById('inIdDocumentoMaestro'),
    inDescripcion = document.getElementById('inDescripcionCampo'),
    inImagenCampo = document.getElementById('inImagenCampo');
tblProyectoDocumento = document.getElementById('tblProyectoDocumento');
frmDocumentoMaestroProy = document.getElementById('frmDocumentoMaestro');
//#endregion

//VARIABLES PANEL VISTA
let divMensajeVista = document.getElementById('divMensajeVista');
tblPanelVista = document.getElementById('tblVistaDoc'),
    frmVista = document.getElementById('frmVista');
//VARIABLES PANEL REGISTRO
let tblUsuario = document.getElementById('tblUsuario');

frmProveedor.addEventListener('submit', function(e) {
    agregarProveedor(e);
});
frmProyecto.addEventListener('submit', function(e) {
    agregarProyecto(e);
});
frmPlano.addEventListener('submit', function(e) {
    agregarPlano(e);
});
frmUsuario.addEventListener('submit', function(e) {
    agregarUsuario(e);
});
frmDocumentoMaestroProy.addEventListener('submit', function(e) {
    AgregarCamposDocumento(e);
});
frmUsuarioPlanoDetail.addEventListener('submit', (e) => {
    agregarUsuarioDocPlanoDetalle(e)
});

frmVista.addEventListener('submit', (e) => {
    buscarDocPlanoUsuario(e);
});

//PANTALLA PANEL DE CONTROL
function controlFormularios() {
    divMensaje.style.display = "none";
    var cboValue = document.getElementById('cboAgregarTipo').value;
    cboValue == 0 ? (divProveedor.style.display = "block",
            divProyecto.style.display = "none",
            divAddUsuarioPlano.style.display = "none",
            divPlano.style.display = "none") :
        cboValue == 1 ? (divProyecto.style.display = "block",
            divProveedor.style.display = "none",
            divPlano.style.display = "none",
            divAddUsuarioPlano.style.display = "none",
            listaProveedor()) :
        cboValue == 2 ? (divPlano.style.display = "block",
            divProveedor.style.display = "none",
            divProyecto.style.display = "none",
            divAddUsuarioPlano.style.display = "none",
            listaProyecto()) :
        cboValue == 3 ? (divAddUsuarioPlano.style.display = "block",
            divPlano.style.display = "none",
            divProveedor.style.display = "none",
            divProyecto.style.display = "none",
            listarPlano()) :
        false
}

function agregarProveedor(e) {
    e.preventDefault();
    var petProveedor = new XMLHttpRequest();
    petProveedor.open('POST', '/agregarProveedor', true);
    //agregar loader
    paramNombre = frmProveedor.inNombreProv.value.trim();
    paramDescripcion = frmProveedor.inDescripcionProv.value.trim();
    paramEmail = frmProveedor.inEmailProv.value.trim();

    var paramProveedor = 'nombre=' + paramNombre + '&descripcion=' + paramDescripcion +
        '&email=' + paramEmail;
    petProveedor.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    petProveedor.onload = () => {};
    petProveedor.onreadystatechange = () => {
        if (petProveedor.readyState == 4 && petProveedor.status == 200) {
            frmProveedor.inNombreProv.value = "";
            frmProveedor.inDescripcionProv.value = "";
            frmProveedor.inEmailProv.value = "";
            let mensaje = JSON.parse(petProveedor.responseText);
            divMensaje.innerHTML = mensaje;
            divMensaje.style.display = "block"
        } else if (petProveedor.status != 200) {
            divMensaje.style.backgroundColor = "red";
            divMensaje.innerHTML = "Ha ocurrido un problema";
            divMensaje.style.display = "block"
        }
    };
    petProveedor.send(paramProveedor);
}

function listaProveedor() {
    // e.preventDefault();
    var petlistProveedor = new XMLHttpRequest();
    petlistProveedor.open('GET', '/listarProveedor');
    //Agregar Loader

    petlistProveedor.onload = function() {
        var listProve = JSON.parse(petlistProveedor.responseText);
        tblProyecto.innerHTML = '<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">DESCRIPCION</th><th scope="col">EMAIL</th><th scope="col">ACCIONES</th></tr></thead>';
        for (var i = 0; listProve.length; i++) {
            var fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none;">' + listProve[i].IN_ID_PROVEEDOR + '</td>');
            fila.innerHTML += ('<td>' + listProve[i].VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listProve[i].VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td>' + listProve[i].VC_EMAIL + '</td>');
            fila.innerHTML += ('<td><input type="button" value="A" onclick="addInputProy(this)"></td>');

            tblProyecto.appendChild(fila);
        }
    };

    petlistProveedor.onreadystatechange = function() {
        if (petlistProveedor.readyState == 4 && petlistProveedor.status == 200) {
            //borrar loader
        }
    }
    petlistProveedor.send();
};

function addInputProy(e) {
    divMensaje.style.display = "none";
    var idProv = e.parentNode.parentElement.cells[0].innerHTML,
        nombreProv = e.parentNode.parentElement.cells[1].innerHTML;
    frmProyecto.inIdProv.value = idProv;
    frmProyecto.inNombreProv.value = nombreProv;
}

function agregarProyecto(e) {
    e.preventDefault();
    var petProyecto = new XMLHttpRequest();
    petProyecto.open('POST', '/agregarProyecto');
    //agregar loader
    paramIdProveedor = frmProyecto.inIdProv.value.trim();
    paramNombre = frmProyecto.inNombreProy.value.trim();
    paramDescripcion = frmProyecto.inDescripcionProy.value.trim();

    var paramProyecto = 'idProveedor=' + paramIdProveedor +
        '&nombre=' + paramNombre + '&descripcion=' + paramDescripcion;
    petProyecto.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    petProyecto.onload = () => {}
    petProyecto.onreadystatechange = () => {
        if (petProyecto.readyState == 4 && petProyecto.status == 200) {
            frmProyecto.inNombreProv.value = "";
            frmProyecto.inNombreProy.value = "";
            frmProyecto.inDescripcionProy.value = "";
            let mensaje = JSON.parse(petProyecto.responseText);
            divMensaje.innerHTML = mensaje;
            divMensaje.style.display = "block";

        } else if (petProyecto.status != 200) {
            divMensaje.style.backgroundColor = "red";
            divMensaje.innerHTML = "Ha ocurrido un problema"
            divMensaje.style.display = "block";
        }
    };
    petProyecto.send(paramProyecto);
}

function listaProyecto() {
    var petlistProyecto = new XMLHttpRequest();
    petlistProyecto.open('GET', '/listaProyectos');
    //cargaloader

    petlistProyecto.onload = function() {
        var listProyecto = JSON.parse(petlistProyecto.responseText);
        tblPlano.innerHTML = `<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">DESCRIPCION</th>
                                <th scope="col">PROYECTO</th><th scope="col">DESCRIPCION</th>
                                <th scope="col">ACCIONES</th></tr></thead>`;
        for (let i = 0; listProyecto.length; i++) {
            let fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none;">' + listProyecto[i].IN_ID_PROYECTO + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].proveedor.VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td><input type="button" value="A" onclick="addInputPlano(this)"></td>');
            tblPlano.appendChild(fila);
        }
    };

    petlistProyecto.onreadystatechange = function() {
        if (petlistProyecto.readyState == 4 && petlistProyecto.status == 200) {
            //borrar loader
        }
    };

    petlistProyecto.send();
}

function addInputPlano(e) {
    divMensaje.style.display = "none";
    var idProy = e.parentNode.parentElement.cells[0].innerHTML;
    nombreProy = e.parentNode.parentElement.cells[3].innerHTML;
    frmPlano.inIdProy.value = idProy;
    frmPlano.inNombreProy.value = nombreProy;
}

function agregarPlano(e) {
    e.preventDefault();
    var petPlano = new XMLHttpRequest();
    petPlano.open('POST', '/agregarPlano')
        //agregar loader
    paramIdProyecto = frmPlano.inIdProy.value.trim();
    paramNombre = frmPlano.inNombrePlano.value.trim();
    paramDescripcion = frmPlano.inDescripcionPlano.value.trim();
    paramFechaFin = frmPlano.inFechaFin.value.trim();

    var paramPlano = 'idProyecto=' + paramIdProyecto + '&nombre=' +
        paramNombre + '&descripcion=' + paramDescripcion + '&fecha=' + paramFechaFin;
    petPlano.setRequestHeader('Content-type', "application/x-www-form-urlencoded");

    petPlano.onload = function() {

    };

    petPlano.onreadystatechange = function() {
        if (petPlano.readyState == 4 && petPlano.status == 200) {
            frmPlano.inNombreProy.value = "";
            frmPlano.inNombrePlano.value = "";
            frmPlano.inDescripcionPlano.value = "";
            frmPlano.inFechaFin.value = "";
            let mensaje = JSON.parse(petPlano.responseText);
            divMensaje.innerHTML = mensaje;
            divMensaje.style.display = "block";
        } else if (petPlano.status != 200) {
            divMensaje.style.backgroundColor = "red";
            divMensaje.innerHTML = "Ha ocurrido un problema"
            divMensaje.style.display = "block";
        }
    };
    petPlano.send(paramPlano);
}

function listarPlano() {
    var petlistPlano = new XMLHttpRequest();
    petlistPlano.open('GET', '/listaPlanos');

    petlistPlano.onload = function() {
        var listPlano = JSON.parse(petlistPlano.responseText);
        tblUsuarioPlano.innerHTML = '<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">PROYECTO</th><th scope="col">PLANO</th><th scope="col">ACCIONES</th></tr></thead>';
        for (var i = 0; listPlano.length; i++) {
            var fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none">' + listPlano[i].IN_ID_PLANO + '</td>');
            fila.innerHTML += ('<td>' + listPlano[i].proyecto.proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listPlano[i].proyecto.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listPlano[i].VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td><input type="button" value="A" onclick="addInputUsuarioPlano(this)"></td>');

            tblUsuarioPlano.appendChild(fila);
        }
    };

    petlistPlano.onreadystatechange = () => {
        if (petlistPlano.readyState == 4 && petlistPlano.status == 200) {
            //borrar loader
        }
    };
    petlistPlano.send();
}


let agregarUsuario = (e) => {
    e.preventDefault();
    var petUsuario = new XMLHttpRequest();
    petUsuario.open('POST', '/agregarUsuario');
    //cargar loader
    pIdUsuario = frmUsuario.idUsuario.value.trim();
    pPassword = frmUsuario.password.value.trim();
    pNombre = frmUsuario.nombre.value.trim();
    pApellidos = frmUsuario.apellidos.value.trim();
    pIdPerfil = frmUsuario.idPerfil.value.trim();
    pEmail = frmUsuario.email.value.trim();

    var paramUsuarios = 'idUsuario=' + pIdUsuario + '&password=' + pPassword + '&nombre=' + pNombre +
        '&apellidos=' + pApellidos + '&idPerfil=' + pIdPerfil + '&email=' + pEmail;
    petUsuario.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    petUsuario.onload = () => {

    };

    petUsuario.onreadystatechange = () => {
        if (petUsuario.readyState == 4 && petUsuario.status == 200) {
            listarUsuario();
            frmUsuario.idUsuario.value = "";
            frmUsuario.password.value = ""
            frmUsuario.nombre.value = "";
            frmUsuario.apellidos.value = "";
            frmUsuario.idPerfil.value = "";
            frmUsuario.email.value = "";
        }
    };
    petUsuario.send(paramUsuarios);
}

let listarUsuariosCombo = (e) => {
    var petListUsuarios = new XMLHttpRequest();
    petListUsuarios.open('GET', '/listUsuarios');

    petListUsuarios.onload = () => {
        var lstUsuarios = JSON.parse(petListUsuarios.responseText);
        var selectUser = document.getElementById('userSelect');
        for (var i = 0; lstUsuarios.length; i++) {
            var option = document.createElement('option');
            option.text = lstUsuarios[i].VC_NOMBRE + ' ' + lstUsuarios[i].VC_APELLIDOS;
            option.value = lstUsuarios[i].CH_ID_USUARIO;
            selectUser.appendChild(option);
        }
    }

    petListUsuarios.onreadystatechange = function() {
        if (petListUsuarios.readyState == 4 && petListUsuarios.status == 200) {

        }
    }
    petListUsuarios.send();
}

let addInputUsuarioPlano = (e) => {
    divMensaje.style.display = "none";
    var selectUser = document.getElementById('userSelect');
    selectUser.options.length = 0;
    var idPlano = e.parentNode.parentElement.cells[0].innerHTML,
        nombrePlano = e.parentNode.parentElement.cells[3].innerHTML;
    frmUsuarioPlanoDetail.inIdPlano.value = idPlano;
    frmUsuarioPlanoDetail.inNombrePlano.value = nombrePlano;
    listarUsuariosCombo();
}

let agregarUsuarioDocPlanoDetalle = (e) => {
    e.preventDefault();
    var petAddDocPlanDetalle = new XMLHttpRequest();
    petAddDocPlanDetalle.open('POST', '/agregarDocumentPlanoUsuario');
    //cargar loader
    pIdPlano = frmUsuarioPlanoDetail.inIdPlano.value.trim();
    pIdUsuario = frmUsuarioPlanoDetail.userSelect.value.trim();

    var parametros = 'idUsuario=' + pIdUsuario + '&idPlano=' + pIdPlano;
    petAddDocPlanDetalle.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    petAddDocPlanDetalle.onload = function() {}

    petAddDocPlanDetalle.onreadystatechange = () => {
        if (petAddDocPlanDetalle.readyState == 4 && petAddDocPlanDetalle.status == 200) {
            frmUsuarioPlanoDetail.inIdPlano.value = "";
            frmUsuarioPlanoDetail.inNombrePlano.value = "";
            let mensaje = JSON.parse(petAddDocPlanDetalle.responseText);
            divMensaje.innerHTML = mensaje;
            divMensaje.style.display = "block";
        } else if (petAddDocPlanDetalle.status != 200) {
            divMensaje.innerHTML = "Ha ocurrido un error";
            divMensaje.style.backgroundColor = "red";
            divMensaje.style.display = "block;"
        }
    }

    petAddDocPlanDetalle.send(parametros);
}

//FUNCIONES PANEL  CAMPOS 
document.addEventListener('DOMContentLoaded', (event) => {
    docuMaestroCampos();
    listarDocPlanoUsuario();
    listarUsuario();
})

let docuMaestroCampos = () => {
    var petDocMasestro = new XMLHttpRequest();
    petDocMasestro.open('GET', '/listarDocumentoMaestro');
    //cargaloader

    petDocMasestro.onload = function() {
        var listProyecto = JSON.parse(petDocMasestro.responseText);
        tblProyectoDocumento.innerHTML = '<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">DESCRIPCION</th><th scope="col">PROYECTO</th><th scope="col">DESCRIPCION</th><th scope="col">ACCIONES</th></tr></thead>';
        for (var i = 0; listProyecto.length; i++) {
            var fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none;">' + listProyecto[i].IN_ID_DOC_MAESTRO + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].proyecto.proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].proyecto.proveedor.VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].proyecto.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].proyecto.VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td><input type="button" onclick= "AddCampo(this)" value="AC">&nbsp&nbsp<input type="button" onclick="" value="VER"></td>');
            tblProyectoDocumento.appendChild(fila);
        }
    };

    petDocMasestro.onreadystatechange = () => {
        if (petDocMasestro.readyState == 4 && petDocMasestro.status == 200) {
            //cargar loader
        }
    };

    petDocMasestro.send();
}

let AddCampo = (e) => {
    inIdDocumentoMaestro.value = e.parentNode.parentElement.cells[0].innerHTML;
    inNombreProyectoCampo.value = e.parentNode.parentElement.cells[3].innerHTML;
    divGuardarCancelar.style.display = "block";
    divMensajeCampo.style.display = "none";
}


function cancelAddCampo() {
    inNombreProyectoCampo.value = "";
    inIdDocumentoMaestro.value = "";
    inDescripcion.value = "";
    divGuardarCancelar.style.display = "none";
}

let AgregarCamposDocumento = (e) => {
    e.preventDefault();
    var petCampoDocumento = new XMLHttpRequest();
    petCampoDocumento.open('POST', '/agregarCampoDocumento');
    //agregar loader
    paramIdDocumentoMaestro = frmDocumentoMaestro.inIdDocumentoMaestro.value.trim();
    paramDescripcionCampos = frmDocumentoMaestro.inDescripcionCampo.value.trim();
    paramImagen = frmDocumentoMaestro.inImagenCampo.value.trim();

    parametros = "idDocumentoMaestro=" + paramIdDocumentoMaestro + "&descripcion=" + paramDescripcionCampos +
        "&imagenCampos=" + paramImagen;
    petCampoDocumento.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    petCampoDocumento.onload = function() {

    }

    petCampoDocumento.onreadystatechange = () => {
        if (petCampoDocumento.readyState == 4 && petCampoDocumento.status == 200) {
            inNombreProyectoCampo.value = "";
            inIdDocumentoMaestro.value = "";
            inDescripcion.value = "";
            inImagenCampo.value = "";
            divGuardarCancelar.style.display = "none";
            let mensaje = JSON.parse(petCampoDocumento.responseText);
            divMensajeCampo.innerHTML = mensaje;
            divMensajeCampo.style.display = "block";
        } else if (petCampoDocumento.status != 200) {
            divMensajeCampo.innerHTML = 'Ha ocurrido un error';
            divMensajeCampo.style.backgroundColor = "red";
            divMensajeCampo.style.display = "block";
        }
    }

    petCampoDocumento.send(parametros);
}

let obtenerDocumentoMaestro = (idProyecto) => {
    var petDocumento = new XMLHttpRequest();
    petDocumento.open('POST', '/listarCampos');

    pdmIdProyecto = "idDocumentoMaestro=" + idProyecto;
    petDocumento.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    petDocumento.onload = () => {}
    petDocumento.onreadystatechange = () => {
        if (petDocumento.readyState == 4 && petDocumento.status == 200) {
            console.log(petDocumento.responseText);
        }
    }
    petDocumento.send(pdmIdProyecto);
}

//FUNCIONES PANEL VISTA
let listarDocPlanoUsuario = () => {
    let petLista = new XMLHttpRequest();
    petLista.open('GET', '/listarDocUsuario');

    petLista.onload = () => {
        let listDocUsuario = JSON.parse(petLista.responseText);
        tblPanelVista.innerHTML = `<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">PROYECTO</th>
                                    <th scope="col">PLANO</th><th scope="col">USUARIO</th><th scope="col">ENTREGA</th>
                                    <th scope="col">ACCIONES</th></tr></thead>`;
        for (let i = 0; listDocUsuario.length; i++) {
            let fila = document.createElement('tr');
            fila.innerHTML += (`<td style="display:none">${listDocUsuario[i].IDDOCUMENTO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].PROVEEDOR}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].PROYECTO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].PLANO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].USUARIO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].FECHAENTREGA}</td>`);
            fila.innerHTML += (`<td><a target="_blank" onclick="obtenerIdDocumentoVista(this)" href="verDocPlano" class="btn btn-info">V</a>&nbsp&nbsp<input type="button" class="btn btn-info" value="D"></td>`);
            tblPanelVista.appendChild(fila);
        }
    }

    petLista.onreadystatechange = () => {
        if (petLista.readyState === 4 && petLista.status === 200) {
            //cargaloader
        }
    }

    petLista.send();
}
let buscarDocPlanoUsuario = (e) => {
    e.preventDefault();
    let petDocumentoUsuario = new XMLHttpRequest();
    petDocumentoUsuario.open('POST', '/buscarDocUsuario');
    let opcion = document.getElementById('selectOpciones').value.trim(),
        valor = document.getElementById('inValor').value.trim();

    let parametros = `valor=${valor}&opcion=${opcion}`;
    petDocumentoUsuario.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    petDocumentoUsuario.onload = () => {
        let listDocUsuario = JSON.parse(petDocumentoUsuario.responseText);
        tblPanelVista.innerHTML = `<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">PROYECTO</th>
                                    <th scope="col">PLANO</th><th scope="col">USUARIO</th><th scope="col">ENTREGA</th>
                                    <th scope="col">ACCIONES</th></tr></thead>`;
        for (let i = 0; listDocUsuario.length; i++) {
            let fila = document.createElement('tr');
            fila.innerHTML += (`<td style="display:none">${listDocUsuario[i].IDDOCUMENTO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].PROVEEDOR}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].PROYECTO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].PLANO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].USUARIO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario[i].FECHAENTREGA}</td>`);
            fila.innerHTML += (`<td><a target="_blank" onclick="obtenerIdDocumentoVista(this)" href="verDocPlano" class="btn btn-info">V</a>&nbsp&nbsp<input type="button" class="btn btn-info" value="D"></td>`);
            tblPanelVista.appendChild(fila);
        }
    }

    petDocumentoUsuario.onreadystatechange = () => {
        if (petDocumentoUsuario.readyState === 4 && petDocumentoUsuario.status === 200) {
            frmVista.inValor.value = "";
            frmVista.selectOpciones.selectedIndex = 0;
        } else if (petDocumentoUsuario.status !== 200) {
            divMensajeVista.innerHTML = "Ha ocurrido un error";
            divMensaje.style.backgroundColor = "red";
            divMensaje.style.display = "none";
        }
    }

    petDocumentoUsuario.send(parametros);
}
let obtenerIdDocumentoVista = (e) => {
    let idDocumentoPlano = e.parentNode.parentElement.cells[0].innerHTML;
    sessionStorage.setItem('idDocPlano', idDocumentoPlano);
}


//FUNCIONES PANEL REGISTRO USUARIOS

let listarUsuario = () => {
    let petUsuario = new XMLHttpRequest();
    petUsuario.open('GET', '/listUsuarios');

    petUsuario.onload = () => {
        let userList = JSON.parse(petUsuario.responseText);
        tblUsuario.innerHTML = `<thead><tr><th scope="col">ID USUARIO</th><th scope="col">NOMBRE</th><th scope="col">PERFIL</th>
                                <th scope="col">ACCIONES</th></tr></thead>`;
        for (let i = 0; userList.length; i++) {
            let fila = document.createElement('tr');
            fila.innerHTML += (`<td style="displa:none">${userList[i].CH_ID_USUARIO}</td>`);
            fila.innerHTML += (`<td>${userList[i].VC_NOMBRE + userList[i].VC_APELLIDOS}</td>`);
            fila.innerHTML += (`<td>${userList[i].perfil.VC_DESCRIPCION}</td>`);
            fila.innerHTML += (`<td><input type="button" value="U"><input type="button" value="D"></td>`);
            tblUsuario.appendChild(fila);
        }
    }

    petUsuario.onreadystatechange = () => {
        if (petUsuario.readyState === 4 && petUsuario.status === 4) {
            //borrar loade
        }
    }
    petUsuario.send();
}