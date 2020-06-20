<?php

/*header('Content-Type: application/json');*/

require_once 'models/Category.php';
require_once 'models/Product.php';
require_once 'models/Home.php';

$description = getHomeDescription();
$categories = getCategories();
/*$searchProduct = getSearchProducts();*/


/*echo json_encode($searchProduct);*/

include 'views/index.php';
