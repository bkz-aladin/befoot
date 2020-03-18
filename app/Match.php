<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Match extends Model 
{

    protected $table = 'matchs';
    public $timestamps = true;

    public function tournoi()
    {
        return $this->belongsTo('App\Tournoi');
    }

}