<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipios extends Model
{
    //
    protected $fillable = [
        'id_municipio', 'nombre_municipio'
        ];
    
    public function domicilios()
    {
        return $this->hasMany(Domicilios::class);
    }
}
