<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    /* pROPIEDAD QUE SIRVE PARA EVIATR ERRORES DE ASIGNACION MASIVA. AQUI SE
     ESCOGE LOS CAMPOS QUE MOSTRARE UNICAMENTE AL USUARIO*/

    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
/*
    public function perfil ()
    {
        return $this->hasOne(Perfil::class, 'user_id');
    }
*/
     /*
    RELACION UN USER TIENE MUCHOS PERFILES
    hasmany= tiene muchos perfiles
    */
    public function perfiles()
    {
        return $this->hasMany(Perfil::class); //en este caso no necesito escribir sexo_id, porque ya hay un campo asi
                                                //en la tabla perfiles y tiene el prametro de sexo_id
    }

    /*
    RELACION UN USER MUCHAS INCIDENCIAS
    hasmany= tiene muchos perfiles
    */
    public function incidencias()
    {
        return $this->hasMany(Incidencia::class);

    }
}
