<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Agendacatastros extends Model
{
    //
    


    static $rules=[
        'folio'=>'required',
        'fecha'=>'required',
        'clave_catastral'=>'required',
        'id_ciudadano'=>'required',
        'id_servicio'=>'required',
        'id_horario'=>'required',
        'id_propietario'=>'required',
        ''
    ];

    protected $fillable=['folio',
    'fecha',
    'clave_catastral',
    'id_ciudadano',
    'id_servicio',
    'id_horario',
    'id_propietario'];


}
