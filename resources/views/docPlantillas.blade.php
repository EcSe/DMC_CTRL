<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
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
                        @csrf
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
                    <div id="div1" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                        <div class="mb-3 sm:w-1/2 sm:mr-1">
                            <figure>
                                <figcaption id="fc1" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                                <img id="imgEjemplo1" src="" class="h-auto w-full sm:mt-10">
                            </figure>
                        </div>
                        <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                            <form id="frm1" enctype="multipart/form-data">
                                @csrf
                                <div class="flex w-full items-center justify-center bg-grey-lighter">
                                    <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage1" name="inputImage1" onchange="readURL(this)" />
                                    </label>
                                </div>
                                <div class="flex justify-between">
                                    <input type="submit" value="Cargar" id="subCarga1" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                    <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                                </div>
                                <div class="">
                                    <img class="h-auto w-screen" id="img1" src="">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="div2" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                        <div class="mb-3 sm:w-1/2 sm:mr-1">
                            <figure>
                                <figcaption id="fc2" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                                <img id="imgEjemplo2" src="" class="h-auto w-full sm:mt-10">
                            </figure>
                        </div>
                        <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                            <form id="frm2" enctype="multipart/form-data">
                                @csrf
                                <div class="flex w-full items-center justify-center bg-grey-lighter">
                                    <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage2" name="inputImage2" onchange="readURL(this)" />
                                    </label>
                                </div>
                                <div class="flex justify-between">
                                    <input type="submit" value="Cargar" id="subCarga2" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                    <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                                </div>
                                <div class="">
                                    <img class="h-auto w-screen" id="img2" src="">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="div3" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                        <div class="mb-3 sm:w-1/2 sm:mr-1">
                            <figure>
                                <figcaption id="fc3" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                                <img id="imgEjemplo3" src="" class="h-auto w-full sm:mt-10">
                            </figure>
                        </div>
                        <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                            <form id="frm3" enctype="multipart/form-data">
                                @csrf
                                <div class="flex w-full items-center justify-center bg-grey-lighter">
                                    <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage3" name="inputImage3" onchange="readURL(this)" />
                                    </label>
                                </div>
                                <div class="flex justify-between">
                                    <input type="submit" value="Cargar" id="subCarga3" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                    <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                                </div>
                                <div class="">
                                    <img class="h-auto w-screen" id="img3" src="">
                                </div>
                            </form>
                        </div>
                    </div>
                    <div id="div4" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                        <div class="mb-3 sm:w-1/2 sm:mr-1">
                            <figure>
                                <figcaption id="fc4" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                                <img id="imgEjemplo4" src="" class="h-auto w-full sm:mt-10">
                            </figure>
                        </div>
                        <div class="sm:mt-1 sm:w-1/2 sm:ml-1"></div>
                        <form id="frm4" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage4" name="inputImage4" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga4" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img4" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div5" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc5" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo5" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm5" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage5" name="inputImage5" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga5" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img5" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div6" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc6" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo6" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm6" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage6" name="inputImage6" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga6" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img6" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div7" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc7" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo7" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm7" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage7" name="inputImage7" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga7" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img7" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div8" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc8" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo8" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm8" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage8" name="inputImage8" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga8" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img8" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div9" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc9" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo9" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm9" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage9" name="inputImage9" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga9" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img9" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div10" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc10" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo10" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm10" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage10" name="inputImage10" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga10" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img10" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div11" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc11" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo11" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm11" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage11" name="inputImage11" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga11" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img11" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div12" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc12" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo12" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm12" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage12" name="inputImage12" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga12" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img12" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div13" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc13" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo13" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm13" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage13" name="inputImage13" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga13" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img13" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div14" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc14" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo14" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm14" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage14" name="inputImage1" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga14" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img14" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div15" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc15" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo15" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm15" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage15" name="inputImage15" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga15" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img15" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div16" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc16" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo16" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm16" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage16" name="inputImage16" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga16" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img16" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div17" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc17" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo17" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm17" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage17" name="inputImage17" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga17" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img17" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div18" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc18" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo18" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm18" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage18" name="inputImage18" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga18" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img18" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div19" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc19" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo19" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm19" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage19" name="inputImage19" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga19" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img19" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div20" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc20" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo20" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm20" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage20" name="inputImage20" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga20" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img20" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div21" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc21" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo21" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm21" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage21" name="inputImage21" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga21" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img21" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div22" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc22" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo22" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm22" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage22" name="inputImage22" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga22" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img22" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div23" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc23" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo23" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm23" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage23" name="inputImage23" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga23" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img23" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div24" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc24" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo24" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm24" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage24" name="inputImage24" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga24" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img24" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div25" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc25" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo25" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm25" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage25" name="inputImage25" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga25" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img25" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div26" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc26" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo26" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm26" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage26" name="inputImage26" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga26" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img26" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div27" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc27" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo27" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm27" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage27" name="inputImage27" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga27" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img27" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div28" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc28" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo28" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm28" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage28" name="inputImage28" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga28" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img28" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div29" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc29" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo29" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm29" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage29" name="inputImage29" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga29" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img29" src="">
                            </div>
                        </form>
                    </div>
                </div>
                <div id="div30" class="flex flex-col border-4 border-blue-600 my-1 sm:flex-row" style="display: none;">
                    <div class="mb-3 sm:w-1/2 sm:mr-1">
                        <figure>
                            <figcaption id="fc30" class="text-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase my-1 py-3"></figcaption>
                            <img id="imgEjemplo30" src="" class="h-auto w-full sm:mt-10">
                        </figure>
                    </div>
                    <div class="sm:mt-1 sm:w-1/2 sm:ml-1">
                        <form id="frm30" enctype="multipart/form-data">
                            @csrf
                            <div class="flex w-full items-center justify-center bg-grey-lighter">
                                <label class="w-screen flex flex-col items-center bg-white text-blue-600 rounded-lg shadow-lg tracking-wide uppercase border border-blue cursor-pointer hover:text-green-600">
                                        <svg class="w-6 h-6" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                            <path d="M16.88 9.1A4 4 0 0 1 16 17H5a5 5 0 0 1-1-9.9V7a3 3 0 0 1 4.52-2.59A4.98 4.98 0 0 1 17 8c0 .38-.04.74-.12 1.1zM11 11h3l-4-4-4 4h3v3h2v-3z" />
                                        </svg>
                                        <span class="mt-2 text-base leading-normal">Seleccionar Imagen</span>
                                        <input type='file' class="hidden" id="inputImage30" name="inputImage30" onchange="readURL(this)" />
                                    </label>
                            </div>
                            <div class="flex justify-between">
                                <input type="submit" value="Cargar" id="subCarga30" class="text-white bg-green-500 rounded py-2 px-3 ml-2 my-2">
                                <input type="button" value="Borrar" class="text-white bg-red-500 rounded py-2 px-3 mr-3 my-2" onclick="borrarImagen(this)">
                            </div>
                            <div class="">
                                <img class="h-auto w-screen" id="img30" src="">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
    <script src="js/docTemplate.js" type="text/javascript"></script>
    <script>
		let appurl = "{{config("app.url")}}";
    </script>
</body>

</html>