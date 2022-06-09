<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipiosdos extends Model
{
    //
    protected $fillable = [
        'id_municipiodos', 'nombre_municipiodos'
        ];
    public function getMunicpios()
    {
        $municipiosdos = Municipios::all();
    }
    public function domiciliosinms()
    {
        return $this->hasMany(Domiciliosinms::class);
    }
    
}
