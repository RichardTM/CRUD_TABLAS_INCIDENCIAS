<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cargo extends Model
{

    protected $table = 'cargos';

    /*
    RELACION UN CARGO TIENE MUCHOS PERFILES
    hasmany= tiene muchos perfiles
    */
    public function perfiles()
    {
        return $this->hasMany(Perfil::class); //en este caso no necesito escribir cargo_id, porque ya hay un campo asi
                                                //en la tabla perfiles y tiene el prametro de cargo_id
    }
}
