//#region Variables Globales
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
//#endregion

//#region VARIABLES PANEL CAMPOS
let divGuardarCancelar = document.getElementById('divGuardarCancelar'),
    inNombreProyectoCampo = document.getElementById('inNombreProyCampo'),
    inIdDocumentoMaestro = document.getElementById('inIdDocumentoMaestro'),
    inDescripcion = document.getElementById('inDescripcionCampo'),
    inImagenCampo = document.getElementById('inImagenCampo');
tblProyectoDocumento = document.getElementById('tblProyectoDocumento');
frmDocumentoMaestroProy = document.getElementById('frmDocumentoMaestro');
//#endregion

//#region VARIABLES PANEL VISTA
let divMensajeVista = document.getElementById('divMensajeVista');
tblPanelVista = document.getElementById('tblVistaDoc'),
    frmVista = document.getElementById('frmVista');

//#region VARIABLES PANEL REGISTRO
let tblUsuario = document.getElementById('tblUsuario');
//#endregion

// PANTALLA PANEL DE CONTROL
function controlFormularios() {
    // divMensaje.style.display = "none";
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

let agregarProveedor = (e) => {
    e.preventDefault();
    let frmData = new FormData(frmProveedor);
    let init = {
        method: 'post',
        mode: 'cors',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        body: frmData
    }
    fetch('/agregarProveedor', init).then(res => res.json()).then(data => {
        frmProveedor.reset();
        let pRegisterMessage = document.getElementById('pRegisterMessage');
        pRegisterMessage.innerHTML = data;
        let alertRegistro = document.getElementById('alertRegistro');
        alertRegistro.className = 'bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3';
        setTimeout(() => {
            alertRegistro.classList = 'hidden';
        }, 9000);
    });
}

function listaProveedor() {
    // e.preventDefault();
    var petlistProveedor = new XMLHttpRequest();
    petlistProveedor.open('GET', '/listarProveedor');
    //Agregar Loader

    petlistProveedor.onload = function() {
        var listProve = JSON.parse(petlistProveedor.responseText);
        tblProyecto.innerHTML = '<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">DESCRIPCION</th><th scope="col">EMAIL</th><th scope="col">ACCIONES</th></tr></thead>';
        for (var i = 0; i < listProve.length; i++) {
            var fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none;">' + listProve[i].IN_ID_PROVEEDOR + '</td>');
            fila.innerHTML += ('<td>' + listProve[i].VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listProve[i].VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td>' + listProve[i].VC_EMAIL + '</td>');
            fila.innerHTML += ('<td><input type="button" class="bg-blue-600 text-white rounded py-1 px-3" value="A" onclick="addInputProy(this)"></td>');

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

let addInputProy = (e) => {
    var idProv = e.parentNode.parentElement.cells[0].innerHTML,
        nombreProv = e.parentNode.parentElement.cells[1].innerHTML;
    frmProyecto.inIdProv.value = idProv;
    frmProyecto.inNombreProv.value = nombreProv;
}

let agregarProyecto = (e) => {
    e.preventDefault();
    let frmData = new FormData(frmProyecto);
    let init = {
        method: 'post',
        body: frmData,
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        }
    };
    fetch('/agregarProyecto', init).then(res => res.json()).then(data => {
        frmProyecto.reset();
        let pRegisterMessage = document.getElementById('pRegisterMessage');
        pRegisterMessage.innerHTML = data;
        let alertRegistro = document.getElementById('alertRegistro');
        alertRegistro.className = 'bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3';
        setTimeout(() => {
            alertRegistro.classList = 'hidden';
        }, 9000);
    });
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
        for (let i = 0; i < listProyecto.length; i++) {
            let fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none;">' + listProyecto[i].IN_ID_PROYECTO + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].proveedor.VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listProyecto[i].VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td><input type="button" class="bg-blue-600 text-white rounded py-1 px-3" value="A" onclick="addInputPlano(this)"></td>');
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
    var idProy = e.parentNode.parentElement.cells[0].innerHTML;
    nombreProy = e.parentNode.parentElement.cells[3].innerHTML;
    frmPlano.inIdProy.value = idProy;
    frmPlano.inNombreProy.value = nombreProy;
}

function agregarPlano(e) {
    e.preventDefault();
    let frmData = new FormData(frmPlano);
    let init = {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        body: frmData
    }
    fetch('/agregarPlano', init).then(res => res.json()).then(data => {
        frmPlano.reset();
        let pRegisterMessage = document.getElementById('pRegisterMessage');
        pRegisterMessage.innerHTML = data;
        let alertRegistro = document.getElementById('alertRegistro');
        alertRegistro.className = 'bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3';
        setTimeout(() => {
            alertRegistro.classList = 'hidden';
        }, 9000);
    });
}

function listarPlano() {
    var petlistPlano = new XMLHttpRequest();
    petlistPlano.open('GET', '/listaPlanos');

    petlistPlano.onload = function() {
        var listPlano = JSON.parse(petlistPlano.responseText);
        tblUsuarioPlano.innerHTML = '<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">PROYECTO</th><th scope="col">PLANO</th><th scope="col">ACCIONES</th></tr></thead>';
        for (var i = 0; i < listPlano.length; i++) {
            var fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none">' + listPlano[i].IN_ID_PLANO + '</td>');
            fila.innerHTML += ('<td>' + listPlano[i].proyecto.proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listPlano[i].proyecto.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + listPlano[i].VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td><input type="button" value="A" class="bg-blue-600 text-white rounded py-1 px-3" onclick="addInputUsuarioPlano(this)"></td>');

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




let listarUsuariosCombo = () => {
    let init = {
        method: 'get',
        mode: 'cors'
    }
    fetch('/listUsuarios', init).then(res => res.json()).then(data => {
        let selectUser = document.getElementById('userSelect');
        for (var i = 0; i < data.length; i++) {
            var option = document.createElement('option');
            option.text = data[i].VC_NOMBRE + ' ' + data[i].VC_APELLIDOS;
            option.value = data[i].CH_ID_USUARIO;
            selectUser.appendChild(option);
        }
    })
}

let addInputUsuarioPlano = (e) => {
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
    let frmData = new FormData(frmUsuarioPlanoDetail);
    let init = {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        mode: 'cors',
        body: frmData
    };
    fetch('/agregarDocumentPlanoUsuario', init).then(res => {
        let alertRegistro = document.getElementById('alertRegistro');
        let pRegisterMessage = document.getElementById('pRegisterMessage');
        if (!res.ok) {
            res.json().then(data => {
                pRegisterMessage.innerHTML = data;
                alertRegistro.className = 'bg-red-200 border-t border-b border-red-500 text-red-700 px-4 py-3 mb-3';
                setTimeout(() => {
                    alertRegistro.classList = 'hidden';
                }, 9000);
            })
        } else {
            res.json().then(data => {
                pRegisterMessage.innerHTML = data;
                alertRegistro.className = 'bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3';
                setTimeout(() => {
                    alertRegistro.classList = 'hidden';
                }, 9000);
            })
        }
    });
}

//FUNCIONES PANEL  CAMPOS 
let docuMaestroCampos = () => {
    let init = {
        method: 'get',
        mode: 'cors'
    }
    fetch('/listarDocumentoMaestro', init).then(res => res.json()).then(data => {
        tblProyectoDocumento.innerHTML = '<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">DESCRIPCION</th><th scope="col">PROYECTO</th><th scope="col">DESCRIPCION</th><th scope="col">ACCIONES</th></tr></thead>';
        for (var i = 0; i < data.length; i++) {
            var fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none;">' + data[i].IN_ID_DOC_MAESTRO + '</td>');
            fila.innerHTML += ('<td>' + data[i].proyecto.proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + data[i].proyecto.proveedor.VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td>' + data[i].proyecto.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + data[i].proyecto.VC_DESCRIPCION + '</td>');
            fila.innerHTML += (`<td><input type="button" onclick= "AddCampo(this)" class="text-white bg-blue-500 rounded py-1 px-3 mb-1 " value="AC">&nbsp&nbsp<input type="button" onclick="" class="text-white bg-blue-500 rounded py-1 px-3 mt-1" value="VER"></td>`);
            tblProyectoDocumento.appendChild(fila);
        }
    });
}

let AddCampo = (e) => {
    inIdDocumentoMaestro.value = e.parentNode.parentElement.cells[0].innerHTML;
    inNombreProyectoCampo.value = e.parentNode.parentElement.cells[3].innerHTML;
    divGuardarCancelar.style.display = "block";
}


function cancelAddCampo() {
    frmDocumentoMaestro.reset();
    divGuardarCancelar.style.display = "none";
}

let AgregarCamposDocumento = (e) => {
    e.preventDefault();
    let frmData = new FormData(frmDocumentoMaestro);
    let init = {
        method: 'post',
        mode: 'cors',
        body: frmData
    }
    fetch('/agregarCampoDocumento', init).then(res => res.json()).then(data => {
        divGuardarCancelar.style.display = "none";
        frmDocumentoMaestro.reset();
        let alertCampo = document.getElementById('alertCampo');
        let pCampoMessage = document.getElementById('pCampoMessage');
        pCampoMessage.innerHTML = data;
        alertCampo.className = 'bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3';
        setTimeout(() => {
            alertCampo.classList = 'hidden';
        }, 9000);
    });
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
        if (listDocUsuario.idPerfil === 1) {
            for (let i = 0; i < listDocUsuario.listaVista.length; i++) {
                let fila = document.createElement('tr');
                fila.innerHTML += (`<td style="display:none">${listDocUsuario.listaVista[i].IDDOCUMENTO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].PROVEEDOR}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].PROYECTO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].PLANO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].USUARIO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].FECHAENTREGA}</td>`);
                fila.innerHTML += (`<td><a target="_blank"  
                                    href="verDocPlano?idDocPlano=${listDocUsuario.listaVista[i].IDDOCUMENTO}"
                                     class="bg-blue-600 text-white rounded py-1 px-3 mb-2">Ver</a>&nbsp&nbsp
                                    <input type="button" onclick="descargarDocumentoVista(this)" 
                                    class="bg-blue-600 text-white rounded py-1 px-3 mt-2" value="Descargar"></td>`);
                tblPanelVista.appendChild(fila);
            }
        } else {
            for (let i = 0; i < listDocUsuario.listaVista.length; i++) {
                let fila = document.createElement('tr');
                fila.innerHTML += (`<td style="display:none">${listDocUsuario.listaVista[i].IDDOCUMENTO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].PROVEEDOR}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].PROYECTO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].PLANO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].USUARIO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.listaVista[i].FECHAENTREGA}</td>`);
                fila.innerHTML += (`<td><a target="_blank"  
                                    href="verDocPlano?idDocPlano=${listDocUsuario.listaVista[i].IDDOCUMENTO}"
                                     class="bg-blue-600 text-white rounded py-1 px-3 mb-2">Ver</a></td>`);
                tblPanelVista.appendChild(fila);
            }
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
            fila.innerHTML += (`<td><a target="_blank"  
                                href="verDocPlano?idDocPlano=${listDocUsuario[i].IDDOCUMENTO}"
                                class="bg-blue-600 text-white rounded py-1 px-3 mb-2">Ver</a>&nbsp&nbsp
                                <input type="button" onclick="descargarDocumentoVista(this)" 
                                class="bg-blue-600 text-white rounded py-1 px-3 mt-2" value="Descargar"></td>`);
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

let descargarDocumentoVista = (e) => {
    let idDocumentoPlano = e.parentNode.parentElement.cells[0].innerHTML;
    //No necesito usar un formulario, solo enviar archivos JSON
    //let data = { idDocPlano: idDocumentoPlano };
    let init = {
        method: "POST",
        // body: JSON.stringify(data), //frmIdDocPlano, 
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 'application/json'
        }
    }

    fetch(`/downloadExcel/${idDocumentoPlano}`, init).then(response => response.blob())
        .then((myblob) => {
            let objectUrl = URL.createObjectURL(myblob);
            let link = document.createElement('a');
            link.href = objectUrl;
            link.setAttribute('download', `PlanoNumero${idDocumentoPlano}.xlsx`);
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        });

}

//FUNCIONES PANEL REGISTRO USUARIOS

let listarUsuario = () => {
    let init = {
        method: 'get',
        mode: 'cors'
    }
    fetch('/listUsuarios', init).then(res => res.json()).then(data => {
        tblUsuario.innerHTML = `<thead><tr><th scope="col">ID USUARIO</th><th scope="col">NOMBRE</th><th scope="col">PERFIL</th>
        <th scope="col">ACCIONES</th></tr></thead>`;
        for (let i = 0; i < data.length; i++) {
            let fila = document.createElement('tr');
            fila.innerHTML += (`<td style="displa:none">${data[i].CH_ID_USUARIO}</td>`);
            fila.innerHTML += (`<td>${data[i].VC_NOMBRE + data[i].VC_APELLIDOS}</td>`);
            fila.innerHTML += (`<td>${data[i].perfil.VC_DESCRIPCION}</td>`);
            fila.innerHTML += (`<td><input type="button"  class="bg-blue-600 text-white rounded py-1 px-3 mb-2 md:mx-3" value="U">
                                <input type="button"  class="bg-blue-600 text-white rounded py-1 px-3 mt-2 md:mx-3" value="D"></td>`);
            tblUsuario.appendChild(fila);
        }
    });
}

let agregarUsuario = (e) => {
    e.preventDefault();
    let frmData = new FormData(frmUsuario);
    let init = {
        method: 'post',
        mode: 'cors',
        body: frmData
    };
    fetch('/agregarUsuario', init).then(res => {
        let alertUser = document.getElementById('alertUser');
        let pUserMessage = document.getElementById('pUserMessage');
        if (!res.ok) {
            res.json().then(data => {
                pUserMessage.innerHTML = data;
                alertUser.className = 'bg-red-200 border-t border-b border-red-500 text-red-700 px-4 py-3 mb-3';
                setTimeout(() => {
                    alertUser.classList = 'hidden';
                }, 9000);
            });
        } else {
            res.json().then(data => {
                pUserMessage.innerHTML = data;
                alertUser.className = 'bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3';
                setTimeout(() => {
                    alertUser.classList = 'hidden'
                }, 9000);
            });
        }
    }).then(data => {
        console.log(data);
        listarUsuario();
        frmUsuario.reset();
    });
}

//#region Eventos
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
document.addEventListener('DOMContentLoaded', (event) => {
        docuMaestroCampos();
        listarDocPlanoUsuario();
        listarUsuario();
    })
    //#endregion