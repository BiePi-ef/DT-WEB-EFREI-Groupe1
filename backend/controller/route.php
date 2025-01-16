<?php

$_POST['page'] = 'connexionUser';
$page = isset($_POST['page']) ? $_POST['page'] : 'accueilUser';

// pages :
// - 
// - 
// - 
// - 

switch($page)
{
    case 'test':
        include_once "../siteUser/test.php";
        break;

    case 'accueilUser':
        // include_once "controller/usersController.php";
        // $user = new usersController;
        // $user->();
        break;

    case 'connexionUser':
        include_once "../backend/controller/usersController.php";
        $user = new usersController;
        $user->connexion();
        break;

    default :
    include './404.php';
}