<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title'];
    
    public function formations()
    {
        return $this->hasMany('App\Formation');
    }
    public function articles()
    {
        return $this->hasMany('App\Article');
    }
}
