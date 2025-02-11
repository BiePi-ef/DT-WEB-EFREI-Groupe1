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

    public function inscriptionAdmin($admin_name, $email, $mdp)
    {
        // prepare et execute permettent d'empecher des injections de code !
        $user = $this->bdd->prepare("INSERT INTO admins(admin_name, email, mdp) VALUES (?,?,?)");
        return $user->execute([$admin_name, $email, $mdp]);
    }

    public function getAdminByEmail($email)
    {
        return $this->bdd->query("SELECT * FROM admins WHERE email='$email'")->fetch(PDO::FETCH_ASSOC);
    }
    public function getalluser_admin()
    {
        return $this->bdd->query("SELECT user_name,date_create FROM users")->fetchAll(PDO::FETCH_ASSOC);
    }
    public function deleteuserbyId($name_user) 
    {
        $stmt = $this->bdd->prepare("DELETE * from users where user_name = name_user") ;
        $stmt->execute(["name_user => $name_user"]) ; 
        

    }
}