@extends('layouts.app')
    <head>
      <title>Catastro Amanalco  @yield('title')</title>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
    </head>
    
@section('content')
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
<!--              
            <h4> <div class="card-header text-center">{{ __('CATASTRO MUNICIPAL') }}</div> </h4>
--> 
<!--
              <div class="container-fluid bg-2 text-center">
                <h2>Objetivo</h2>
                <p>El fin y objetivo primordial del Ayuntamiento es lograr el bienestar general de los habitantes del municipio, mediante los servidores públicos, tales como presidente municipal, secretario municipal y cabildo.</p>
              </div>
-->
<!--EMPIEZA SECCION DE SERVICIOS CON IMAGENES -->
                   <div class="section about_section layout_padding">
                      <div class="container">
                         <div class="row">
                            <div class="col-md-12">
                               <div class="full">
                                  <div class="heading_main text_align_center margin-bottom_30">
                                     <h2><strong class="small theme_color">Catatro Municipal</strong><br>Servicios Disponibles</h2>
                                  </div>                                 
                               </div>
                            </div>
                         </div>
                        <div class="row">

                          <div class="col-sm-6 col-md-3 col-lg-3">
                             <div class="work_blog margin-top_30">
                                <img class="img-responsive" src={{asset('../img/servicio1.png')}} alt="#" />
                                <div class="hover_workblog">
                                  <a href="#"><img src={{asset('img/search_icon.png')}} alt="Logo"></a>
                            <!--        <img src="img/search_icon.png" href="#" alt="#" />-->
                                    <h4>Plano de localización</h4>   
                                </div> 
                             </div>
<!--  BOTON CON ESTILOS                           
                                  <div class="full center">
                                    <a class="readmore_bt" data-toggle="collapse" data-target="#plano" href="#">Requisitos</a> 
                                      <div id="plano" class="collapse">
                                            <a href="{{url('login')}}"><h6>-Solicitud de servicio</h6></a>
                                            <h6>-Copia de Identificación (INE)(Propietario)</h6>
                                            <h6>-Manifestación catastral</h6>
                                            <h6>-Pago de predial actualizado</h6> 
                                      </div>      
                                  </div>
-->
                            <div class="full center">
                              <button type="button" class="readmore_bt" data-toggle="collapse" data-target="#plano">Requisitos</button> 
                            </div>  
                                      <div id="plano" class="collapse">
                                        <center>
                                             <a href="{{url('login')}}"><h6>-Solicitud de servicio</h6></a>
                                            <h6>-Copia de Identificación (INE)(Propietario)</h6> 
                                            <h6>-Manifestación catastral</h6>
                                            <h6>-Pago de predial actualizado</h6>  
                                        </center>      
                                      </div>
                          </div>

                          <div class="col-sm-6 col-md-3 col-lg-3">
                             <div class="work_blog margin-top_30">
                                <img class="img-responsive" src={{asset('../img/servicio2.png')}} alt="#" />
                                <div class="hover_workblog">
                                  <a href="#"><img src={{asset('img/search_icon.png')}} alt="Logo"></a>
                            <!--        <img src="img/search_icon.png" alt="#" /> -->
                                    <h4>Imagen satelital con coordenadas UTM</h4>
                                </div>
                             </div>
                            <div class="full center">
                              <button type="button" class="readmore_bt" data-toggle="collapse" data-target="#imagen">Requisitos</button> 
                            </div>  
                                      <div id="imagen" class="collapse">
                                        <center>
                                            <a href="{{url('login')}}"><h6>-Solicitud de servicio</h6></a>
                                            <h6>-Copia de Identificación (INE)(Comprador y Vendedor)</h6> 
                                            <h6>-Manifestación catastral</h6> 
                                            <h6>-Pago de predial actualizado</h6>  
                                        </center>      
                                      </div>
                          </div>

                          <div class="col-sm-6 col-md-3 col-lg-3">
                             <div class="work_blog margin-top_30">
                                <img class="img-responsive" src={{asset('../img/servicio3.png')}} alt="#" />
                                <div class="hover_workblog">
                                  <a href="#"><img src={{asset('img/search_icon.png')}} alt="Logo"></a>
                            <!--        <img src="img/search_icon.png" alt="#" /> -->
                                    <h4>Manifestación catastral</h4>
                                </div>
                             </div>
                            <div class="full center">
                              <button type="button" class="readmore_bt" data-toggle="collapse" data-target="#manifestacion">Requisitos</button> 
                            </div>  
                                      <div id="manifestacion" class="collapse">
                                        <center>
                                            <a href="{{url('login')}}"><h6>-Solicitud de servicio</h6></a>
                                            <h6>-Copia de Identificación (INE)(Comprador y Vendedor)</h6> 
                                            <h6>-Constancia del delegado</h6> 
                                            <h6>-Pago de predial actualizado</h6>  
                                        </center>      
                                      </div>
                          </div>

                          <div class="col-sm-6 col-md-3 col-lg-3">
                             <div class="work_blog margin-top_30">
                                <img class="img-responsive" src={{asset('../img/servicio4.png')}} alt="#" />
                                <div class="hover_workblog">
                                  <a href="#"><img src={{asset('img/search_icon.png')}} alt="Logo"></a>
                            <!--        <img src="img/search_icon.png" alt="#" /> -->
                                    <h4>Traslado de dominio</h4>
                                </div>
                             </div>
                            <div class="full center">
                              <button type="button" class="readmore_bt" data-toggle="collapse" data-target="#trasladod">Requisitos</button> 
                            </div>  
                                      <div id="trasladod" class="collapse">
                                        <center>
                                            <a href="{{url('login')}}"><h6>-Solicitud de servicio</h6></a>
                                            <h6>-Copia de Identificación (INE)(Comprador y Vendedor)</h6> 
                                            <h6>-Constancia del delegado</h6> 
                                            <h6>-Constancia de no pertenencia al bien ejidal y/o comunal</h6>
                                            <h6>-Contrato de compra-venta</h6>
                                            <h6>-Copia de traslado de dominio</h6>
                                            <h6>-Recibo de predial actualizado</h6>  
                                        </center>      
                                      </div>
                          </div>

                          <div class="col-sm-6 col-md-4 col-lg-4">
                             <div class="work_blog margin-top_30">
                                <img class="img-responsive" src={{asset('../img/servicio5.png')}} alt="#" />
                                 
                                <div class="hover_workblog">
                                  <a href="#"><img src={{asset('img/search_icon.png')}} alt="Logo"></a>
                            <!--        <img src="img/search_icon.png" alt="#" /> -->
                                    <h4>Certificación de plano manzanero</h4>
                                </div>
                             </div>
                            <div class="full center">
                              <button type="button" class="readmore_bt" data-toggle="collapse" data-target="#manzanero">Requisitos</button> 
                            </div>  
                                      <div id="manzanero" class="collapse">
                                        <center>
                                              <a href="{{url('login')}}"><h6>-Solicitud de servicio</h6></a>
                                              <h6>-Copia de Identificación (INE)</h6> 
                                              <h6>-Manifestación catastral</h6>
                                              <h6>-recibo de predial actualizado</h6>  
                                              <h6>-Documento que acredite la propiedad</h6>  
                                        </center>      
                                      </div>
                          </div>

                          <div class="col-sm-6 col-md-4 col-lg-4">
                             <div class="work_blog margin-top_30">
                                <img class="img-responsive" src={{asset('../img/servicio6.png')}} alt="#" />
                                <div class="hover_workblog">
                                  <a href="#"><img src={{asset('img/search_icon.png')}} alt="Logo"></a>
                              <!--      <img src="img/search_icon.png" alt="#" /> -->
                                    <h4>Certificación de clave y valor catastral</h4>
                                </div>
                             </div>
                            <div class="full center">
                              <button type="button" class="readmore_bt" data-toggle="collapse" data-target="#valor">Requisitos</button> 
                            </div>  
                                      <div id="valor" class="collapse">
                                        <center>
                                            <a href="{{url('login')}}"><h6>-Solicitud de servicio</h6></a>
                                            <h6>-Copia de Identificación (INE)</h6> 
                                            <h6>-Manifestación catastral</h6>
                                            <h6>-Recibo de predial actualizado</h6>  
                                            <h6>-Documento que acredite la propiedad</h6>  
                                        </center>      
                                      </div>
                          </div>

                          <div class="col-sm-6 col-md-4 col-lg-4">
                             <div class="work_blog margin-top_30">
                                <img class="img-responsive" src={{asset('../img/servicio7.png')}} alt="#" />
                                <div class="hover_workblog">
                                  <a href="#"><img src={{asset('img/search_icon.png')}} alt="Logo"></a>
                              <!--      <img src="img/search_icon.png" alt="#" /> -->
                                    <h4>Verificación de linderos</h4>
                                </div>
                             </div>
                            <div class="full center">
                              <button type="button" class="readmore_bt" data-toggle="collapse" data-target="#linderos">Requisitos</button> 
                            </div>  
                                      <div id="linderos" class="collapse">
                                        <center>
                                            <a href="{{url('login')}}"><h6>-Solicitud de servicio</h6></a>
                                            <h6>-Copia de Identificación (INE)</h6> 
                                            <h6>-Documento que acredite la propiedad</h6> 
                                            <h6>-Identificación de sus linderos</h6>
                                            <h6>-Presencia de sus colindantes</h6>
                                            <h6>-Recibo de impuesto predial actualizado</h6>  
                                        </center>      
                                      </div>
                          </div>

                        </div>
                      </div>
                   </div>
<!--TERMINA SECCION DE SERVICIOS CON IMAGENES -->
<!--
                <div class="container-fluid bg-1 text-center">
                  <h3>¿Cuál es la finalidad de catastro municipal?</h3>
                  <img src={{asset('../img/h.png')}} class="img-circle" display="block" margin="0 auto" max-width="100%" width="80%">
                  <h3>El catastro municipal es el área encargada de prestar apoyos diversos para la planeación y prestación de los servicios públicos. Así mismo, llevar a cabo la administración de inventarios o censo de la riqueza inmobiliaria de la región.</h3>
                </div>
-->               
            </div>
        </div>
    </div>
</body>

<script src="{{ asset('/sweetalert/sweetalert.min.js') }}"></script>
@include('sweet::alert')    
</div>

@endsection

