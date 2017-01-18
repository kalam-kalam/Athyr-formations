<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Session extends Model
{
    protected $fillable = ['formation_id', 'session_start', 'session_end', 'place'];

    

    public function formations()
    {
        return $this->belongsTo('App\Formation');
    }

    public function members()
    {
        return $this->belongsToMany('App\Member');

    }


}
