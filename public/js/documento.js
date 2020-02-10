//#region VARIABLES GENERALES 

//#endregion
let parametrosURL = new URLSearchParams(document.location.search.substring(1));
let showDocument = () => {
    let idDocPlano = parametrosURL.get('idDocPlano');
    let init = {
        method: 'post',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
            'Content-type': 'application/x-www-form-urlencoded'
        }
    }
    fetch(`${appurl}/verDocumento/${idDocPlano}`, init).then(res => res.json()).then(data => {
        let sheets = data.sheets,
            camposMaestro = data.camposMaestro,
            camposPlano = data.camposPlano,
            arrayTabs = [];
        let camposTextoMaestro = camposMaestro.filter(item => item.VC_VALOR_CADENA_2 === "" || item.VC_VALOR_CADENA_2 === null);
        let camposImagenMaestro = camposMaestro.filter(item => item.VC_VALOR_CADENA_2 !== "" && item.VC_VALOR_CADENA_2 !== null);
        console.log(sheets)

        /**Creando las pestañas de la pagina */
        sheets.map((sheet, index) => {
                let tab = document.getElementById(`sheet${index}`);
                tab.classList.remove('hidden');
                tab.innerHTML = sheet;
                arrayTabs.push(`tab${index}`);
            })
            /**Separamos los campos de texto e imagenes por sheet */
        let camposTextoPorSheet = sheets.map(sheet => {
            let arrayCamposTexto = camposTextoMaestro.map(campos => {
                if (campos.VC_VALOR_CADENA_3 === sheet) return campos;
            }).filter(elements => elements !== undefined && elements !== null);
            return arrayCamposTexto;
        });

        let camposImagenPorSheet = sheets.map(sheet => {
            let arrayCamposImagenes = camposImagenMaestro.map(campos => {
                if (campos.VC_VALOR_CADENA_3 === sheet) return campos;
            }).filter(elements => elements !== undefined && elements !== null);
            return arrayCamposImagenes;
        });
        console.log(camposImagenPorSheet);

        /**Enviando datos a la vista de la pagina web */
        camposTextoPorSheet.map((tab, index) => {
            tab.map((campo, indice) => {
                label = document.getElementById(`tab${index}Label${indice}`);
                label.innerHTML = campo.VC_VALOR_CADENA_1;
            });
        });

        camposImagenPorSheet.map((tab, index) => {
            let divImagenesTab = document.getElementById(`divImagenesTab${index}`);
            tab.map((campo, indice) => {
                let tabDivImg = `<div id="tab${index}DivImg${indice}" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row">
                <div class="mb-3 sm:w-1/2 sm:mr-1">
                    <figure>
                        <figcaption id="tab${index}Fc${indice}" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3">${campo.VC_VALOR_CADENA_1}</figcaption>
                        <img id="tab${index}Img${indice}" src="${campo.VC_VALOR_CADENA_2}" class="h-auto w-full sm:mt-10">
                    </figure>
                </div>
                <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                    <form id="tab${index}Frm${indice}" enctype="multipart/form-data">
                        @csrf
                        <div class="flex w-full items-center justify-center bg-grey-lighter">
                            <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                </svg>
                                <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                <input type='file' class="hidden" id="tab${index}InputImage${indice}" name="tab${index}InputImage${indice}" onchange="readURL(this)" />
                            </label>
                        </div>
                        <div class="flex justify-between">
                            <input type="submit" value="Cargar" id="tab${index}SubCarga${indice}" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                            <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                        </div>
                        <div class="">
                            <img class="h-auto w-screen" id="tab${index}Img${indice}" src="">
                        </div>
                    </form>
                </div>
            </div>`;
                divImagenesTab.innerHTML = tabDivImg;
            });
        });

    });
}

document.addEventListener('DOMContentLoaded', () => {
    showDocument();
});