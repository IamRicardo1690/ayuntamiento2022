@extends('layouts.app')
    <head>
      <title>Catastro Amanalco  @yield('title')</title>
      <link rel="icon" href="{{ URL::asset('../img/amanalco_ico.ico') }}" type="image/x-icon"/>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
    </head>
@section('content')
<div class="container">
@if( Session::has('Mensaje')) 

<div class="alert alert-success" role="alert"> <!--este div le pone estilos a los alert -->
{{
        Session::get('Mensaje')
}}
</div>
@endif
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h2>
                <div class="card-header" align="center">
                    {{ __('¡BIENVENIDO USUARIO!') }}
                    </br>
                    </br>
                    {{ __('PARA SOLICITAR UNA CITA HAS CLICK EN EL BOTON SOLICITAR CITA') }}
                </div>
                
                </h2>    
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container" align="center">
                        <a href="{{ url('solicitudes') }}" class="btn btn-primary">Solicitar cita</a>
                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
