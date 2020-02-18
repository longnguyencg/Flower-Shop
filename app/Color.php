<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    public function types()
    {
        return $this->hasMany('App\Type');
    }
}
