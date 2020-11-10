<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Total extends Model
{
    public function couple()
    {
        return $this->hasOne('App\Couple');
    }
}
