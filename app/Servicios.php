<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    //
    protected $fillable = [
        'id_servicio', 'nombre_servicio'
        ];

    public function Citas()
    {
        return $this->belongsTo(Citas::class);
    }
}
