<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoIncidencia extends Model
{
     /*
    RELACION UN TIPOINCIDENCIA TIENE MUCHAS INCIDENCIAS
    hasmany= tiene muchos perfiles
    */
    public function incidencias()
    {
        return $this->hasMany(Incidencia::class); //en este caso no necesito escribir tipo_inccidencia_id, porque ya hay un campo asi
                                                //en la tabla incidencias y tiene el prametro de tipo_inccidencia_id
    }
}
