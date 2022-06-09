@extends('layouts.app')
    <head>
      <title>Servicios Amanalco tramites @yield('title')</title>
      <link rel="icon" href="{{ URL::asset('../img/amanalco_ico.ico') }}" type="image/x-icon"/>
      <link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/app.css')  }}">

    </head>
@section('content')

<?php $numerodias = cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y')); ?>
<!--codigo para mostrar el calendario en la vista evento.index -->
<script>
document.addEventListener('DOMContentLoaded', function() {


  let formulario = document.querySelector("form"); /*perimite guardar los datos ingresador en el modal*/

  var calendarEl = document.getElementById('agenda');

  // constrain to a discrete range  




  var calendar = new FullCalendar.Calendar(calendarEl, {

    

    aspectRatio: 2,
    Boolean, default: true, /*diseño para cualquier pantalla*/
    height: 500,
    contentHeight: 600,

    
    //weekends: false, /*oculta los dias sabados y domingo*/
    
    

    lang: 'es',
    initialView: 'dayGridMonth',
    locale:"es", /*locale:"es" pone el calendario en español*/
    headerToolbar: { 
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth, timeGridWeek,listWeek'
    },

    
    
    eventRender: function(calev, elt, view) {
      if (calev.end.getTime() < sometime())
        elt.addClass("greyclass");
    },

    /*empieza este codigo colorea los dias fines de semana*/
    defaultView: 'agendaWeek',
      allDaySlot: false,
      header: {
        left: 'prev,next today myCustomButton',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      businessHours: {
        start: '10:00', // hora final
        end: '18:00', // hora inicial
        dow: [ 1, 2, 3, 4, 5 ] // dias de semana, 0=Domingo
      },
    /*termina este codigo colorea los dias fines de semana*/

    /*muestra los datos de la base de datos en el calendario*/
    events: "evento/mostrar",

    dayRender: function(info){
        if (info.date > maxDate){
            $(info).addClass("disabled");
        }
    },

    /*dateClick:funcion permite que al hacer click en 
    algun dia del calendario se abra un modal*/
    dateClick:function(info){

      formulario.reset();    /*esta linea recoge la fecha selecciona en el calendario*/
      formulario.start.value=info.dateStr; /*esta linea recoge la fecha selecciona en el calendario*/
      formulario.end.value=info.dateStr;   /*esta linea recoge la fecha selecciona en el calendario*/
      
        var actual = new Date();
        
        if(info.date >= actual){
          
          $("#evento").modal("show");
          document.getElementById("dia").innerHTML= info.dateStr;
        }else{
          alert("Error: No se puede solicitar una cita en una fecha vencida");
        }

    },


  });


  calendar.render();
/* start permite recolentar la indormacion infresada en el modal*/
  document.getElementById("btnGuardar").addEventListener("click",function(){
    const datos = new FormData(formulario);
    console.log(datos);
    console.log(formulario.title.value); /*esta liena muestra los datos compturado en consolo*/

    axios.post("evento/agregar", datos).
    then(
      (respuesta) => {
        $("#evento").modal("hide");
      } 
    ).catch(
      error=>{
        if(error.response){
          console.log(error.response.data);

        }
      }  
    )

  });
/*termina permite recolentar la indormacion infresada en el modal*/

});
</script>

<style>
    .disabled .fc-day-content {
        background-color: #123959;
        color: #FFFFFF;
        cursor: default;
    }
</style>

<body>

      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                     
                        
                           
                              <div class="col-md-12">
                                 <div class="full">
                                    <div class="heading_main text_align_center margin-bottom_30">
                                      <center><h2><strong class="small theme_color">Catatro Municipal</strong><br>Dias Disponibles</h2></center> 
                                    </div>                                 
                                 </div>
                              </div>
                           
                        
                    
              </div>
          </div>
      </div>

    <br>
    <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-12">
              <div class="card">
                     <div class="section about_section layout_padding">
                        <div class="container">
                          <div class="row">
                            <div class='col-sm-7s'>
                                <div class="container" >
                                  <div id="agenda"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                     </div>
                     <br>
              </div>
          </div>
      </div>
    </div>

</body>



<!-- Button trigger modal -->
<!--<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#evento">
  Launch
</button>-->

<!-- Modal -->
<div class="modal fade" id="evento" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Citas para Catastro Municipal</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
            </div>
            <div class="modal-body">

                <form action="" method="POST">

                  {{ csrf_field() }}

                    <div class="form-group">
                      <label for="id">ID</label>
                      <input type="text" class="form-control" name="id" id="id" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="title">Citas</label>
                      <input type="text" class="form-control" name="title" id="title" aria-describedby="helpId" placeholder="escribe el titilo del evento">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="descripcion">Descripcion de la cita</label>
                      <textarea class="form-control" name="descripcion" id="descripcion" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                      <label for="start">start</label>
                      <input type="text" class="form-control" name="start" id="start" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-group">
                      <label for="end">end</label>
                      <input type="text" class="form-control" name="end" id="end" aria-describedby="helpId" placeholder="">
                      <small id="helpId" class="form-text text-muted">Help text</small>
                    </div>

                    <div class="form-row text-center">    
                      <label for="id_horario" class="col-form-label text-md-right">{{ __('Horario') }}</label> 
                          <select class="custom-select form-control col-xs-6 col-sm-6 col-md-4" name="id_horario" id="id_horario" required>
                              <option value="">Seleccione un horario</option>
                              
                              @foreach ($horarios as $hora)
                                  <option value="{{ $hora ['id_horario']}}">{{ $hora ['hora']}}</option>
                              @endforeach
                              
                          </select>
                  </div>


                </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="btnGuardar" class="btn btn-success">Guardar</button>
                <button type="button" id="btnModificar" class="btn btn-warning">Modificar</button>
                <button type="button" id="btnEliminar" class="btn btn-danger">Eliminar</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@endsection