<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    protected $fillable = [
        'form'
    ];
    public function products()
    {
        return $this->hasMany('App\Product');
    }
}
