<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilios extends Model
{
    //
    protected $fillable = [
        'id_domicilio','numero','calle','colonia','id_localidad','id_municipio'
        ];

    public function id_domicilio($id_domicilio)
    {
        $datos = Domicilios::all();
    }
    public function localidades() //esta funcion hace referencia que un domicilio pertenece a una localidad 
    {
        # code...
        return $this->hasmany(Localidades::class);
    }
    public function municipios() //esta funcion hace referencia que un domicilio pertecene a un domicilio
    {
        return $this->hasmany(Municipios::class);
    }
}
