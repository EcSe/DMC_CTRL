//Variables Globales
let frmCamposTexto = document.getElementById('frmCamposTexto');
//#region Forms Para subir Imagenes 
frmImagen1 = document.getElementById('frm1');
frmImagen2 = document.getElementById('frm2');
frmImagen3 = document.getElementById('frm3');
frmImagen4 = document.getElementById('frm4');
frmImagen5 = document.getElementById('frm5');
frmImagen6 = document.getElementById('frm6');
frmImagen7 = document.getElementById('frm7');
frmImagen8 = document.getElementById('frm8');
frmImagen9 = document.getElementById('frm9');
frmImagen10 = document.getElementById('frm10');
frmImagen11 = document.getElementById('frm11');
frmImagen12 = document.getElementById('frm12');
frmImagen13 = document.getElementById('frm13');
frmImagen14 = document.getElementById('frm14');
frmImagen15 = document.getElementById('frm15');
frmImagen16 = document.getElementById('frm16');
frmImagen17 = document.getElementById('frm17');
frmImagen18 = document.getElementById('frm18');
frmImagen19 = document.getElementById('frm19');
frmImagen20 = document.getElementById('frm20');
frmImagen21 = document.getElementById('frm21');
frmImagen22 = document.getElementById('frm22');
frmImagen23 = document.getElementById('frm23');
frmImagen24 = document.getElementById('frm24');
frmImagen25 = document.getElementById('frm25');
frmImagen26 = document.getElementById('frm26');
frmImagen27 = document.getElementById('frm27');
frmImagen28 = document.getElementById('frm28');
frmImagen29 = document.getElementById('frm29');
frmImagen30 = document.getElementById('frm30');
//#endregion

//#region Eventos de Formularios Imagenes
frmImagen1.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen1);
});
frmImagen2.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen2);
});
frmImagen3.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen3);
});
frmImagen4.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen4);
});
frmImagen5.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen5);
});
frmImagen6.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen6);
});
frmImagen7.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen7);
});
frmImagen8.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen8);
});
frmImagen9.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen9);
});
frmImagen10.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen10);
});
frmImagen11.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen11);
});
frmImagen12.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen12);
});
frmImagen13.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen13);
});
frmImagen14.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen14);
});
frmImagen15.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen15);
});
frmImagen16.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen16);
});
frmImagen17.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen17);
});
frmImagen18.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen18);
});
frmImagen19.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen19);
});
frmImagen20.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen20);
});
frmImagen21.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen21);
});
frmImagen22.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen22);
});
frmImagen23.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen23);
});
frmImagen24.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen24);
});
frmImagen25.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen25);
});
frmImagen26.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen26);
});
frmImagen27.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen27);
});
frmImagen28.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen28);
});
frmImagen29.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen29);
});
frmImagen30.addEventListener('submit', (e) => {
    guardarImagen(e, frmImagen30);
});
//#endregion

//#region nombrex extraidos del url
let parametrosURL = new URLSearchParams(document.location.search.substring(1));
//#endregion

//Eventos
document.addEventListener('DOMContentLoaded', () => {
    verDocumento();
});
frmCamposTexto.addEventListener('submit', (e) => {
    guardarDocumento(e);
});

let verDocumento = () => {
    let idDocPlano = parametrosURL.get('idDocPlano');
    let init = {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-type': 'application/x-www-form-urlencoded'
        }
    }
    fetch(`/verDocumento/${idDocPlano}`, init).then(res => res.json()).then(data => {
        let cMaestro = data.camposMaestro;
        let ceTexto = cMaestro.filter((item) => item.VC_VALOR_CADENA_2 === "" || item.VC_VALOR_CADENA_2 === null);
        for (let i = 0; i < ceTexto.length; i++) {
            document.getElementById(`lblc${i+1}`).innerHTML = ceTexto[i].VC_VALOR_CADENA_1;
            document.getElementById(`r${i+1}`).style.display = "block";
        }
        let ceImagen = cMaestro.filter((item) => item.VC_VALOR_CADENA_2 !== "" && item.VC_VALOR_CADENA_2 !== null);
        for (let j = 0; j < ceImagen.length; j++) {
            document.getElementById(`fc${j+1}`).innerHTML = `Foto Ejemplo: ${ceImagen[j].VC_VALOR_CADENA_1}`;
            document.getElementById(`imgEjemplo${j+1}`).src = ceImagen[j].VC_VALOR_CADENA_2;
            document.getElementById(`div${j+1}`).style.display = "";
        }
        let cPlano = data.camposPlano;
        for (let k = 0; k < cPlano.length; k++) {
            if (cPlano[k].VC_VALOR_CADENA_3 == 'IMG') {
                document.getElementById(`${cPlano[k].VC_VALOR_CADENA_2}`).src = `/Storage/Imagenes/${cPlano[k].VC_VALOR_CADENA_1}`;
            } else {
                document.getElementById(`${cPlano[k].VC_VALOR_CADENA_2}`).value = cPlano[k].VC_VALOR_CADENA_1;
            }
        }
        //Agregando datos a los documentos
        let nombres = data.nombresProvProyPl;
        document.getElementById('spProveedor').innerHTML = nombres[0].NOM_PROVEEDOR;
        document.getElementById('spProyecto').innerHTML = nombres[0].NOM_PROYECTO;
        document.getElementById('spPlano').innerHTML = nombres[0].NOM_PLANO;
        document.getElementById('spiProveedor').innerHTML = nombres[0].NOM_PROVEEDOR;
        document.getElementById('spiProyecto').innerHTML = nombres[0].NOM_PROYECTO;
        document.getElementById('spiPlano').innerHTML = nombres[0].NOM_PLANO;
    });
}

let guardarDocumento = (e) => {
    e.preventDefault();
    let frmData = new FormData(frmCamposTexto);
    let idDocPlano = parametrosURL.get('idDocPlano');
    let init = {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
        },
        mode: 'cors',
        body: frmData
    }
    fetch(`/agregarCamposPlano/${idDocPlano}`, init).then(res => res.json()).then(data => {

    });
}

let readURL = (input) => {
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = (e) => {
            let idImg = input.parentNode.parentNode.parentNode.childNodes[7].firstElementChild.id
            document.getElementById(idImg).src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}

//Inicio de captura de form Imagenes
let guardarImagen = (v, f) => {
    v.preventDefault();
    let idDocPlano = parametrosURL.get('idDocPlano');
    console.log(f);
    let frmData = new FormData(f);

    let init = {
            method: 'post',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            },
            mode: 'cors',
            body: frmData
        }
        // fetch(`/agregarImagenes/${idDocPlano}`, init).then(res => res.json()).then(data => {
        //     f.reset();
        //     verDocumento();
        //     alert(data);
        // });
    fetch(`/agregarImagenes/${idDocPlano}`, init).then(res => {
        if (!res.ok) {
            res.json().then(data => {
                alert(data);
            })
        } else {
            res.json().then(data => {
                f.reset();
                verDocumento();
                alert(data);
            });
        }
    })
}

let borrarImagen = (e) => {
    let idImg = e.parentNode.parentNode.childNodes[7].firstElementChild.id
    let rutaImagen = e.parentNode.parentNode.childNodes[7].firstElementChild.src;
    let array = rutaImagen.split('/');
    let nameFile = array[array.length - 1];
    let datos = { nameImg: nameFile };
    let init = {
        method: "POST",
        body: JSON.stringify(datos), //frmIdDocPlano, 
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-Type': 'application/json'
        }
    }
    if (rutaImagen.slice(0, 10) === 'data:image' || rutaImagen === window.location.href) {
        document.getElementById(idImg).src = "";
    } else {
        let question = confirm('Esta seguro de eliminar esta imagen?');
        if (question) {
            fetch('/borrarImagen', init).then(res => res.json()).then(data => {
                document.getElementById(idImg).src = "";
                alert(data);
            });
        }
    }
};