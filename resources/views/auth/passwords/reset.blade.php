

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio Sesion </title>
    <link rel="stylesheet" href="{{ asset('css/restab.css') }}">
    <link rel="icon" href="{{ asset('/img/senakitch.ico') }}">
</head>
<body>

    @section('content')
<div class="Login-box">
    <img class="avatar" src="img/senalog.png" alt="Logo de Fazt">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <h1>Restablecer la contraseña</h1>
                <div class="card-body">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo electrónico') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password" for="password" type="password"  placeholder="Nueva contraseña"   class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('Contraseña')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label sma  for="password-confirm"   class="col-md-4 col-form-label text-md-right">{{ __('Confirmar contraseña') }} </label>

                            <div class="col-md-6">
                                <input type="password" id="password-confirm"  placeholder="Confirmar contraseña" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Confirmar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
