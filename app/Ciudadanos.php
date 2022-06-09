<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Ciudadanos extends Model
{
    //
    protected $fillable = [
        'id_ciudadano','nombre_ciudadano','apellido_pat','apellido_mat','id_domicilio'
        ];
    public function Domicilios(Request $id_ciudadano) //esta funcion hace referencia a que un ciudadano tiene un domicilio
    {
        return $this->hasmany(Domicilios::class);
    }
    public function citas()
    {
        return $this->belongsTo(Citas::class);
    }
    public function Servicios()
    {
        return $this->belongsTo(Servicios::class);
    }
    public function Localidades()
    {
        return $this->belongsTo(Localidades::class);
    }
    public function Municipios()
    {
        return $this->belongsTo(Municipios::class);
    }
    public function Propietarios()
    {
        return $this->belongsTo(Propietarios::class);
    }
    public function Domiciliosinms()
    {
        return $this->belongsTo(Domiciliosinms::class);
    }
    public function Localidadesdos()
    {
        return $this->belongsTo(Localidadesdos::class);
    }
    public function Municipiosdos()
    {
        return $this->belongsTo(Municipiosdos::class);
    }

    

}
