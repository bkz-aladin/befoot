<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tournoi extends Model 
{

    protected $table = 'tournoi';
    public $timestamps = true;

    public function equipes()
    {
        return $this->hasMany('App\Equipe');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function matchs()
    {
        return $this->hasMany('App\Match');
    }

}