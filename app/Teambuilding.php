<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teambuilding extends Model
{
    protected $fillable = ['societe', 'name', 'email', 'phone_number', 'rappel', 'user_comment', 'created_at', 'updated_at'];
}
