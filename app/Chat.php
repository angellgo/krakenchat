<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chat extends Model
{
    protected $fillable = [
        'id_remitente',
        'destinatario',
        'fecha',
        'hora'
    ];

    public function users()
    {
        return $this -> belongsTo('App\User','id_remitente');
    }

    public function mensajes()
    {
        return $this -> hasOne('App\Mensaje');
    }
}
