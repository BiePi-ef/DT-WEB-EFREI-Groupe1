<?php

class Bdd{

    public static function connexion()
    {
        try
        {
            $bdd = new PDO("mysql:host=localhost;port=5432;dbname=challenge_web","postgres","Kawai2731");
            //echo "connexion BDD OK";
            return $bdd;
        }
        catch(Exception $e)
        {
            echo $e;
        }
    }
}



// test bdd
// $bdd = new Bdd; 
// $bdd->connexion();
// $bdd new Bdd::connexion();