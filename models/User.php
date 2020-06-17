<?php
function newUser()
{
    $db = dbConnect();
        $query = $db->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)');
        $result = $query->execute([
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            hash('md5', $_POST['password'])
        ]);
        return $result;
}
function login()
{
    $db = dbConnect();
    $query = $db->prepare('SELECT * FROM users WHERE email = :email AND :password');
    $query->execute([
        'password' => md5($_POST['password']),
        'email' => $_POST['email']
    ]);
    $user = $query->fetch();
    return $user;
}
