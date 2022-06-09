<?php

namespace App\Http\Controllers;

use App\Citas;
use App\Ciudadanos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocalizacionController extends Controller
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
        ->Where('servicios.id_servicio','=', 300)
        ->where('citas.fecha', 'LIKE', "%$fecha%")
        ->orderBy('folio','DESC')
        //->orwhere('ciudadanos.nombre_ciudadano', 'LIKE', "%$nombre_ciudadano%")
        ->paginate(5);
       


/*
        $datos = DB::select('select * from ciudadanos cu, citas ci, domicilios d, localidades l, horarios h, servicios s where 
        ci.id_ciudadano=cu.id_ciudadano AND
        ci.id_horario=h.id_horario AND
        ci.id_servicio=s.id_servicio AND
        cu.id_domicilio=d.id_domicilio AND
        d.id_localidad=l.id_localidad AND
        s.id_servicio = 300');
*/
        
        return view('Direccion_Catastro/localizacion.local' , compact('datos'));
    }

}





