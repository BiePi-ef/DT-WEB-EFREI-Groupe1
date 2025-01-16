<?php

include '../backend/bdd/bdd.php';

class UsersModel
{
    private $bdd;

    public function __construct()
    {
        $this->bdd = Bdd::connexion();
    }

    public function inscription($user_name, $email, $mdp)
    {
        // prepare et execute permettent d'empecher des injections de code !
        $user = $this->bdd->prepare("INSERT INTO users(user_name, email, mdp) VALUES (?,?,?)");
        return $user->execute([$user_name, $email, $mdp]);
    }

    public function getUserByEmail($email)
    {
        return $this->bdd->query("SELECT * FROM users WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
    }
}