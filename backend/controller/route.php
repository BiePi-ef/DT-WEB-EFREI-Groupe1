<?php

$page = isset($_POST['page']) ? $_POST['page'] : 'accueilUser';
// $page = '';

// pages :
// - 
// - 
// - 
// - 

switch($page)
{
    case 'accueilUser':
        // include_once "controller/produitsController.php";
        // $produit = new ProduitsController;
        // $produit->getLastProduct();
        break;

    default :
    include './404.php';
}