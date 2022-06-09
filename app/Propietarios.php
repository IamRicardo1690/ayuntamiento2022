<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Propietarios extends Model
{
    //
    protected $fillable = [
       'nombre_propietario','apellido_patp','apellido_matp','id_domicilioinm'
        ];

    public function domiiciliosinm() //esta funcion hace referncia a que un propietario tienen in dommicilioinm
    {
        return $this->hasmany(Domiciliosinm::class);
    }
}
