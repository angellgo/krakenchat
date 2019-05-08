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

    public function genero()
    {
        return $this -> belongsTo('App\Genero','genero_id');
    }

    public function status_user()
    {
        return $this -> belongsTo('App\StatusUser','status_id');
    }

    public function reporte()
    {
        return $this -> hasOne('App\Reporte');
    }

    public function chat()
    {
        return $this -> hasOne('App\Chat');
        
    }
}
