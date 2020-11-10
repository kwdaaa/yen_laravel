<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Couple extends Model
{
    public function total()
    {
        return $this->hasOne('App\Total');
    }

    public function add()
    {
        return $this->hasMany('App\Add');
    }
}
