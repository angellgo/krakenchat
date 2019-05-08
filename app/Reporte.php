<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reporte extends Model
{
    protected $fillable = [
        'motivo',
        'descripcion',
        'no_usuario'
    ];

    public function users(){
        return $this -> belongsTo('App\User','no_usuario');
    }
}
