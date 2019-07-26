<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/app.css">
    <link rel="stylesheet" href="css/docTemplate.css">
    <title>Document</title>
</head>

<body>
    <div id="navbar-example">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#tabCamposTexto" role="tab">
                    Texto
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#tabCamposImagen">
                    Imagenes
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="tab-pane fade show active" id="tabCamposTexto" name="tabCamposTexto" role="tabpanel">
                <div class=" flex flex-row justify-around bg-green-200 py-2 m-6">
                    <div class="text-center text-lg">Proveedor: <span class="italic" id="spProveedor"></span></div>
                    <div class="text-center text-lg">Proyecto: <span class="italic" id="spProyecto"></span> </div>
                    <div class="text-center text-lg">Plano: <span class="italic" id="spPlano"></span></div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    <form class="" id="frmCamposTexto" enctype="multipart/form-data">
                        <div class="row" id="r1" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc1"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c1" name="c1">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r2" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc2"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c2" name="c2">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r3" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc3"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c3" name="c3">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r4" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc4"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c4" name="c4">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r5" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc5"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c5" name="c5">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r6" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc6"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c6" name="c6">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r7" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc7"></label>
                                </div>
                                <div class="col-md-8" id="r8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c7" name="c7">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r8" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc8"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c8" name="c8">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r9" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc9"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c9" name="c9">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r10" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc10"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c10" name="c10">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r11" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc11"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c11" name="c11">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r12" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc12"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c12" name="c12">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r13" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc13"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c13" name="c13">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r14" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc14"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c14" name="c14">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r15" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc15"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c15" name="c15">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r16" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc16"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c16" name="c16">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r17" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc17"></label>
                                </div>
                                <div class="col-md-8">
                                    <input class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal" type="text" id="c17" name="c17">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r18" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc18"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c18" name="c18" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r19" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc19"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c19" name="c19" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r20" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc20"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c20" name="c20" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r21" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc21"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c21" name="c21" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r22" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc22"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c22" name="c22" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r23" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc23"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c23" name="c23" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r24" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc24"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c24" name="c24">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r25" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc25"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c25" name="c25" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r26" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc26"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c26" name="c26" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r27" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc27"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c27" name="c27" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r28" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc28"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c28" name="c28" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r29" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc29"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c29" name="c29" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r30" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc30"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c30" name="c30" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r31" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc31"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c31" name="c31" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r32" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc32"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c32" name="c32" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r33" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc33"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c33" name="c33" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r34" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc34"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c34" name="c34" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r35" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc35"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c35" name="c35" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r36" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc36"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c36" name="c36" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r37" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc37"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c37" name="c37" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r38" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc38"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c38" name="c38" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r39" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc39"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c39" name="c39" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r40" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc40"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c40" name="c40" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r41" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc41"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c41" name="c41" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r42" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc42"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c42" name="c42" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r43" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc43"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c43" name="c43" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r44" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc44"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c44" name="c44" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r45" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc45"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c45" name="c45" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r46" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc46"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c46" name="c46" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r47" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc47"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c47" name="c47" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r48" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc48"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c48" name="c48" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r49" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc49"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c49" name="c49" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="r50" style="display: none;">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-4">
                                    <label id="lblc50"></label>
                                </div>
                                <div class="col-md-8">
                                    <input type="text" id="c50" name="c50" class=" focus:outline-0 focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 appearance-none leading-normal">
                                </div>
                            </div>
                        </div>
                        <div class="row" id="guardarTexto">
                            <div class="col-md-12" style="text-align: center">
                                <input type="submit" id="inGuardarCampos" value="Guardar" class="bg-green-500 hover:bg-green-700 rounded text-white font-semibold py-2 px-4">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="tabCamposImagen" name="tabCamposImagen" role="tabpanel">
                <div class=" flex flex-row justify-around bg-green-200 py-2 m-6">
                    <div class="text-center text-lg">Proveedor: <span class="italic" id="spiProveedor"></span></div>
                    <div class="text-center text-lg">Proyecto: <span class="italic" id="spiProyecto"></span> </div>
                    <div class="text-center text-lg">Plano: <span class="italic" id="spiPlano"></span></div>
                </div>
                <div class="container-fluid">
                    <div class="row" id="div1" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc1"></figcaption>
                                    <img id="imgEjemplo1" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm1" enctype="multipart/form-data">
                                    <input type="file" id="inputImage1" name="inputImage1" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga1">
                                    <input type="button" value="Borrar">
                                    <img id="img1" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div2" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc2"></figcaption>
                                    <img id="imgEjemplo2" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm2" enctype="multipart/form-data">
                                    <input type="file" id="inputImage2" name="inputImage2" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga2">
                                    <input type="button" value="Borrar">
                                    <img id="img2" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div3" style="display:none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc3"></figcaption>
                                    <img id="imgEjemplo3" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm3" enctype="multipart/form-data">
                                    <input type="file" id="inputImage3" name="inputImage3" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga3">
                                    <input type="button" value="Borrar">
                                    <img id="img3" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div4" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc4"></figcaption>
                                    <img id="imgEjemplo4" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm4" enctype="multipart/form-data">
                                    <input type="file" id="inputImage4" name="inputImage4" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga4">
                                    <input type="button" value="Borrar">
                                    <img id="img4" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div5" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc5"></figcaption>
                                    <img id="imgEjemplo5" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm5" enctype="multipart/form-data">
                                    <input type="file" id="inputImage5" name="inputImage5" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga5">
                                    <input type="button" value="Borrar">
                                    <img id="img5" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div6" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc6"></figcaption>
                                    <img id="imgEjemplo6" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm6" enctype="multipart/form-data">
                                    <input type="file" id="inputImage6" name="inputImage6" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga6">
                                    <input type="button" value="Borrar">
                                    <img id="img6" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div7" style="display:none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc7"></figcaption>
                                    <img id="imgEjemplo7" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm7" enctype="multipart/form-data">
                                    <input type="file" id="inputImage7" name="inputImage7" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga7">
                                    <input type="button" value="Borrar">
                                    <img id="img7" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div8" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc8"></figcaption>
                                    <img id="imgEjemplo8" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm8" enctype="multipart/form-data">
                                    <input type="file" id="inputImage8" name="inputImage8" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga8">
                                    <input type="button" value="Borrar">
                                    <img id="img8" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div9" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc9"></figcaption>
                                    <img id="imgEjemplo9" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm9" enctype="multipart/form-data">
                                    <input type="file" id="inputImage9" name="inputImage9" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga9">
                                    <input type="button" value="Borrar">
                                    <img id="img9" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div10" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc10"></figcaption>
                                    <img id="imgEjemplo10" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm10" enctype="multipart/form-data">
                                    <input type="file" id="inputImage10" name="inputImage10" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga10">
                                    <input type="button" value="Borrar">
                                    <img id="img10" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div11" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc11"></figcaption>
                                    <img id="imgEjemplo11" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm11" enctype="multipart/form-data">
                                    <input type="file" id="inputImage11" name="inputImage11" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga11">
                                    <input type="button" value="Borrar">
                                    <img id="img11" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div12" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc12"></figcaption>
                                    <img id="imgEjemplo12" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm12" enctype="multipart/form-data">
                                    <input type="file" id="inputImage12" name="inputImage12" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga12">
                                    <input type="button" value="Borrar">
                                    <img id="img12" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div13" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc13"></figcaption>
                                    <img id="imgEjemplo13" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm13" enctype="multipart/form-data">
                                    <input type="file" id="inputImage13" name="inputImage13" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga13">
                                    <input type="button" value="Borrar">
                                    <img id="img13" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div14" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc14"></figcaption>
                                    <img id="imgEjemplo14" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm14" enctype="multipart/form-data">
                                    <input type="file" id="inputImage14" name="inputImage14" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga14">
                                    <input type="button" value="Borrar">
                                    <img id="img14" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div15" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc15"></figcaption>
                                    <img id="imgEjemplo15" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm15" enctype="multipart/form-data">
                                    <input type="file" id="inputImage15" name="inputImage15" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga15">
                                    <input type="button" value="Borrar">
                                    <img id="img15" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div16" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc16"></figcaption>
                                    <img id="imgEjemplo16" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm16" enctype="multipart/form-data">
                                    <input type="file" id="inputImage16" name="inputImage16" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga16">
                                    <input type="button" value="Borrar">
                                    <img id="img16" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div17" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc17"></figcaption>
                                    <img id="imgEjemplo17" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm17" enctype="multipart/form-data">
                                    <input type="file" id="inputImage17" name="inputImage17" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga17">
                                    <input type="button" value="Borrar">
                                    <img id="img17" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div18" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc18"></figcaption>
                                    <img id="imgEjemplo1" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm18" enctype="multipart/form-data">
                                    <input type="file" id="inputImage18" name="inputImage18" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga18">
                                    <input type="button" value="Borrar">
                                    <img id="img18" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div19" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc19"></figcaption>
                                    <img id="imgEjemplo19" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm19" enctype="multipart/form-data">
                                    <input type="file" id="inputImage19" name="inputImage19" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga19">
                                    <input type="button" value="Borrar">
                                    <img id="img19" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div20" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc20"></figcaption>
                                    <img id="imgEjemplo20" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm20" enctype="multipart/form-data">
                                    <input type="file" id="inputImage20" name="inputImage20" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga20">
                                    <input type="button" value="Borrar">
                                    <img id="img20" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div21" style="display:none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc21"></figcaption>
                                    <img id="imgEjemplo21" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm21" enctype="multipart/form-data">
                                    <input type="file" id="inputImage21" name="inputImage21" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga21">
                                    <input type="button" value="Borrar">
                                    <img id="img21" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div22" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc22"></figcaption>
                                    <img id="imgEjemplo22" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm22" enctype="multipart/form-data">
                                    <input type="file" id="inputImage22" name="inputImage22" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga22">
                                    <input type="button" value="Borrar">
                                    <img id="img22" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div23" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc23"></figcaption>
                                    <img id="imgEjemplo23" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm23" enctype="multipart/form-data">
                                    <input type="file" id="inputImage23" name="inputImage23" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga23">
                                    <input type="button" value="Borrar">
                                    <img id="img23" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div24" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc24"></figcaption>
                                    <img id="imgEjemplo24" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm24" enctype="multipart/form-data">
                                    <input type="file" id="inputImage24" name="inputImage24" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga24">
                                    <input type="button" value="Borrar">
                                    <img id="img24" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div25" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc25"></figcaption>
                                    <img id="imgEjemplo25" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm25" enctype="multipart/form-data">
                                    <input type="file" id="inputImage25" name="inputImage25" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga25">
                                    <input type="button" value="Borrar">
                                    <img id="img25" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div26" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc26"></figcaption>
                                    <img id="imgEjemplo26" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm26" enctype="multipart/form-data">
                                    <input type="file" id="inputImage26" name="inputImage26" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga26">
                                    <input type="button" value="Borrar">
                                    <img id="img26" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div27" style="display:none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc27"></figcaption>
                                    <img id="imgEjemplo27" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm27" enctype="multipart/form-data">
                                    <input type="file" id="inputImage27" name="inputImage27" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga27">
                                    <input type="button" value="Borrar">
                                    <img id="img27" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div28" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc28"></figcaption>
                                    <img id="imgEjemplo28" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm28" enctype="multipart/form-data">
                                    <input type="file" id="inputImage28" name="inputImage28" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga28">
                                    <input type="button" value="Borrar">
                                    <img id="img28" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div29" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc29"></figcaption>
                                    <img id="imgEjemplo29" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm29" enctype="multipart/form-data">
                                    <input type="file" id="inputImage29" name="inputImage29" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga29">
                                    <input type="button" value="Borrar">
                                    <img id="img29" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="div30" style="display: none;">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-6">
                                <figure style="border:thin silver solid;text-align: center;">
                                    <figcaption id="fc30"></figcaption>
                                    <img id="imgEjemplo30" src="" width="500px" height="auto" class="img-fluid img-thumbnail">
                                </figure>
                            </div>
                            <div class="col-md-6" id="wrapper">
                                <form id="frm30" enctype="multipart/form-data">
                                    <input type="file" id="inputImage30" name="inputImage30" onchange="readURL(this)">
                                    <input type="submit" value="Cargar" id="subCarga30">
                                    <input type="button" value="Borrar">
                                    <img id="img30" src="" width="500" height="auto">
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
    <script src="js/docTemplate.js" type="text/javascript"></script>
</body>

</html>