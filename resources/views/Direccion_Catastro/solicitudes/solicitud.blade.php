


@extends('layouts.app')
    <head>
      <title>Catastro Amanalco  @yield('title')</title>
      <link rel="icon" href="{{ URL::asset('../img/LOGO.ico') }}" type="image/x-icon"/>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">

      <link href="{{ asset('packages/core/main.css')  }}" rel='stylesheet' type="text/css">
      <link href="{{ asset('packages/daygrid/main.css')  }}" rel='stylesheet' type="text/css">
      <link href="{{ asset('packages/timegrid/main.css')  }}" rel='stylesheet' type="text/css">
      <link href="{{ asset('packages/bootstrap/main.css')  }}" rel='stylesheet' type="text/css">

    <script href="{{ asset('packages/core/main.js')  }}"></script>
    <script href="{{ asset('packages/daygrid/main.js')  }}"></script>
    <script href="{{ asset('packages/timegrid/main.js')  }}"></script>
    <script href="{{ asset('packages/bootstrap/main.js')  }}"></script>
    <script href="{{ asset('packages/core/locales/es.js')  }}"></script>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    </head>

                     

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-center">{{ __('SOLICITUD DE SERVICIOS CATASTRALES') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('solicitudes') }}">
                        @csrf

                        <div class="form-row">
                            <label for="" class="col-form-label text-md-right">{{ __('A quien corresponda Jefe de Departamento de Catastro') }}</label>
                        </div>

                        <div class="form-row">
                           <strong> <label for="" class="col-form-label text-md-right">{{ __('P  R  E  S  E  N  T  E') }}</label> </strong>
                        </div>

                        </br>

                        <div class="form-row">
                            <label for="" class="col-form-label text-md-right">{{ __('El suscrito C.') }}</label>

                            <div class="col-xs-3 col-sm-3 col-md-2">
                                <input id="nombre_ciudadano" type="text" class="form-control @error('nombre_ciudadano') is-invalid @enderror" placeholder="Nombre" name="nombre_ciudadano" value="{{ old('nombre_ciudadano') }}" required autocomplete="nombre_ciudadano" autofocus>
                                @error('nombre_ciudadano')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-4">
                                <input id="apellidos_c" type="text" class="form-control @error('apellidos_c') is-invalid @enderror" placeholder="Apellidos" name="apellidos_c" value="{{ old('apellidos_c') }}" required autocomplete="apellidos_c" autofocus>
                                @error('apellidos_c')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-row">
                                <label for="" class="col-form-label col-md-12  text-md-right">{{ __('por mi propio derecho, señalando como domicilio para oir y recibir') }}</label>
                            </div>
                        </div>

                        </br>

                        <div class="form-row">
                            <label for="" class="col-form-label text-md-right">{{ __('toda clase de notificaciones y documentos en el imnueble marcado con el numero       ') }}</label>
                            
                            <div class="col-xs-3 col-sm-3 col-md-2">
                                <input id="numero" type="text" data-toggle="tooltip" title="Si su domicilio cuenta con un Numero favor de ingresarlo, de lo contrario dejar en blanco" class="form-control @error('numero') is-invalid @enderror" placeholder="Numero" name="numero" value="{{ old('numero') }}" autofocus>
                                @error('numero')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-xs-3 col-sm-3 col-md-4">
                                <input id="calle" type="text" data-toggle="tooltip" title="Especificar una referencia de su domicilio" class="form-control @error('calle') is-invalid @enderror" placeholder="Calle" name="calle" value="{{ old('calle') }}" required autocomplete="calle" autofocus>
                                @error('calle')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        </br>

                        <div class="form-row">   
                                <div class=" my-1 mr-sm-2 col-xs-3 col-sm-2 col-md-4">
                                    <input id="colonia" type="text" data-toggle="tooltip" title="Especificar la localidad y sección a la que pertece" class="form-control @error('colonia') is-invalid @enderror" placeholder="Colonia" name="colonia" value="{{ old('colonia') }}" required autocomplete="colonia" autofocus>
                                    @error('colonia')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> 
                                <select class="custom-select my-1 mr-sm-2 col-xs-3 col-sm-2 col-md-4" name="id_localidad" id="id_localidad" required>
                                    <option value="">Seleccione su localidad</option>
                                    @foreach($localidades as $localidad)
                                        <option value="{{ $localidad ['id_localidad'] }}">{{ $localidad['nombre_localidad'] }}</option>
                                    @endforeach
                                </select>
                                <select class="custom-select my-1 mr-sm-2 col-xs-3 col-sm-2 col-md-3" name="id_municipio" id="id_municipio" required>
                                    <option value="">Seleccione su municipio</option>
                                    @foreach ($municipios as $municipio)
                                        <option value="{{ $municipio ['id_municipio'] }}">{{ $municipio['nombre_municipio'] }}</option>
                                    @endforeach
                                </select>
                        </div>
                        
                        </br>
                        </br>


                        <div class="form-row">
                            <label for="" class="col-form-label text-md-right">{{ __('Ante usted comparezco y expongo:') }}</label>
                        </div>

                        <div class="form-row">
                            <label for="" class="col-form-label text-md-right">{{ __('por medio del presente escrito y con fundamento en el Código financiero del Estado de México y Municipios vigente, solicito:') }}</label>
                        </div>

                        </br>
                        </br>

                        <div class="form-row text-center">
                            <div class="form-check form-check-inline col-md-3">
                                <input class="form-check-input" data-toggle="tooltip" title="Solo puede seleccionar un servicio" type="radio" name="inlineRadioOptions" id="dominio" value="600">
                                <label class="form-check-label" for="manzanero">Traslado de dominio</label>
                            </div>
                            <div class="form-check form-check-inline col-md-3">
                                <input class="form-check-input" data-toggle="tooltip" title="Solo puede seleccionar un servicio" type="radio" name="inlineRadioOptions" id="certificacion" value="800">
                                <label class="form-check-label" for="certificacion">Certificación de clave y valor catastral</label>
                            </div>
                            <div class="form-check form-check-inline col-md-3">
                                <input class="form-check-input" data-toggle="tooltip" title="Solo puede seleccionar un servicio" type="radio" name="inlineRadioOptions" id="manzanero" value="700">
                                <label class="form-check-label" for="manzanero">Certificación de plano manzanero</label>
                            </div>
                            <div class="form-check form-check-inline col-md-2">
                                <input class="form-check-input" data-toggle="tooltip" title="Solo puede seleccionar un servicio" type="radio" name="inlineRadioOptions" id="linderos" value="900">
                                <label class="form-check-label" for="linderos">Verificación de linderos</label>
                            </div>
                        </div>
                        </br>    
                        <div class="text-right">
                            <div class="form-check form-check-inline col-md-4">
                                <input class="form-check-input" data-toggle="tooltip" title="Solo puede seleccionar un servicio" type="radio" name="inlineRadioOptions" id="linderos" value="400">
                                <label class="form-check-label" for="linderos">Imagen satelital con coordenadas UTM</label>
                            </div>
                            <div class="form-check form-check-inline col-md-3">
                                <input class="form-check-input" data-toggle="tooltip" title="Solo puede seleccionar un servicio" type="radio" name="inlineRadioOptions" id="linderos" value="300">
                                <label class="form-check-label" for="linderos">Plano de localización</label>
                            </div>
                            <div class="form-check form-check-inline col-md-3">
                                <input class="form-check-input" data-toggle="tooltip" title="Solo puede seleccionar un servicio" type="radio" name="inlineRadioOptions" id="linderos" value="500">
                                <label class="form-check-label" for="linderos">Manifestación catastral</label>
                            </div>
                        </div>
                        
                        </br>
                        </br>
                        </br>
                    <script>
                        function() {
                            $("#expiracion").datepicker({
                                format: 'dd-mm-yy'
                            });
                        }
                    </script>

                        <div class="form-row text-center">
                            <label for="fecha" class="col-form-label text-md-right">{{ __('Dia') }}</label>
                            <div class="col-xs-3 col-sm-3 col-md-4">
                                <input id="datepicker" type="date" class="form-control @error('fecha') is-invalid @enderror" placeholder="Seleccione una fecha" name="fecha" value="{{ old('fecha') }}" required autocomplete="fecha" autofocus>
                                @error('fecha')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                            <label for="id_horario" class="col-form-label text-md-right">{{ __('Horario') }}</label> 
                                <select class="custom-select form-control col-xs-6 col-sm-6 col-md-4" name="id_horario" id="id_horario" required>
                                    <option value="">Seleccione un horario</option>
                                    
                                    @foreach ($horarios as $hora)
                                        <option value="{{ $hora ['id_horario']}}">{{ $hora ['hora']}}</option>
                                    @endforeach
                                    
                                </select>
                        </div>

                        </br>
                        </br>


                        <div class="form-row">
                            <label for="name" class="col-form-label text-md-right">{{ __('Del inmueble cuyo propietario o poseedor es:') }}</label>

                            <div class="col-xs-3 col-sm-3 col-md-3">
                                <input id="nombre_propietario" type="text" class="form-control @error('nombre_propietario') is-invalid @enderror" placeholder="Nombre" name="nombre_propietario" value="{{ old('nombre_propietario') }}" required autocomplete="nombre_propietario" autofocus>
                                @error('nombre_propietario')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                          
                            <div class="col-xs-3 col-sm-3 col-md-5">
                                <input id="apellidos_p" type="text" class="form-control @error('apellidos_p') is-invalid @enderror" placeholder="Apellidos" name="apellidos_p" value="{{ old('apellidos_p') }}" required autocomplete="apellidos_p" autofocus>
                                @error('apellidos_p')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        </br>

                        <div class="form-row">
                        <label for="name" class="col-form-label text-md-right">{{ __('Con clave catastral:') }}</label>
                            <div class="col-xs-3 col-sm-3 col-md-2">
                                <input id="clave_catastral" type="text" data-toggle="tooltip" title="Ingrese su clave catastral a 10 digitos, si no cuenta con una clave catastral dejar en blanco" class="form-control @error('clave_catastral') is-invalid @enderror" placeholder="000 00 000 00" name="clave_catastral" value="{{ old('clave_catastral') }}" autofocus>
                                @error('clave_catastral')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>   
                            <label for="name" class="col-form-label text-md-right">{{ __('hubicada en el numero:') }}</label>

                            <div class="col-xs-3 col-sm-3 col-md-2">
                                <input id="numerodos" type="text" data-toggle="tooltip" title="Si su domicilio cuenta con un Numero favor de ingresarlo, de lo contrario dejar en blanco" class="form-control @error('numerodos') is-invalid @enderror" placeholder="Numero" name="numerodos" value="{{ old('numerodos') }}" autofocus>
                                @error('numerodos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>    
                          
                            <div class="col-xs-3 col-sm-3 col-md-4">
                                <input id="calledos" type="text" data-toggle="tooltip" title="Especificar una referencia de su domicilio" class="form-control @error('calledos') is-invalid @enderror" placeholder="Calle" name="calledos" value="{{ old('calledos') }}" required autocomplete="calledos" autofocus>
                                @error('calledos')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        </br>

                        <div class="form-row">
                            <div class="my-1 mr-sm-2 col-xs-3 col-sm-2 col-md-4">
                                <input id="coloniados" type="text" data-toggle="tooltip" title="Especificar la localidad y sección a la que pertece" class="form-control @error('coloniados') is-invalid @enderror" placeholder="Colonia" name="coloniados" value="{{ old('coloniados') }}" required autocomplete="coloniados" autofocus>
                                @error('coloniados')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                                <select class="custom-select my-1 mr-sm-2 col-xs-3 col-sm-2 col-md-4" name="id_localidaddos" id="id_localidaddos" required>
                                    <option value="">Seleccione su localidad</option>
                                    @foreach($localidadesdos as $localidaddos)
                                        <option value="{{ $localidaddos ['id_localidaddos'] }}">{{ $localidaddos['nombre_localidaddos'] }}</option>
                                    @endforeach
                                </select>
                                <select class="custom-select my-1 mr-sm-2 col-xs-3 col-sm-2 col-md-3" name="id_municipiodos" id="id_municipiodos" required>
                                    <option value="">Seleccione su municipio</option>
                                    @foreach ($municipiosdos as $municipiodos)
                                        <option value="{{ $municipiodos ['id_municipiodos'] }}">{{ $municipiodos['nombre_municipiodos'] }}</option>
                                    @endforeach
                                </select>
                        </div>

                        </br>
                        
                          <div class="form-row text-right">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Enviar Cita') }}
                                    </button>
                                    
                                    <a class="btn btn-danger" href="{{ url('usuario') }}">Cancelar</a>
                                </div>  
                          </div>               
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
