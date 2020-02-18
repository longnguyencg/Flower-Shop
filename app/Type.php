<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public function color()
    {
        return $this->belongsTo('App\Color');
    }

    public function products()
    {
        return $this->belongsToMany('App\Product');
    }
}
