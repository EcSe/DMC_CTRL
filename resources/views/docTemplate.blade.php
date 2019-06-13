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
                <h1>Campos Texto</h1>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                            <div class="col-md-4"></div>
                        </div>
                    </div>
                    @php $i = 0 @endphp @foreach($campos as $lista) @if($lista->VC_VALOR_CADENA_2 == "" )
                    <div class="row">
                        <div class="col-md-12 form-group" style="display: inline-flex">
                            <div class="col-md-4">
                                <label>{{ $lista->VC_VALOR_CADENA_1 }}</label>
                            </div>
                            <div class="col-md-8">
                                <input type="text" id="campo{{$i++}}">
                            </div>
                        </div>
                    </div>
                    @endif @endforeach
                </div>
            </div>
            <div class="tab-pane fade" id="tabCamposImagen" name="tabCamposImagen" role="tabpanel">
                <h1>Campos Imagen</h1>
                    <div class="container-fluid">
                        @php $j = 0; $k=0 @endphp @foreach($campos as $lista) @if($lista->VC_VALOR_CADENA_2 != "" )
                        <div class="row">
                            <div class="col-md-12 form-group" style="display: inline-flex">
                                <div class="col-md-6">
                                    <figure style="border:thin silver solid;text-align: center;">
                                        <figcaption>Foto Ejemplo: {{ $lista->VC_VALOR_CADENA_1}}</figcaption>
                                        <img src="{{ $lista->VC_VALOR_CADENA_2 }}" width="500px" height="auto" class="img-fluid img-thumbnail">
                                    </figure>
                                </div>
                                <div class="col-md-6" id="wrapper">
                                    <input type="file" id="inputFoto{{$j++}}" onchange="preview_image(event)">
                                    <img id="imgFoto{{$k++}}">
                                </div>
                            </div>
                        </div>
                        @endif @endforeach
                    </div>
            </div>
        </div>
    </div>
    <script src="js/app.js" charset="utf-8"></script>
    <script src="js/docTemplate.js" type="text/javascript"></script>
</body>

</html>