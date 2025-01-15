<?php

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
        include_once "../siteUser/indexUser.php";
        // include_once "controller/produitsController.php";
        // $produit = new ProduitsController;
        // $produit->getLastProduct();
        break;

    default :
    include './404.php';
}