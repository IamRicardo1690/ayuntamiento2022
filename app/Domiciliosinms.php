<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domiciliosinms extends Model
{
    //
    protected $fillable = [
        'id_domicilioinms','numerodos','calledos','coloniados','id_localidaddos','id_municipiodos'
        ];
    
        public function id_domicilioinms($id_domicilioinms)
        {
            $datos = Domiciliosinms::all();
        }
        public function localidadesdos() //esta funcion hace referencia que un domicilio pertenece a una localidad 
        {
            # code...
            return $this->hasmany(Localidadesdos::class);
        }
        public function municipiosdos() //esta funcion hace referencia que un domicilio pertecene a un domicilio
        {
            return $this->hasmany(Municipiosdos::class);
        } 
}
