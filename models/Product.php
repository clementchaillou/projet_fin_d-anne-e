<?php

function getHomeProducts()
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM products LIMIT 4');
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

function getImages($product_id)
{
    $db = dbConnect();
    $query = $db->query('SELECT * FROM product_images WHERE product_id' . $product_id);
    $images = $query->fetchAll();

    return $images;
}

