<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="icon" href="{{ asset('/img/senakitch.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/regis.css') }}">
    <script scr="{{asset('js/js.js')}}"></script>
</head>


<body>
    <form id="form" class="form" action="{{route('registerPost')}}" method="POST">

        @csrf


    <div class="registro">
        <img class="avatar" src="img/senalog.png" alt="Logo de Fazt">

        <h1>Crear cuenta</h1>
        <!--nombre-->
        <div class="input-control">
          <section>
        @error('username')
        <small class="small">{{$message}}</small>
        @enderror
        </section>
        <label for="username">Nombre</label>
        <input type="text" placeholder="nombre" name="username" id="username" value="{{old('username')}}">
                </div>


        <!--correo electronico-->
        <div class="input-control">
        @error('email')
        <small class="small">{{$message}}</small>
        @enderror
        <label for="email">Correo electronico</label>
        <input type="email" placeholder="correo electronico" name="email" id="email" value="{{old('email')}}">
                </div>



        <!--contraseña-->
        <div class="input-control">
        @error('password')
        <small class="small">{{$message}}</small>
        @enderror
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Almenos 6 caracteres" name="password" id="password" value="{{old('password')}}">

                </div>


        <!--confirmar contraseña-->
        <div class="input-control">
        @error('password2')
        <small class="small">{{$message}}</small>
        @enderror
        <label for="password2">Confirmar contraseña</label>
        <input type="password" placeholder="contraseña" name="password2" id="password2">

       <input type="submit" value="Continuar" id="button" >

                </div>


    </div>
    </form>

</body>


</html>
