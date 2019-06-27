//Variables Globales
let frmCamposTexto = document.getElementById('frmCamposTexto');

//Eventos
document.addEventListener('DOMContentLoaded', () => {
    verDocumento();
});
frmCamposTexto.addEventListener('submit', (e) => {
    guardarDocumento(e);
});

let verDocumento = () => {
    let pet = new XMLHttpRequest();
    const idDocPlano = sessionStorage.getItem('idDocPlano');
    pet.open('POST', '/verDocumento');
    let param = `id=${idDocPlano}`;
    pet.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    pet.onload = () => {
        let campos = JSON.parse(pet.responseText);
        let cMaestro = campos.camposMaestro;
        let ceTexto = cMaestro.filter((item) => item.VC_VALOR_CADENA_2 === "");
        for (let i = 0; i < ceTexto.length; i++) {
            document.getElementById(`lblc${i+1}`).innerHTML = ceTexto[i].VC_VALOR_CADENA_1;
            document.getElementById(`r${i+1}`).style.display = "block";
        }
        let ceImagen = cMaestro.filter((item) => item.VC_VALOR_CADENA_2 !== "");
        for (let j = 0; j < ceImagen.length; j++) {
            document.getElementById(`fc${j+1}`).innerHTML = `Foto Ejemplo: ${ceImagen[j].VC_VALOR_CADENA_1}`;
            document.getElementById(`imgEjemplo${j+1}`).src = ceImagen[j].VC_VALOR_CADENA_2;
            document.getElementById(`div${j+1}`).style.display = "block";
        }
        let cPlano = campos.camposPlano;
        for (let k = 0; k < cPlano.length; k++) {
            document.getElementById(`${cPlano[k].VC_VALOR_CADENA_2}`).value = cPlano[k].VC_VALOR_CADENA_1;
        }
    }
    pet.onreadystatechange = () => {
        if (pet.readyState == 4 && pet.status == 200) {

        }
    }
    pet.send(param);
    //localStorage.removeItem('idDocPlano');
}

let guardarDocumento = (e) => {
    e.preventDefault();
    let idDocPlano = sessionStorage.getItem('idDocPlano');
    let peticion = new XMLHttpRequest();
    let frmData = new FormData(frmCamposTexto);
    frmData.append('idDocPlano', idDocPlano);
    peticion.open('POST', '/agregarImagenes');
    peticion.onload = () => {}
    peticion.onreadystatechange = () => {
        if (peticion.readyState === 4 && peticion.status === 200) {

        }
    }
    peticion.send(frmData);
}

let readURL = (input) => {
    if (input.files && input.files[0]) {
        let reader = new FileReader();
        reader.onload = (e) => {
            document.getElementById('img1').src = e.target.result;
        }
        reader.readAsDataURL(input.files[0]);
    }
}

$("#inputImage1").change(function() {
    readURL(this);
});

let obtenerIdForm = (e) => {
    let idForm = e.parentNode.id;
    console.log(idForm);
    return idForm;
}
frmImagen = document.getElementById(obtenerIdForm());
let guardarImagen = (e) => {
    e.preventDefault();
    let idDocPlano = sessionStorage.getItem('idDocPlano');
    let frmData = new FormData(frmImagen);
    frmData.append('idDocPlano', idDocPlano);
    let peticion = new XMLHttpRequest();
    peticion.open('POST', '/agregarImagenes');

    peticion.onload = () => {}
    peticion.onreadystatechange = () => {
        if (peticion.readyState == 4 && peticion.status == 200) {

        }
    }
    peticion.send(frmData);
}

frmImagen.addEventListener('submit', (e) => {
    guardarImagen(e);
});