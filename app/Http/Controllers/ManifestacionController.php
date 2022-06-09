<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManifestacionController extends Controller
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
        ->Where('servicios.id_servicio','=', 500)
        ->where('citas.fecha', 'LIKE', "%$fecha%")
        ->orderBy('folio','DESC')
        //->orwhere('ciudadanos.nombre_ciudadano', 'LIKE', "%$nombre_ciudadano%")
        ->paginate(5);
        return view('Direccion_Catastro/manifestacion.man_cat' , compact('datos'));
    }
}
