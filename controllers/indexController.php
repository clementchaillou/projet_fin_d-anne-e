<?php


require_once 'models/Category.php';
require_once 'models/Product.php';
require_once 'models/Home.php';

$description = getHomeDescription();
$categories = getCategories();

include 'views/index.php';
