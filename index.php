<?php

session_start();
require('helpers.php');

if(isset($_GET['page'])){

    switch ($_GET['page']) {

        case 'product_list' :
            require 'controllers/productListController.php';
            break;

        case 'product' :
            require 'controllers/productController.php';
            break;

        case 'users':
            require 'controllers/userController.php';
            break;

        default :
            require 'controllers/indexController.php';
    }
}
else{
    require 'controllers/indexController.php';
}

