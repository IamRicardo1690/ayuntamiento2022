<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Ciudadanos;
use App\Domicilios;
use App\Domiciliosinms;
use App\Localidades;
use App\Localidadesdos;
use App\Municipios;
use App\Municipiosdos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;
use App\Planos;
use App\Propietarios;
use App\Servicios;
use Carbon\Carbon;
use App\Traits\DatesTranslator;

class ImprimircitaController extends Controller
{
    //
    public function imprimircita(Request $request , $nombre_ciudadano, $id_ciudadano){
        
      //ESTA CONSULTA ME DEVUELVE LOS DATOS QUE SE IMPRIMEN EN EL PDF
        $datos = DB::table('ciudadanos')
        ->join('citas','citas.id_ciudadano','=','ciudadanos.id_ciudadano')
        ->join('servicios','servicios.id_servicio','=','citas.id_servicio')
        ->join('domicilios','domicilios.id_domicilio','=','ciudadanos.id_domicilio')
        ->join('localidades','localidades.id_localidad','=','domicilios.id_localidad')
        ->join('municipios','municipios.id_municipio','=','domicilios.id_municipio')
        ->join('propietarios','propietarios.id_propietario','=','citas.id_propietario')
        ->join('domiciliosinms','domiciliosinms.id_domicilioinms','=','propietarios.id_domicilioinm')
        ->join('localidadesdos','localidadesdos.id_localidaddos','=','domiciliosinms.id_localidaddos')
        ->join('municipiosdos','municipiosdos.id_municipiodos','=','domiciliosinms.id_municipiodos')
        ->where('ciudadanos.nombre_ciudadano', '=', $nombre_ciudadano)
        ->Where('ciudadanos.id_ciudadano','=',$id_ciudadano)
        ->get();
        //$datos = Ciudadanos::findOrFail($id_ciudadano);
        //dd($datos);

        //$fecha = Carbon::now();
        //$fecha = Carbon::now()->toDateTimeString();
        $ldate = date('d m yy');
        
        $pdf = \PDF::loadView('Direccion_Catastro/pdf.imprimircita' , compact('datos','ldate'));
        
        //return $pdf->download('imprimir.pdf');
        return $pdf->stream('imprimir.pdf' , compact('datos'));
    } 

}
