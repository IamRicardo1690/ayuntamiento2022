



<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        
        

        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        h3{
        text-align: center;
        }
        .contenido{
        font-size: 20px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
        .folio p{
            margin-left: 75%;
            margin-top: -1%;
        }
        .folio hr{
            margin-left: 81%;
            margin-top: -1.5%;
            width: 15%;
        }
        hr {
        background-color: red;
        margin-left: 12%;
        margin-top: -1.5%;
        width: 42%;
        }
        .derecho p{
        margin-left: 56%;
        margin-top: -3%;
        }
        .notificaciones p{
            margin-left: 0;
            margin-top: -0.5%;
        }
        .notificaciones hr{
            margin-left: 87%;
            margin-top: -2.5%;
            width: 11%;
        }
        .calle p{
            margin-left: 25;
            margin-top: 2%;
        }
        .calle hr{
            margin-left: 18.5%;
            margin-top: -2.5%;
            width: 28%;
        }
        .colonia p{
            margin-left: 50%;
            margin-top: -2.5%;
        }
        .colonia hr{
            margin-left: 64%;
            margin-top: -2.5%;
            width: 31%;
        }
        .localidad p{
            margin-left: 50%;
            margin-top: 2.5%;
        }
        .localidad hr{
            margin-left: 60%;
            margin-top: -3%;
            width: 35%;
        }
        .municipio p{
            margin-left: 25;
            margin-top: -3%;
        }
        .municipio hr{
            margin-left: 15%;
            margin-top: -3%;
            width: 30%;
        }
        .comparezco{
            margin-left: 0;
        }
        .pormedio{
            margin-left: 0; 
        }
        .vigente{
            margin-left: 0;
            margin-top: -2.5%; 
        }
        .vigente hr{
            margin-left: 15%;
            margin-top: -4%;
            width: 50%; 
        }
                }
        .propietario{
            margin-left: 0;
            margin-top: 3%; 
        }
        .propietario hr{
            margin-left: 41%;
            margin-top: -4%;
            width: 57%; 
        }
        .ubicado{
            margin-left: 0%;
            margin-top: -1.5%; 
        }
        .ubicado hr{
            margin-left: 21%;
            margin-top: -4.5%;
            width: 12%; 
        }
        .calledos{
            margin-left: 35%;
            margin-top: -4%; 
        }
        .calledos hr{
            margin-left: 8.5%;
            margin-top: -4.5%; 
            width: 35%;
        }
        .coloniados{
            margin-left: 66%;
            margin-top: -4%; 
        }
        .coloniados hr{
            margin-left: 24%;
            margin-top: -5%; 
            width: 72%;
        }
        .localidaddos{
            margin-left: 0%;
            margin-top: -2%; 
        }
        .localidaddos hr{
            margin-left: 10%;
            margin-top: -4.5%; 
            width: 88.5%;
        }
        .municipiodos{
            margin-left: 0%;
            margin-top: -2%; 
        }
        .municipiodos hr{
            margin-left: 10%;
            margin-top: -6%; 
            width: 20%;
        }
        .ate{
            text-align: center;
            margin-top: 4s%; 
            
        }
        .aten{
            margin-left: 20%;
            margin-top: 5%; 
            width: 90%;
        }
        .fechas{
            margin-left: 40%;
            margin-top: 5%; 
            width: 90%;
        }

        header img {
                
                position: fixed;
                top: -40px;
                left: 0px;
                right: 0px;
                width: 100%;
                height: 100%;

            }

            footer img {
                position: fixed;
                bottom: -860px;
                left: 0px;
                right: 0px;
                width: 100%;
                height: 100%;
            }
    </style>
    </head>
    <body>
    
        <h1>MUNICIPIO DE AMANALCO</h1>
        <br>    
        <h3>Solicitud de servicios catastrales</h3>    
                <div class="container">
                    <script>//codigo para la fecha
                                var meses = new Array ("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
                                var diasSemana = new Array("Domingo","Lunes","Martes","Miércoles","Jueves","Viernes","Sábado");
                                var f=new Date();
                                document.write(diasSemana[f.getDay()] + ", " + f.getDate() + " de " + meses[f.getMonth()] + " de " + f.getFullYear());
                    </script>
                </div>

                <header>
                    <img src="img/headerdos.png"/>
                </header>

                <footer>
                    <img src="img/footer.png"/>
                </footer>

    
    @foreach ($datos as $fila)
        <div class="folio">
            <p>Folio: {{$fila->id_ciudadano}}</p>
            <hr>
        </div>  
        <p>A quien corresponda Jefe de Departamento de Catastro</p>
        <br>
        <br>
        <strong>P R E S E N T E:</strong>
        <br>
        <p>El suscrito C.  {{$fila->nombre_ciudadano}} {{$fila->apellidos_c}}</p>                   
            <hr>    
        <div class="derecho"> 
            <p>por mi propio derecho, señalando como domilio</p>
        </div>      
        <div class="notificaciones"> 
            <p>paraoír y recibir toda clase de notificaciones y documentos el inmueble marcado con el número {{$fila->numero}}</p>
            <hr>
        </div>
        <div class="calle"> 
            <p>1ra Referencia: {{$fila->calle}}</p>
            <hr>
        </div>
        <div class="colonia"> 
            <p>2da Referencia: {{$fila->colonia}}</p>
            <hr>
        </div>
        <div class="localidad"> 
            <p>Localidad: {{$fila->nombre_localidad}}</p>
            <hr>
        </div>
        <div class="municipio"> 
            <p>Municipio: {{$fila->nombre_municipio}}</p>
            <hr>
        </div> 
        <br>
        <br>
        <div class="comparezco"> 
            <p>Ante usted comparezco y expongo:</p>
        </div>
        <div class="pormedio"> 
            <p>Por medio del presente escrito y con fundamento en el Código financiero del Estado de México y Municipios</p>
        </div>
        <div class="vigente"> 
            <p>vigente, solicito:  {{$fila->nombre_servicio}}</p>
            <hr>
        </div>

        <div class="propietario"> 
            <p>Del inmueble cuyo propietario o poseedor es: {{$fila->nombre_propietario}} {{$fila->apellidos_p}}</p>
            <hr>
        </div>
        <div class="ubicado"> 
            <p>Ubicado en el número: {{$fila->numerodos}}</p>
            <hr>
        </div>
        <div class="calledos"> 
            <p>Calle: {{$fila->calledos}}</p><hr>
        </div>
        <div class="coloniados"> 
            <p>Colonia: {{$fila->coloniados}}</p><hr>
        </div>
        <div class="localidaddos"> 
            <p>Localidad:  {{$fila->nombre_localidaddos}}</p><hr>
        </div>
        <div class="municipiodos"> 
            <p>Municipio:  {{$fila->nombre_municipiodos}}</p><hr>
        </div>
        <div class="ate"> 
            <strong>A T E N T A M E N T E</strong>
        </div>
        <div class="aten"> 
            <hr>
        </div>
    @endforeach
           
        <div class="fechas">
            <p>Amanalco de Becerra Estado de Mexico, {{$ldate}}
             
                    
           </p>   
        </div>
 
    </body>
</html>
