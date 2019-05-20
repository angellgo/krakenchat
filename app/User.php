<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'nombre',
        'apellidos',
        'verificado',
        'status_id',
        'genero_id'

    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function generos()
    {
        return $this -> belongsTo('App\Genero','genero_id');
    }

    public function status_users()
    {
        return $this -> belongsTo('App\StatusUser','status_id');
    }

    public function reportes()
    {
        return $this -> hasOne('App\Reporte');
    }

    public function chats()
    {
        return $this -> hasOne('App\Chat');
        
    }
    public function mensajes()
    {
        return $this -> hasOne('App\Mensaje');
        
    }
}
