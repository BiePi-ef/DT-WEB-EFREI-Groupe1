<?php

class Bdd{

    public static function connexion()
    {
        try
        {
            // $bdd = new PDO("pgsql:host=localhost;port=5432;dbname=challenge_web","postgres","123");
            $bdd = new PDO("pgsql:host=localhost;port=5432;dbname=challenge_web","postgres","Kawai2731!");
            //$bdd = new PDO("pgsql:host=localhost;port=5432;dbname=challenge-web","postgres","Postgrey");
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