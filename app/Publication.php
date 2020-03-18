<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publication extends Model 
{

    protected $table = 'publications';
    public $timestamps = true;

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}