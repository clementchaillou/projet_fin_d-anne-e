<?php


require_once 'models/Category.php';
require_once 'models/Product.php';


$selectedProduct = false;

if(isset($_GET['product_id']) ){

    if(!ctype_digit($_GET['product_id'])) {
        header('Location:Home.php');
        exit;
    }

    $selectedProduct = getProduct($_GET['product_id']);
}

if($selectedProduct == false ){
    header('Location:Home.php');
    exit;
}

$categories = getCategories();

include 'views/product.php';

