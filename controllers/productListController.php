<?php


require_once 'models/Category.php';
require_once 'models/Product.php';

$selectedCategory = false;

$categories = getCategories();

if(isset($_GET['category_id'])){
    if(!ctype_digit($_GET['category_id'])) {
        header('Location:Home.php');
        exit;
    }
    foreach($categories as $category){
        if($category['id'] == $_GET['category_id'] ){
            $selectedCategory = $category;
        }
    }
    if($selectedCategory == false){
        header('Location:Home.php');
        exit;
    }

    $products = getProductsByCategoryId($_GET['category_id']);
}
else{
    $products = getHomeProducts();
}

/*if (isset($_GET['product']) && $_GET['product']) {
    $searchProducts = getSearchProducts();
}*/
include 'views/product_list.php';
