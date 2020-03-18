<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipe extends Model 
{

    protected $table = 'equipes';
    public $timestamps = true;

    public function tournois()
    {
        return $this->belongsToMany('App\Tournoi');
    }

}