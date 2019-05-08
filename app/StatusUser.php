<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class StatusUser extends Model
{
    protected $fillable = [
        'description'
    ];

    public function users()
    {
        return $this -> hasOne('App\User');
    }
}
