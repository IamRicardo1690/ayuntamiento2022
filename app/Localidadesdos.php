<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidadesdos extends Model
{
    //
    protected $fillable = [
        'id_localidaddos', 'nombre_localidaddos'
        ];

    public function domiciliosinms()
    {
        return $this->belongsTo(Domiciliosinms::class);
    }
}
