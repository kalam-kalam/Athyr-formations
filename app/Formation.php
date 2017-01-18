<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    protected $fillable = ['titre', 'category_id', 'présentation', 'programme', 'formateur','objectifs', 'price', 
        'financement', 'pré_requis', 'moyens_techniques', 'effectif_max','statut', 'durée',
        'created_at','session', 'pdf', 'abstract', 'session_suivi'];
   
    public function categorie()
    {
        return $this->belongsTo('App\Category');
    }
    
    public function tags()
    {
        return $this->belongsToMany('App\Tag');
    }

    public function members(){
        return $this->belongsToMany('App\Member');
    }

    public function sessions()
    {
        return $this->hasMany('App\Session');
    }
}
