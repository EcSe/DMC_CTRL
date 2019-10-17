<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Login</title>
</head>

<body>
    <div class="container-login" style="background-image: url('Images/bg-01.jpg')">
        <div class="login-form">
            <form action="{{ route('loginUser') }}" method="post">
            @csrf
                <h2 class="text-center">Inicio de Sesion</h2>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Usuario" name="idUsuario" id="idUsuario"
                        required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" id="password"
                        required="required">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary btn-block" value="Ingresar" >
                </div>
                <div class="form-group">
                    @if(session('avisoUser'))
                    {{session('avisoUser')}}
                    @endif
                </div>
            </form>
        </div>
    </div>
    <!-- <script src="js/app.js" charset="utf-8"></script> -->
</body>

</html>