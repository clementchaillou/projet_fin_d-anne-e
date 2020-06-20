<?php
require_once 'models/Product.php';
require_once 'models/Category.php';
require_once 'models/User.php';


if ($_GET['action'] == 'form') {
    require 'views/user.php';
}elseif (isset($_GET['action']) && $_GET['action'] == 'register'){
    if (!empty($_POST)){
        if (empty($_POST['email']) || empty($_POST['password'])){
            if (empty(['email'])){
                $_SESSION['message'][] = 'le champ Email est obligatoire';
            }
            if (empty(['password'])){
                $_SESSION['message'][] = 'le champ mot de passe est obligatoire';
            }
            header('location:index.php?page=users&action=form');
            exit;
        }else{
            $newUser = newUser();
            if ($newUser){
                $_SESSION['messages'][] = 'Bienvenue'.' '.$_SESSION['user']['username'].'!';
                header('location:index.php');
                exit;
            }else{
                $_SESSION['message'][] = 'erreur lors de l\' inscription';
                header('location:index.php?page=users&action=form');
                exit;
            }
        }
    }
}elseif (isset($_GET['action']) && $_GET['action'] == 'login'){
    if (!empty($_POST)){
        if (empty($_POST['email']) || empty($_POST['password'])){
            if (empty($_POST['email'])){
                $_SESSION['messages'][] = 'Le champ Email est obligatoire';
            }

            if (empty($_POST['password'])){
                $_SESSION['messages'][] = 'Le champ mot de passe est obligatoire';
            }
            header('Location:index.php?page=users&action=form');
            exit;
        }else{
            $login = login();
            if ($login)
            $_SESSION['messages'][] = 'Bienvenue'.' '.$_SESSION['user']['username'].'!';
            header('Location:index.php');
            exit;
        }
    }
}elseif(isset($_GET['action']) && $_GET['action'] == 'disconnect') {

    unset($_SESSION['user']);
    $_SESSION['messages'][] = 'Vous êtes déconnecté !';
    header('Location:index.php');
    exit;
}
