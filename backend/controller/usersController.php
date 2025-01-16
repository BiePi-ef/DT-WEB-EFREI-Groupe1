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
        include './signup.php';
    }

    public function inscription()
    {
        if (isset($_POST['email'])) {
            
            // Récupération des données
            $user_name = trim($_POST['username']);
            $email = trim($_POST['email']);
            $mdp = trim($_POST['password']);
            
            // Validation des données
            if (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $user_name)) {
                echo ("Nom d'utilisateur invalide.");
            }
            
            if (!preg_match("/^[a-zA-Z0-9._%+-]{1,50}@[a-zA-Z0-9.-]{1,20}\.[a-zA-Z]{1,3}$/", $email)) {
                die("Email invalide.");
            }
            
            if (strlen($mdp) < 12) {
                die("Le mot de passe doit contenir au moins 12 caractères.");
            }
            
            // Hachage du mot de passe
            $hashedMdp = password_hash($mdp, PASSWORD_DEFAULT);
            
            try {
                if($this->model->inscription($user_name, $email, $hashedMdp))
                {
                    header("Location: indexUser.php");
                    echo "Inscription réussie ! Vous pouvez maintenant vous connecter.";
                }
                else
                {
                    echo "Erreur d'inscription";
                    $this->getFormInscription();
                }
            } catch (PDOException $e) {
                $this->getFormInscription();
                die("Erreur lors de l'inscription : " . $e->getMessage());
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
        include './login.php';
    }

    public function connexion()
    {
        if (isset($_POST['email'])) 
        {

            $email = $_POST['email'];
            $user = $this->model->getUserByEmail($email);
            
            if ($user) {
                $mdp = password_verify($_POST['mdp'], $user['mdp']);
                // check if mdp matches and proceeds
                if ($mdp) {
                    $_SESSION['user'] = $user;
                    header("Location: indexUser.php");
                    echo "Connexion réussit !";
                }
                echo "Email ou mot de passe incorrect.";
                $this->getFormConnexion();
            } else {
                echo "Email ou mot de passe incorrect.";
                $this->getFormConnexion();
            }

        } else {
            // echo 'failed!';
            $this->getFormConnexion();
        }
    }

    public function deconnexion()
    {
        echo $_SERVER['REQUEST_URI'];
        session_destroy();
        header('Location: indexAdmin.php');
    }

    public function getUserByEmail($email)
    {
        return $this->model->getUserByEmail($email);
    }


    public function connexionAdmin()
    {
        if (isset($_POST['email'])) 
        {
            $email = $_POST['email'];
            $admin = $this->model->getAdminByEmail($email);
            
            if ($admin) {
                $mdp = password_verify($_POST['mdp'], $admin['mdp']);
                // check if mdp matches and proceeds
                if ($mdp) {
                    $_SESSION['admin'] = $admin;
                    header("Location: indexAdmin.php");
                    echo "Connexion réussie !";
                }
                echo "Email ou mot de passe incorrect.";
                $this->getFormConnexion();
            } else {
                echo "Email ou mot de passe incorrect.";
                $this->getFormConnexion();
            }

        } else {
            // echo 'failed!';
            $this->getFormConnexion();
        }
    }

    public function inscriptionAdmin()
    {
        if (isset($_POST['email'])) {
            
            // Récupération des données
            $admin_name = trim($_POST['username']);
            $email = trim($_POST['email']);
            $mdp = trim($_POST['password']);
            
            // Validation des données
            if (!preg_match("/^[a-zA-Z0-9_]{3,20}$/", $admin_name)) {
                echo ("Nom d'utilisateur invalide.");
            }
            
            if (!preg_match("/^[a-zA-Z0-9._%+-]{1,50}@[a-zA-Z0-9.-]{1,20}\.[a-zA-Z]{1,3}$/", $email)) {
                die("Email invalide.");
            }
            
            if (strlen($mdp) < 12) {
                die("Le mot de passe doit contenir au moins 12 caractères.");
            }
            
            // Hachage du mot de passe
            $hashedMdp = password_hash($mdp, PASSWORD_DEFAULT);
            
            try {
                if($this->model->inscriptionAdmin($admin_name, $email, $hashedMdp))
                {
                    header("Location: indexAdmin.php");
                    echo "Inscription réussie ! Vous pouvez maintenant vous connecter.";
                }
                else
                {
                    echo "Erreur d'inscription";
                    $this->getFormInscription();
                }
            } catch (PDOException $e) {
                $this->getFormInscription();
                die("Erreur lors de l'inscription : " . $e->getMessage());
            }

        }
        else
        {
            $this->getFormInscription();
        }
    }
}