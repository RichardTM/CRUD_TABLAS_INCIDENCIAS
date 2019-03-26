<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entidad extends Model
{
    protected $table = 'entidades';

    /*
    RELACION DE UNA ENTIDAD A MUCHOS PERFILES
    perfiles= va en plural porque es una relacion con muchos perfiles
    */
    public function perfiles()
    {
        return $this->hasMany(Perfil::class);
    }

}
