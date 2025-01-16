<?php

// $_POST['page'] = 'connexionUser';
$page = isset($_GET['page']) ? $_GET['page'] : 'accueilUser';

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
        include_once "../backend/controller/postsController.php";
        $posts = new PostsController;
        $posts->getPosts();
        // include_once "../backend/controller/usersController.php";
        // $user = new usersController;
        // $user->getUserByEmail();
        break;

    case 'loginUser':
        include_once "../backend/controller/usersController.php";
        $user = new usersController;
        $user->connexion();
        break;

    case 'signupUser':
        include_once "../backend/controller/usersController.php";
        $user = new usersController;
        $user->inscription();
        break;

        case 'accueilAdmin' :
            include_once "../backend/controller/postsController.php" ;
            $posts = new PostsController ;
            $posts->getPosts() ;
            break ;

    default :
    include './404.php';
}