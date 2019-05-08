<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $fillable = [
        'texto',
        'fecha',
        'hora',
        'recibido',
        'leido',
        'id_chat'
    ];

    public function chat()
    {
        return $this -> belongsTo('App\Chat','id_chat');
    }
}
