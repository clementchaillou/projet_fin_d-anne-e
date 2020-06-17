<?php
function getCategories()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM categories');
    $categories = $query->fetchAll();

    return $categories;
}

