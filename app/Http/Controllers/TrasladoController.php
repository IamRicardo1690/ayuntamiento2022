<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ciudadanos;
use App\Citas;
use App\Domicilios;
use App\Localidades;
use App\Horarios;
use App\Servicios;
use Illuminate\Support\Facades\DB;

class TrasladoController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $fecha = $request->get('fecha');
        $nombre_ciudadano = $request->get('nombre_ciudadano'); 

        $datos = DB::table('citas')
        ->join('ciudadanos','ciudadanos.id_ciudadano','=','citas.id_ciudadano')
        ->join('servicios','servicios.id_servicio','=','citas.id_servicio')
        ->join('horarios','horarios.id_horario','=' ,'citas.id_horario')
        ->join('domicilios','domicilios.id_domicilio','=','ciudadanos.id_domicilio')
        ->join('localidades','localidades.id_localidad','=','domicilios.id_localidad')
        ->Where('servicios.id_servicio','=', 600)
        ->where('citas.fecha', 'LIKE', "%$fecha%")
        ->orderBy('folio','DESC')
        //->orwhere('ciudadanos.nombre_ciudadano', 'LIKE', "%$nombre_ciudadano%")
        ->paginate(5);
        
        //$datos = DB::table('ciudadanos' , 'citas' , 'domicilios' , 'localidades' , 'horarios' , 'servicios')->get();
        return view('Direccion_Catastro/traslado.dominio' , compact('datos'));
    }
    public function show()
    {

    }


}
