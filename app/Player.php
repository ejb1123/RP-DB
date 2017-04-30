<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    public function characters()
    {
        return $this->$this->hasMany('App\Character');
    }
}
