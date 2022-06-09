<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citas extends Model
{
    //
    protected $fillable = [
        'folio', 'fecha','clave_catastral','id','id_ciudadano','id_servicio','id_horario','id_propietario'
        ];
    
    public function usuario() //esta funcion hace referencia a que una cita puede tener un usuario
    {
        return $this->belongsTo(User::class);
    }
    public function ciudadadanos() //esta funcion hace referencia que una cita esta registrada por un ciudadano
    {
        return $this->belongsTo(Ciudadanos::class);
    }
    public function Servicios()
    {
        return $this->belongsTo(Servicios::class);
    }
    public function horarios()
    {
        return $this->belongsTo(Horarios::class);
    }
    public function propietarios()
    {
        return $this->belongsTo(Propietarios::class);
    }
    public function scopeFecha($query, $fecha)
    {
        if($fecha)
            return $query->where('fecha', 'LIKE', "%$fecha%");
    }
    public function scopeNombre_ciudadano($query, $nombre_ciudadano)
    {
        if($nombre_ciudadano)
            return $query->where('nombre_ciudadano', 'LIKE', "%$nombre_ciudadano%");
    }

}
