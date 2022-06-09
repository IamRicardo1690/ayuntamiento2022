<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('../img/amanalco_ico.ico') }}" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Catastro Amanalco') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Styles  footer-->
      <link href="{{ asset('css/footer.css') }}" rel="stylesheet">


</head>
<body>
    <div id="app">
</br>
                <div class="img-responsive" align="center">
                    <img class="img-responsive"   src={{asset('../img/header-img02.jpg')}} display="block" margin="0 auto" max-width="100%" width="80%" >
                </div>
                <div class="container">
                    <script>//codigo para la fecha
                                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                                var f=new Date();
                                document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    </script>
                </div>                         

        <nav class="navbar navbar-expand-md navbar-dark bg-dark shadow-sm">
            <div class="container">
              <!--  <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                    
                </a> -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                         
 
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar Sesión') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar Usuario') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">


                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('traslado') }}">{{ __('Traslado de dominio') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('plano') }}">{{ __('Certificación de plano manzanero') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ url('valor') }}">{{ __('Certificación de clave y valor catastral') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL('verificacion') }}">{{ __('Verificación de linderos') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL('localizacion') }}">{{ __('Plano de localización') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL('satelital') }}">{{ __('Imagen satelital con cooordenadas UTM') }}</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ URL('manifestacion') }}">{{ __('Manifestación catastral') }}</a>
                                        </li>
                                



                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name}} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Cerrar Sesión') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
<!--ESTO ES EL APARTADO DEL FOOTER -->
<div class="footer_bottom">
    <div class="container">
       <div class="row">
          <div class="col-12">
             <p class="crp">© Amanalco Estado de Mexico 2021 iamRicardo <a href="https://iamricardo.dev" title="Free Website Templates">software en linea</a></p>
          </div>
       </div>
    </div>
 </div>

</body>
</html>
