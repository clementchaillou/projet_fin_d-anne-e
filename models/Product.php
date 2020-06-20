<?php

function getHomeProducts()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM products');
    $products = $query->fetchAll();

    return $products;
}
function getProduct($productId)
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM products WHERE id = ' . $productId);
    $selectedProduct = $query->fetch();

    return $selectedProduct;
}
function getProductsByCategoryId($categoryId)
{

    $db = dbConnect();

    $query = $db->query('SELECT * FROM products WHERE category_id = ' . $categoryId);
    $products = $query->fetchAll();

    return $products;
}

function getImages($productId)
{
    $db = dbConnect();

    $query = $db->prepare('SELECT * FROM images WHERE product_id = ?');
    $result = $query->execute( [$productId] );
    $images = $query->fetchAll();

    return $images;
}
/*function getSearchProducts(){
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM products WHERE name LIKE :name ');
    $query->bindValue('name', '%' . $_GET['name'] . '%', PDO::PARAM_STR);
    $query->execute();

    $searchProduct = $query->fetchAll();
}*/
