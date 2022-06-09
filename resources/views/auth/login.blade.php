@extends('layouts.app')
    <head>
      <title>Catastro Amanalco  @yield('title')</title>
      <link rel="icon" href="{{ URL::asset('../img/descarga.ico') }}" type="image/x-icon"/>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
    </head>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="text-center card-header">{{ __('INICIO DE SESIÓN') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="container text-center">
                            <img class="img-responsive" src={{asset('../img/u.jpg')}} width="80" height="80">    
                        </div>

                        <div class="container text-center">
                            <div class="" align="" >
                                    <p class="danger"><h3><code>IMPORTANTE:</code></h3></p>
                                </div>
                        
                                <div class="text-center">
                                    <p class=""><h5>Si deseas solicitar una cita ingresa como:
                                        <p><strong>E-Mail: </strong>usuario@catastro.com</p>
                                        <p><strong>Contraseña: </strong>1234567890</h5></p>
                                    </p>
                        </div>
                                
                        


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
{{--
                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Recordar mi contraseña') }}
                                    </label>
                                </div>
                            </div>
                        </div>
--}}
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4" align="right">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Iniciar sesión') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
