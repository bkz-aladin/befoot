<?php

namespace App\UserRepo;

use App\User;

class UserRepo{

    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    private function save(User $user, Array $inputs){
        $user->nom = $inputs['nom'];
        $user->prenom = $inputs['prenom'];
        $user->pseudo = $inputs['pseudo'];
        $user->email = $inputs['email'];
        $user->sexe = $inputs['sexe'];
        $user->tel = $inputs['tel'];
        $user->avatar = $inputs['avatar'];
        $user->password = $inputs['password'];
        $user->promoteur = isset($inputs['promoteur']);
        $user->president = isset($inputs['nom']);
    }
}