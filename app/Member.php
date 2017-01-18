<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['title', 'lastname', 'firstname', 'birthdate', 'formation_id', 'session_id', 'address', 'zip-code', 'city','email', 'phone_number', 'situation', 'user_comment', 'status', 'funding_option', 'inscription', 'session_start','session_end', 'payment', 'comment', 'newsletter'];

    public function formations()
    {
        return $this->belongsToMany('App\Formation');

    }

    public function sessions()
    {
        return $this->belongsToMany('App\Session');

    }
    
}
