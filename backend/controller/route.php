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
        $user = new UsersController;
        $user->connexion();
        break;

    case 'signupUser':
        include_once "../backend/controller/usersController.php";
        $user = new UsersController;
        $user->inscription();
        break;

    case 'createPost':
        include_once "../backend/controller/postsController.php";
        $user = new PostsController;
        $user->createPost();
        break;

    case 'accueilAdmin' :
        include_once "../backend/controller/postsController.php" ;
        $posts = new PostsController ;
        $posts->getPosts() ;
        
        break ;

    case 'loginAdmin':
        include_once "../backend/controller/usersController.php";
        $user = new usersController;
        $user->connexionAdmin();
        break;
    
    case 'signupAdmin':
        include_once "../backend/controller/usersController.php";
        $user = new usersController;
        $user->inscriptionAdmin();
        break;

    case 'logout':
        include_once "../backend/controller/usersController.php";
        $user = new UsersController;
        $user->deconnexion();
        break;

    case 'logoutuser':
        include_once "../backend/controller/usersController.php";
        $user = new UsersController;
        $user->deconnexionUser();
        break;

    case 'yourPosts':
    include_once "../backend/controller/postsController.php";
    $postsController = new PostsController;
    $postsController->getUserPosts();
    break;

    case 'pageadmin' :
        include_once "../backend/controller/usersController.php";
        $user = new UsersController ;
        $user->getallusers_admin() ;
        break ;
            
    default :
    include './404.php';
}