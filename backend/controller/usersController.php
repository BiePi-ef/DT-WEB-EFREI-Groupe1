<?php

include_once '../backend/model/usersModel.php';

class UsersController
{
    private $model;

    public function __construct()
    {
        $this->model = new UsersModel; 
    }

    /**
     * Insciption
     */
    public function getFormInscription()
    {
        include 'view/inscription.php';
    }

    public function inscription()
    {
        if(isset($_POST['email']))
        {
            $user_name = $_POST['user_name'];
            $email = $_POST['email'];

            // hashage du mdp
            $mdp = password_hash($_POST['mdp'], PASSWORD_DEFAULT);

            if($this->model->inscription($user_name, $email, $mdp))
            {
                echo "inscription OK";
            }
            else
            {
                echo "Erreur d'inscription";
                $this->getFormInscription();
            }
        }
        else
        {
            $this->getFormInscription();
        }
    }

    /**
     * connexion
     */

    public function getFormConnexion()
    {
        // test
        include '../siteUser/test.php'; 
        // include '../siteUser/connexion.php';
    }

    public function connexion()
    {
        include '../siteUser/test.php'; 

        if (isset($_POST['email'])) 
        {
            echo 'entered isset postmail </br>';

            $email = $_POST['email'];
            $user = $this->model->getUserByEmail($email);

            // check if mdp matches and proceeds
            $mdp = password_verify($_POST['mdp'], $user['mdp']);
            if ($mdp) {
                $_SESSION['user'] = $user;
                // header("Location: index.php");
                echo "Connexion OK";
            } else {
                echo "Erreur de connexion";
                $this->getFormConnexion();
            }
        } else {
            // echo 'failed!';
            
            $this->getFormConnexion();
        }
    }

    public function getUserByEmail($email)
    {
        return $this->model->getUserByEmail($email);
    }
}
