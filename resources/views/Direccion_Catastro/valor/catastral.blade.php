
@extends('layouts.apps')
    <head>
      <title>Catastro Amanalco  @yield('title')</title>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">
    </head>
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <h4>
                <div class="card-header" align="center">
                    {{ __('CERTIFICACIÓN DE CLAVE Y VALOR CATASTRAL') }}
                <h6>
                    {{ __('LISTA DE SOLICITANTES') }}
                </h6> 
            <div class="col-md-12">
                <div class="page-header">
                    <h5>
                            
                        {{ Form::open(['route' => 'valor', 'method' => 'GET', 'class' => 'form-inline pull-right']) }}
                            <div class="form-group">
                                 <label for="" class=" text-md-right">{{ __('Buscar') }}</label>
                            </div>
                            
                            <div class="form-group">
                                {{ Form::text('fecha', null, ['class' => 'form-control', 'placeholder' => 'aaaa-mm-dd']) }}
                            </div>
    
                            
                        {{ Form::close() }}
                    </h5>
                </div>
            </div>
                </div>
                </h4>   

                    <table class="table table-dark table-hover ">
                        <thead class="shead dark thead-dark">
                        <tr>
                            <th scope="col">Folio</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellidos</th>
                            <!--<th scope="col">Apellido Materno</th>-->
                            <th scope="col">Domicilio</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Hora</th>
                            <th scope="col">Solicitud</th>
                        </tr>
                        </thead>
                        <tbody id=grupos>
                             @foreach($datos as $fila)
                                <tr>
                                    <td>{{$fila->folio}}</td> 
                            
                                    <td>{{$fila->nombre_ciudadano}}</td>
                                    <td>{{$fila->apellidos_c}}</td>
                                    <td>{{$fila->nombre_localidad}}</td>
                                    <td>{{$fila->fecha}}</td>
                                    <td>{{$fila->hora}}</td>
                                    <td><a class="btn btn-warning Imprime" href="{{ url('/imprimircita/' . $fila->nombre_ciudadano) }}/{{$fila->id_ciudadano}}" id="{{$fila->nombre_ciudadano . $fila->id_ciudadano}}" >Imprimir</td>                       
                                </tr>
                            @endforeach 

                        </tbody>
                    </table>
                    {{ $datos->links()}} <!--esto es el enpaginado en la parte de abajo del crud -->


            </div>
        </div>
    </div>
</div>
@endsection
