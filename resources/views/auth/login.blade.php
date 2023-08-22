<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion </title>
    <link rel="stylesheet" href="{{ asset('css/master.css') }}">
    <link rel="icon" href="{{ asset('/img/senakitch.ico') }}">


</head>
<body>
<form action="/login" method="POST">
    @csrf
    <div class="Login-box">
        <img class="avatar" src="img/senalog.png" alt="Logo de Fazt">
        <h1>SENAKITCH</h1>
         <!--CORREO-->

         <label for="Correo">Correo electronico</label>
         <input type="text" placeholder="correo electronico" name="username">
          <!--Contraseña-->
          <label for="Contraseña">Contraseña</label>
          <input type="password" name="password" placeholder="Contraseña">

          <button type="submit" value="Login">Continuar  </button>


          <a href="{{ route('google') }}" class="login-button">Continuar con Google</a>



          <span><a href="{{route('register')}}">¿No tienes cuenta?</a></span>
          <div class="form-group row mb-0">
            <div class="col-md-8 offset-md-4">
                @if (Route::has('password.request'))
                <span><a class="btn btn-link" href="{{ route('password.request') }}"> {{ __('¿Olvidaste tu contraseña?') }}</a></span>
                    </span>
                @endif
            </div>

</form>
    <script src="{{ asset('js/sr.js') }}"></script>
</body>
</html>



