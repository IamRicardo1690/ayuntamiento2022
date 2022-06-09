<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="{{ URL::asset('../img/amanalco_ico.ico') }}" type="image/x-icon"/>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('turismo/css/style.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <!-- Styles  footer-->

      <link href="{{ asset('css/home.css') }}" rel="stylesheet">
      <link href="{{ asset('css/footer.css') }}" rel="stylesheet">
      <link href="{{ asset('css/principal.css') }}" rel="stylesheet">
      <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
      
      
   
      <!-- sweetalert -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.0/sweetalert.min.js"></script>
      
<!--cnd para fullcalendar -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.css">
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.6.0/locales-all.js"></script>
    
    <!--este script bloquea el click select de para cerra sesion -->
    <!--<script src="{{ asset('js/app.js') }}"></script>-->

</head>
<body>
    <div id="app">
        </br>
                <div class=" " align="center">
                <!--imagen responsiva en app, apps y inicio .blade-->
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
