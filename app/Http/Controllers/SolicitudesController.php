<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Localidades;
use App\Municipios;
use App\Localidadesdos;
use App\Municipiosdos;
use App\Horarios;
use App\Citas;
use App\User;
use App\Ciudadanos;
use App\Domicilios;
use App\Domiciliosinms;
use App\Propietarios;
use App\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class SolicitudesController extends Controller
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
    public function index()
    {
        //return view('solicitudes.solicitud');
        
        $municipios     = Municipios::all();
        $horarios       = Horarios::all();
        $localidadesdos = Localidadesdos::all();
        $municipiosdos  = Municipiosdos::all();
        $localidades    = Localidades::all();   
        //$solicitudes = BD::table('localidades')->get();
        return view('Direccion_Catastro/solicitudes.solicitud', compact(['municipios','horarios','localidadesdos','municipiosdos','localidades']));
    }

    public function create(array $data)
    {
        //$localidades = Localidades::all();
        return view('Direccion_Catastro/solicitudes.solicitud');


    }
    public function store(Request $request)
    {
       
    
        //dd($request->all()); //muestra todos los datos enviados desde el formilario 
        
        Domicilios::create($request->all());
        $datos = DB::table('domicilios')->select('id_domicilio')->get()->last();
        DB::table('ciudadanos')->insert([
            'nombre_ciudadano' => $request->input('nombre_ciudadano'),
            'apellidos_c' => $request->input('apellidos_c'),
            //'apellido_mat' => $request->input('apellido_mat'),
            'id_domicilio' => $datos->id_domicilio,
        ]);
        //Domiciliosinms::create($request->all());
        DB::table('domiciliosinms')->insert([
            'numerodos' => $request->input('numerodos'),
            'calledos' => $request->input('calledos'),
            'coloniados' => $request->input('coloniados'),
            'id_localidaddos' => $request->input('id_localidaddos'),
            'id_municipiodos' => $request->input('id_municipiodos'),

        ]);
        
        $datos = DB::table('domiciliosinms')->select('id_domicilioinms')->get()->last();
        DB::table('propietarios')->insert([
            'nombre_propietario' => $request->input('nombre_propietario'),
            'apellidos_p' => $request->input('apellidos_p'),
            //'apellido_matp' => $request->input('apellido_matp'),
            'id_domicilioinm' => $datos->id_domicilioinms,
        ]);

        $datos = DB::table('ciudadanos')->select('id_ciudadano')->get()->last();
        $dato = DB::table('propietarios')->select('id_propietario')->get()->last();

       
            DB::table('citas')->insert([
                'fecha' => $request->input('fecha'),
                'clave_catastral' => $request->input('clave_catastral'),
                'id' => '1',
                'id_servicio' => $request->input('inlineRadioOptions'),
                'id_horario' => $request->input('id_horario'),
                'id_ciudadano' => $datos->id_ciudadano,
                'id_propietario' => $dato->id_propietario,
                ]);
            
        //Ciudadanos::create($request->all());
          
        return redirect('usuario')->with('Mensaje' , 'Cita registrada con exito'); 


    }

    public function show(Evento $evento)
    {
        /*esta consulta muestra todos los datos de la tabla eventos en la vista evento*/
        $evento = Evento::all();
        return response()->json($evento);
    }

    public function registerClient(Request $request){
        // Se crea el usuario con los datos del registro
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        // Le asignamos el rol de Cliente
        $user->assignRole('cliente');
    }

}
