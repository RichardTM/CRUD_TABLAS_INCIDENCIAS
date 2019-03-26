<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perfil extends Model
{
    protected $table = 'perfiles';


    /*
    RELACION UN PERFIL PERTENECE A UN SEXO
    */
    public function sexo()
    {
        return $this->belongsTo(Sexo::class);
    }


    /*
    RELACION UN PERFIL PERTENECE A UNA ENTIDAD
    */
    public function entidad()
    {
        return $this->belongsTo(Entidad::class);
    }

    /*
    RELACION UN PERFIL PERTENECE A UN CARGO
    */
    public function cargo()
    {
        return $this->belongsTo(Cargo::class);
    }

    public function name()
    {
        return $this->belongsTo(User::class);
    }
}
