<?php

session_start();
require ('../helpers.php');

if(isset($_GET['controller'])){
    switch ($_GET['controller']){

        case 'products' :
            require 'controllers/productController.php';
            break;

        case 'categories' :
            require 'controllers/categoryController.php';
            break;

        case 'users' :
            require 'controllers/loginController.php';
            break;

        default :
            require 'controllers/indexController.php';
    }
}
else{
    require 'controllers/indexController.php';
}

if(isset($_SESSION['messages'])){
    unset($_SESSION['messages']);
}
if(isset($_SESSION['old_inputs'])){
    unset($_SESSION['old_inputs']);
}

