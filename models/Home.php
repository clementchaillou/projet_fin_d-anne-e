<?php
function getHomeDescription()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM home');
    $description = $query->fetchAll();

    return $description;
}

