@extends('layouts.principal')
    <head>
      <title>Servicios Amanalco tramites @yield('title')</title>
      <link rel="icon" href="{{ URL::asset('../img/amanalco_ico.ico') }}" type="image/x-icon"/>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
    </head>
    
@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <div class="section about_section layout_padding dash_bg">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center">
                           <h2>TRAMITES Y SERVICIOS AYUNTAMIENTO DE AMANALCO 2022</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
<!--este oculta otro div -->
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src={{asset('../img/icon_1.png')}} alt="#" />
                            <a href="{{ URL('D_economico') }}"><img class="default-none"  src={{asset('../img/icon_1w.png')}} alt="#" /></a>
                         </div>
                         <div class="full">
                           <a href="{{ URL('D_economico')}}"><h4>Desarrollo Economico</h4></a>
                         </div>
                         <div class="full">
                           <p>Consulta los proyectos disponibles para las pequeñas y medianas empresas.</p>
                         </div>
                     </div>
                  </div>

                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src={{asset('../img/cata_2.png')}} alt="#" />
                            <a href="{{url('catastro')}}"><img class="default-none" src={{asset('../img/cata_2w.png')}} alt="#" /></a>
                         </div>
                         <div class="full">
                            <a href="{{url('catastro')}}"><h4>Catastro Municipal</h4></a>
                         </div>
                         <div class="full">
                           <p>Ya puedes agendar una cita para realizar un tramite en Catastro</p>
                         </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src={{asset('../img/icon_3.png')}} alt="#" />
                            <a href="{{url('login')}}"><img class="default-none" src={{asset('../img/icon_3w.png')}} alt="#" /></a>
                         </div>
                         <div class="full">
                            <a href="{{url('login')}}"><h4>Tramite de cartillas</h4></a>
                         </div>
                         <div class="full">
                           <p>Agenda una cita y conose los documentos que necetas para tramitar tu cartilla militar..</p>
                         </div>
                     </div>
                  </div>
<!--este oculta otro div -->
                  <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src={{asset('../img/icon_4.png')}} alt="#" />
                            <img class="default-none"  src={{asset('../img/icon_4w.png')}} alt="#" />
                         </div>
                         <div class="full">
                            <h4>Desarrollo agropecuario</h4>
                         </div>
                         <div class="full">
                           <p>Incribete a los programas de apoyo que tenemos disponibles para el mejoramiento de tu cultivo.</p>
                         </div>
                     </div>
                  </div>

                  <div class="col-xs-12 col-sm-12 col-md-6 col-lg-12">
                     <div class="full feature_box">
                         <div class="full icon">
                            <img class="default-block" src={{asset('../img/icon_4.png')}} alt="#" />
                            <a href="{{ URL('D_turismo') }}"><img class="default-none"  src={{asset('../img/icon_4w.png')}} alt="#" /></a>
                         </div>
                         <div class="full">
                            <a href="{{ URL('D_turismo') }}"><h4>Turismo</h4></a>
                         </div>
                         <div class="full">
                           <p>Incribete a los programas de apoyo que tenemos disponibles para el mejoramiento de tu cultivo.</p>
                         </div>
                     </div>
                  </div>

               </div>
            </div>
         </div>
            </div>
        </div>
    </div>
</body>




<script src="{{ asset('/sweetalert/sweetalert.min.js') }}"></script>
@include('sweet::alert')    
</div>

        <!-- Start Footer 
         <footer class="footer-box">
               <div class="row">
                  <div class="col-md-12">
                     <div class="full">
                        <div class="heading_main text_align_center white_fonts margin-bottom_30">
                           <h2>Contact us</h2>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="row">
                  
                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_1">
                         <p>Address<br><small>151 Ho Ba Kien Street,<br>Ward 15, District 10,<br>Ho Chi Minh City, Vietnam</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_2">
                        <p>Phone<br><small>+84 126 922 0162<br>+84 905 333 333<br>Monday - Sunday<br>08:00 am - 05:00 pm</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog f_icon_3">
                         <p>Email<br><small>support@sofbox.com<br>24 X 7 online support</small></p>
                     </div>
                  </div>

                  <div class="col-lg-3 col-md-6 col-sm-6 white_fonts">
                     <div class="full footer_blog_last">
                         <p>Social media</p>
                         <p>
                           <ul>
                              <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                              <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                           </ul>
                         </p>
                     </div>
                  </div>
               </div>
         </footer> -->

@endsection
