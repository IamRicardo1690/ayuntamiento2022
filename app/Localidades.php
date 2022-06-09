<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Localidades extends Model 
{
    //
    protected $fillable = [
        'id_localidad', 'nombre_localidad'
        ];
    
    public function domicilios()
    {
        return $this->belongsTo(Domicilios::class);
    }
    
}
