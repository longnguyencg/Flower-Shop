<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function size()
    {
        return $this->belongsTo('App\Size');
    }

    public function form()
    {
        return $this->belongsTo('App\Form');
    }

    public function reviews()
    {
        return $this->hasMany('App\Review');
    }

    public function types()
    {
        return $this->belongsToMany('App\Type');
    }

    public function themes()
    {
        return $this->belongsToMany('App\Theme');
    }

    public function users()
    {
        return $this->belongsToMany('App\User');
    }
}
