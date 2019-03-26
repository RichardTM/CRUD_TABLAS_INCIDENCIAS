<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{

    /*
    RELACION UN SEXO TIENE MUCHOS PERFILES
    hasmany= tiene muchos perfiles
    */
    public function perfiles()
    {
        return $this->hasMany(Perfil::class); //en este caso no necesito escribir sexo_id, porque ya hay un campo asi
                                                //en la tabla perfiles y tiene el prametro de sexo_id
    }
}
