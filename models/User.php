<?php
function newUser()
{
    $db = dbConnect();
        $query = $db->prepare('INSERT INTO users (first_name, last_name, email, password) VALUES (?, ?, ?, ?)');
        $newUser = $query->execute([
            $_POST['first_name'],
            $_POST['last_name'],
            $_POST['email'],
            hash('md5', $_POST['password'])
        ]);
    $_SESSION['user'] = [
        'username' => $_POST['username'],
        'club_id' => $_POST['club_id'],
        'email' => $_POST['email'],
        'adress' => $_POST['adress'],
        'is_admin' => 0,
    ];
        return $newUser;
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

    if ($user != false) {
        $_SESSION['user'] = [
            'id' => $user['id'],
            'username' => $user['username'],
            'club_id' => $user['club_id'],
            'email' => $user['email'],
            'is_admin' => $user['is_admin'],
        ];
        return $user;
    }
}
