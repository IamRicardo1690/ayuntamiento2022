<?php

namespace App\Http\Controllers;

use App\Agendacatastros;
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

class AgendacatastrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $horarios       = Horarios::all();
        return view('agendacatastros.index', compact(['horarios']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        request()->validate(Evento::$rules);
        

        DB::table('eventos')->insert([
            'title' => $request->input('title'),
            'descripcion' => $request->input('descripcion'),
            'start' => $request->input('start'),
            'end' => $request->input('end'),            
            'id_horario' => $request->input('id_horario'),
            
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Agendacatastro  $agendacatastro
     * @return \Illuminate\Http\Response
     */
    public function show(Agendacatastro $agendacatastro)
    {
        //
        $evento = Evento::all();
        return response()->json($evento);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Agendacatastro  $agendacatastro
     * @return \Illuminate\Http\Response
     */
    public function edit(Agendacatastro $agendacatastro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Agendacatastro  $agendacatastro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agendacatastro $agendacatastro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Agendacatastro  $agendacatastro
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendacatastro $agendacatastro)
    {
        //
    }
}





