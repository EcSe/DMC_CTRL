<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <title>Documento</title>
</head>

<body>
    <div id="navbar-eample">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active hidden" id="sheet0" data-toggle="tab" href="#tab0" role="tab"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link hidden" id="sheet1" data-toggle="tab" href="#tab1"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link hidden" id="sheet2" data-toggle="tab" href="#tab2"></a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tab0" name="tab0" role="tabpanel">
                <div class='container mx-auto'>
                    <div id='divTextoTab0' name='divTextoTab0' class='w-full  overflow-hidden rounded border bg-white shadow row'>
                        <div class="row w-full">
                            <div id='tab0DivText0' class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label id="tab0Label0" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" htmlFor="tab0Input0">
                                </label>
                                <input id="tab0Input0"  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Ingrese sus nombres" />
                                <p class="text-red text-xs italic">Por favor, rellene este campo</p>
                            </div>
                            <div id='tab0DivText1' class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label id="tab0Label1" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" htmlFor="tab0Input1">
                                </label>
                                <input id="tab0Input1" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Ingrese sus nombres" />
                                <p class="text-red text-xs italic">Por favor, rellene este campo</p>
                            </div>
                        </div>
                        <div class="row w-full">
                            <div id='tab0DivText2' class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label id="tab0Label2" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" htmlFor="tab0Input0">
                                </label>
                                <input id="tab0Input2"  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Ingrese sus nombres" />
                                <p class="text-red text-xs italic">Por favor, rellene este campo</p>
                            </div>
                            <div id='tab0DivText3' class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label id="tab0Label3" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" htmlFor="tab0Input1">
                                </label>
                                <input id="tab0Input3" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Ingrese sus nombres" />
                                <p class="text-red text-xs italic">Por favor, rellene este campo</p>
                            </div>
                        </div>
                    </div>
                    <div id='divImagenesTab0' name='divImagenesTab0' class='row'>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab1" name="tab1" role="tabpanelº">
            <div class='container mx-auto'>
                    <div id='divTextoTab1' name='divTextoTab1' class='w-full  overflow-hidden rounded border bg-white shadow row'>
                        <div class="row w-full">
                            <div id='tab1DivText0' class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label id="tab1Label0" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" htmlFor="tab0Input0">
                                </label>
                                <input id="tab1Input0"  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Ingrese sus nombres" />
                                <p class="text-red text-xs italic">Por favor, rellene este campo</p>
                            </div>
                            <div id='tab1DivText1' class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label id="tab0Label1" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" htmlFor="tab0Input1">
                                </label>
                                <input id="tab1Input1" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Ingrese sus nombres" />
                                <p class="text-red text-xs italic">Por favor, rellene este campo</p>
                            </div>
                        </div>
                        <div class="row w-full">
                            <div id='tab1DivText2' class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label id="tab1Label2" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" htmlFor="tab0Input0">
                                </label>
                                <input id="tab1Input2"  class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" type="text" placeholder="Ingrese sus nombres" />
                                <p class="text-red text-xs italic">Por favor, rellene este campo</p>
                            </div>
                            <div id='tab1DivText3' class="md:w-1/2 px-3 mb-6 md:mb-0">
                                <label id="tab1Label3" class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" htmlFor="tab0Input1">
                                </label>
                                <input id="tab1Input3" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3" id="grid-first-name" type="text" placeholder="Ingrese sus nombres" />
                                <p class="text-red text-xs italic">Por favor, rellene este campo</p>
                            </div>
                        </div>
                    </div>
                    <div id='divImagenesTab1' name='divImagenesTab1' class='row'>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="tab2" name="tab2" role="tabpanelº">
                <div id='divImagenesTab2' name='divImagenesTab2' class='row'>
                </div>
            </div>
        </div>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
    <script src="js/documento.js" type="text/javascript"></script>
    <script>
        let appurl = "{{config("app.url ")}}";
    </script>
</body>

</html>