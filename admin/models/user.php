<?php

function getAllUsers()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM users');
    $users = $query->fetchAll();

    return $users;
}


function getUser($id)
{
    {
        $db = dbConnect();

        $query = $db->prepare('SELECT * FROM users WHERE id = ?');
        $query->execute([$id]);

        $result = $query->fetch();
        return $result;
    }
}

function deleteUser($id)
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM users WHERE id = ?');
    $result = $query->execute(
        [
            $id
        ]
    );

    return $result;
}

function addUser($informations)
{

    $db = dbConnect();

    $query = $db->prepare("INSERT INTO users (first_name, last_name, email, address, password, is_admin) VALUES( :first_name, :last_name, :email, :address, :password, :is_admin)");
    $result = $query->execute([
        'first_name' => $informations['first_name'],
        'last_name' => $informations['last_name'],
        'email' => $informations['email'],
        'address' => $informations['address'],
        'password' => $informations['password'],
        'is_admin' => $informations['is_admin'],
    ]);
    return $result;
}

function updateUser($id, $informations)
{

    $db = dbConnect();
    $query = $db->prepare("UPDATE users SET name=? WHERE id =?");
    $result = $query->execute([
        $informations["name"],

        $id,
    ]);

    return $result;
}


