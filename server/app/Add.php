<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Add extends Model
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function couple()
    {
        return $this->belongsTo('App\Couple');
    }
}
