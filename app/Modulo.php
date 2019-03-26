<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modulo extends Model
{


    /*
    RELACION UN MODULO TIENE MUCHAS INCIDENCIAS
    hasmany= tiene muchos perfiles
    */
    public function incidencias()
    {
        return $this->hasMany(Incidencia::class); //en este caso no necesito escribir modulo_id, porque ya hay un campo asi
                                                //en la tabla incidencias y tiene el prametro de modulo_id
    }
}
