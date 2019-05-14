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
        'chat_id'
    ];

    public function chats()
    {
        return $this -> belongsTo('App\Chat','chat_id');
    }
}
