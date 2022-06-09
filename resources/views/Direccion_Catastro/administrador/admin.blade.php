@extends('layouts.apps')
    <head>
      <title>Catastro Amanalco  @yield('title')</title>
      <!--<link rel="icon" href="{{ URL::asset('../img/LOGO.ico') }}" type="image/x-icon"/>-->
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
    </head>

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2>
                <div class="card-header" align="center">
                    {{ __('¡BIENVENIDO ADMINISTRADOR!') }}
                    </br>
                    </br>
                    {{ __('YA PUEDE CONSULTAR LAS CITAS REGISTRADAS') }}
                </div>
                
                </h2>    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
