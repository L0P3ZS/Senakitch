<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Registro</title>
    <link rel="icon" href="{{ asset('/img/senakitch.ico') }}">
    <link rel="stylesheet" href="{{ asset('regis.css') }}">
    <script scr="{{asset('js/js.js')}}"></script>
</head>


<body>
    <form id="form" class="form" action="{{route('crud.update', $crud)}}" method="POST">

        @csrf

        @method('put')


    <div class="registro">
        <img class="avatar" src="{{ asset('img/elsena.png') }}" alt="Logo de Fazt">

        <h1>Editar Registro</h1>
        <!--nombre-->
        <div class="input-control">
          <section>
        @error('username')
        <small class="small">{{$message}}</small>
        @enderror
        </section>
        <label for="username">Nombre</label>
        <input type="text" placeholder="nombre" name="username" id="username" value="{{ $crud->username}}">
                </div>


        <!--correo electronico-->
        <div class="input-control">
        @error('email')
        <small class="small">{{$message}}</small>
        @enderror
        <label for="email">Correo electronico</label>
        <input type="email" placeholder="correo electronico" name="email" id="email" value="{{ $crud->email}}">
                </div>



        <!--contraseña-->
        <div class="input-control">
        @error('password')
        <small class="small">{{$message}}</small>
        @enderror
        <label for="password">Contraseña</label>
        <input type="password" placeholder="Almenos 6 caracteres" name="password" id="password" value="{{ $crud->password}}">

        </div>

       <input type="submit" value="Actualizar Registro" id="button" >

        </div>


    </div>
    </form>

</body>


</html>
