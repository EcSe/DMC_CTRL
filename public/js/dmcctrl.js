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
frmPlano = document.getElementById('frmPlano');
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
    fetch(`${appurl}/agregarProveedor`, init).then(res => res.json()).then(data => {
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
    let init = {
        method: 'GET'
    }
    fetch(`${appurl}/listarProveedor`, init).then(res => res.json()).then(data => {
        tblProyecto.innerHTML = `<thead><tr><th scope="col">PROVEEDOR</th>
                                <th scope="col">DESCRIPCION</th><th scope="col">EMAIL</th>
                                <th scope="col">ACCIONES</th></tr></thead>`;
        data.map(proveedor => {
            var fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none;">' + proveedor.IN_ID_PROVEEDOR + '</td>');
            fila.innerHTML += ('<td>' + proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + proveedor.VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td>' + proveedor.VC_EMAIL + '</td>');
            fila.innerHTML += ('<td><input type="button" class="bg-blue-600 text-white rounded py-1 px-3" value="A" onclick="addInputProy(this)"></td>');

            tblProyecto.appendChild(fila);
        })
    });
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
    fetch(`${appurl}/agregarProyecto`, init).then(res => {
        let pRegisterMessage = document.getElementById('pRegisterMessage');
        let alertRegistro = document.getElementById('alertRegistro');

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
                frmProyecto.reset();
                pRegisterMessage.innerHTML = data;
                alertRegistro.className = 'bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3';
                setTimeout(() => {
                    alertRegistro.classList = 'hidden';
                }, 9000);
            })
        }
    })
}

function listaProyecto() {
    fetch(`${appurl}/listaProyectos`, { method: 'get' }).then(res => res.json()).then(data => {
        tblPlano.innerHTML = `<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">DESCRIPCION</th>
                            <th scope="col">PROYECTO</th><th scope="col">DESCRIPCION</th>
                            <th scope="col">ACCIONES</th></tr></thead>`;
        data.map(proyecto => {
            let fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none;">' + proyecto.IN_ID_PROYECTO + '</td>');
            fila.innerHTML += ('<td>' + proyecto.proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + proyecto.proveedor.VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td>' + proyecto.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + proyecto.VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td><input type="button" class="bg-blue-600 text-white rounded py-1 px-3" value="A" onclick="addInputPlano(this)"></td>');
            tblPlano.appendChild(fila);
        });
    });
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

    fetch(`${appurl}/agregarPlano`, init).then(res => {
        let pRegisterMessage = document.getElementById('pRegisterMessage');
        let alertRegistro = document.getElementById('alertRegistro');

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
                frmPlano.reset();
                pRegisterMessage.innerHTML = data;
                alertRegistro.className = 'bg-green-200 border-t border-b border-green-500 text-green-700 px-4 py-3 mb-3';
                setTimeout(() => {
                    alertRegistro.classList = 'hidden';
                }, 9000);

            });
        }
    });
}

function listarPlano() {
    fetch(`${appurl}/listaPlanos`, { method: 'get' }).then(res => res.json()).then(data => {
        tblUsuarioPlano.innerHTML = `<thead><tr><th scope="col">PROVEEDOR</th>
                                    <th scope="col">PROYECTO</th><th scope="col">PLANO</th>
                                    <th scope="col">ACCIONES</th></tr></thead>`;
        data.map(plano => {
            var fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none">' + plano.IN_ID_PLANO + '</td>');
            fila.innerHTML += ('<td>' + plano.proyecto.proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + plano.proyecto.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + plano.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td><input type="button" value="A" class="bg-blue-600 text-white rounded py-1 px-3" onclick="addInputUsuarioPlano(this)"></td>');

            tblUsuarioPlano.appendChild(fila);
        });

    });
}




let listarUsuariosCombo = () => {
    let init = {
        method: 'get',
        mode: 'cors'
    }
    fetch(`${appurl}/listUsuarios`, init).then(res => res.json()).then(data => {
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
    fetch(`${appurl}/agregarDocumentPlanoUsuario`, init).then(res => {
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
                frmUsuarioPlanoDetail.reset();
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
    fetch(`${appurl}/listarDocumentoMaestro`, init).then(res => res.json()).then(data => {
        tblProyectoDocumento.innerHTML = `<thead><tr><th scope="col">PROVEEDOR</th>
                                        <th scope="col">DESCRIPCION</th><th scope="col">PROYECTO</th>
                                        <th scope="col">DESCRIPCION</th><th scope="col">ACCIONES</th></tr>
                                        </thead>`;
        data.map(data => {
            var fila = document.createElement('tr');
            fila.innerHTML += ('<td style="display:none;">' + data.IN_ID_DOC_MAESTRO + '</td>');
            fila.innerHTML += ('<td>' + data.proyecto.proveedor.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + data.proyecto.proveedor.VC_DESCRIPCION + '</td>');
            fila.innerHTML += ('<td>' + data.proyecto.VC_NOMBRE + '</td>');
            fila.innerHTML += ('<td>' + data.proyecto.VC_DESCRIPCION + '</td>');
            fila.innerHTML += (`<td><input type="button" onclick= "AddCampo(this)" class="text-white bg-blue-500 rounded py-1 px-3 mb-1 " value="AC">&nbsp&nbsp<input type="button" onclick="" class="text-white bg-blue-500 rounded py-1 px-3 mt-1" value="VER"></td>`);
            tblProyectoDocumento.appendChild(fila);
        })
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

let isUriImage = (uri) => {
    if (uri === '') {
        return true;
    }
    //make sure we remove any nasty GET params 
    uri = uri.split('?')[0];
    //moving on now
    let parts = uri.split('.');
    let extension = parts[parts.length - 1];
    let imageTypes = ['jpg', 'jpeg', 'tiff', 'png', 'gif', 'bmp']
    if (imageTypes.indexOf(extension) !== -1) {
        return true;
    }
}

let messagePanelCampo = (data, colorAviso) => {
    let alertCampo = document.getElementById('alertCampo');
    let pCampoMessage = document.getElementById('pCampoMessage');
    pCampoMessage.innerHTML = data;
    alertCampo.className = `bg-${colorAviso}-200 border-t border-b border-${colorAviso}-500 text-${colorAviso}-700 px-4 py-3 mb-3`;
    setTimeout(() => {
        alertCampo.classList = 'hidden';
    }, 9000);
}

let AgregarCamposDocumento = (e) => {
    e.preventDefault();
    if (!isUriImage(frmDocumentoMaestro.inImagenCampo.value)) {
        messagePanelCampo('El link no pertenece a una imagen', 'red');
        return;
    } else {
        let frmData = new FormData(frmDocumentoMaestro);
        let init = {
            method: 'post',
            mode: 'cors',
            body: frmData
        }

        fetch(`${appurl}/agregarCampoDocumento`, init).then(res => {
            if (!res.ok) {
                res.json().then(data => {
                    messagePanelCampo(data, 'red');
                });
            } else {
                res.json().then(data => {
                    divGuardarCancelar.style.display = "none";
                    frmDocumentoMaestro.reset();
                    messagePanelCampo(data, 'green')
                });
            }
        });
    }

}

// let obtenerDocumentoMaestro = (idProyecto) => {
//     var petDocumento = new XMLHttpRequest();
//     petDocumento.open('POST', `${appurl}/listarCampos`);

//     pdmIdProyecto = "idDocumentoMaestro=" + idProyecto;
//     petDocumento.setRequestHeader("Content-type", "application/json");

//     petDocumento.onload = () => {}
//     petDocumento.onreadystatechange = () => {
//         if (petDocumento.readyState == 4 && petDocumento.status == 200) {
//             console.log(petDocumento.responseText);
//         }
//     }
//     petDocumento.send(pdmIdProyecto);
// }

//FUNCIONES PANEL VISTA
let listarDocPlanoUsuario = () => {
    fetch(`${appurl}/listarDocUsuario`, { method: 'get' }).then(res => res.json()).then(data => {
        tblPanelVista.innerHTML = `<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">PROYECTO</th>
        <th scope="col">PLANO</th><th scope="col">USUARIO</th><th scope="col">ENTREGA</th>
        <th scope="col">ACCIONES</th></tr></thead>`;

        if (data.idPerfil === 1) {
            (data.listaVista).map(listDocUsuario => {
                let fila = document.createElement('tr');
                fila.innerHTML += (`<td style="display:none">${listDocUsuario.IDDOCUMENTO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.PROVEEDOR}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.PROYECTO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.PLANO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.USUARIO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.FECHAENTREGA}</td>`);
                fila.innerHTML += (`<td><a target="_blank"  
                                    href="verDocPlano?idDocPlano=${listDocUsuario.IDDOCUMENTO}"
                                     class="bg-blue-600 text-white rounded py-1 px-3 mb-2">Ver</a>&nbsp&nbsp
                                    <input type="button" onclick="descargarDocumentoVista(this)" 
                                    class="bg-blue-600 text-white rounded py-1 px-3 mt-2" value="Descargar"></td>`);
                tblPanelVista.appendChild(fila);
            });
        } else {
            (data.listaVista).map(listDocUsuario => {
                let fila = document.createElement('tr');
                fila.innerHTML += (`<td style="display:none">${listDocUsuario.IDDOCUMENTO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.PROVEEDOR}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.PROYECTO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.PLANO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.USUARIO}</td>`);
                fila.innerHTML += (`<td>${listDocUsuario.FECHAENTREGA}</td>`);
                fila.innerHTML += (`<td><a target="_blank"  
                                    href="verDocPlano?idDocPlano=${listDocUsuario.IDDOCUMENTO}"
                                     class="bg-blue-600 text-white rounded py-1 px-3 mb-2">Ver</a></td>`);
                tblPanelVista.appendChild(fila);
            })
        }
    });
}

let buscarDocPlanoUsuario = (e) => {
    e.preventDefault();
    let opcion = document.getElementById('selectOpciones').value.trim(),
        valor = document.getElementById('inValor').value.trim();
    let data = { valor, opcion };
    let init = {
        method: 'post',
        body: JSON.stringify(data),
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 'application/json'
        }
    }
    fetch(`${appurl}/buscarDocUsuario`, init).then(res => res.json()).then(data => {
        tblPanelVista.innerHTML = `<thead><tr><th scope="col">PROVEEDOR</th><th scope="col">PROYECTO</th>
                                    <th scope="col">PLANO</th><th scope="col">USUARIO</th><th scope="col">ENTREGA</th>
                                    <th scope="col">ACCIONES</th></tr></thead>`;
        data.map(listDocUsuario => {
            let fila = document.createElement('tr');
            fila.innerHTML += (`<td style="display:none">${listDocUsuario.IDDOCUMENTO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario.PROVEEDOR}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario.PROYECTO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario.PLANO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario.USUARIO}</td>`);
            fila.innerHTML += (`<td>${listDocUsuario.FECHAENTREGA}</td>`);
            fila.innerHTML += (`<td><a target="_blank"  
                                href="verDocPlano?idDocPlano=${listDocUsuario.IDDOCUMENTO}"
                                class="bg-blue-600 text-white rounded py-1 px-3 mb-2">Ver</a>&nbsp&nbsp
                                <input type="button" onclick="descargarDocumentoVista(this)" 
                                class="bg-blue-600 text-white rounded py-1 px-3 mt-2" value="Descargar"></td>`);
            tblPanelVista.appendChild(fila);
        })
    });
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

    fetch(`${appurl}/downloadExcel/${idDocumentoPlano}`, init).then(response => response.blob())
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
    fetch(`${appurl}/listUsuarios`, init).then(res => res.json()).then(data => {
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

let messagePanelRegistro = (data, colorAviso) => {
    let alertUser = document.getElementById('alertUser');
    let pUserMessage = document.getElementById('pUserMessage');
    pUserMessage.innerHTML = data;
    alertUser.className = `bg-${colorAviso}-200 border-t border-b border-${colorAviso}-500 text-${colorAviso}-700 px-4 py-3 mb-3`;
    setTimeout(() => {
        alertUser.classList = 'hidden';
    }, 9000);
}

let agregarUsuario = (e) => {
    e.preventDefault();
    let frmData = new FormData(frmUsuario);
    let init = {
        method: 'post',
        mode: 'cors',
        body: frmData
    };
    fetch(`${appurl}/agregarUsuario`, init).then(res => {
        if (!res.ok) {
            res.json().then(data => {
                messagePanelRegistro(data, 'red');
            });
        } else {
            res.json().then(data => {
                messagePanelRegistro(data, 'green')
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