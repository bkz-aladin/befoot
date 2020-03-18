<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    
    protected $fillable = [
        'nom', 'prenom', 'sexe',  'pseudo', 'email', 'password',
    ];
    
    public $timestamps = true;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tournois()
    {
        return $this->hasMany('App\Tournoi');
    }

    public function publications()
    {
        return $this->hasMany('App\Publication');
    }

    public function equipe()
    {
        return $this->hasOne('App\Equipe');
    }
}
