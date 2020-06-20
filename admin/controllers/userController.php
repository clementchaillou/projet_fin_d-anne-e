<?php

require('models/user.php');

if ($_GET['action'] == 'list') {

    $users = getAllUsers();

    require('views/userList.php');

} elseif ($_GET['action'] == 'new') {
    $users = getAllUsers();

    require('views/userForm.php');


} elseif ($_GET['action'] == 'add') {

    if (empty($_POST['first_name']) && empty($_POST['last_name']) && empty($_POST['email']) && empty($_POST['address']) && empty($_POST['password'])) {

        if (empty($_POST['first_name'])) {
            $_SESSION['messages'][] = 'Le prenom est obligatoire !';
        }
        if (empty($_POST['last_name'])) {
            $_SESSION['messages'][] = 'Le nom est obligatoire !';
        }
        if (empty($_POST['email'])) {
            $_SESSION['messages'][] = 'L\'email est obligatoire !';
        }
        if (empty($_POST['address'])) {
            $_SESSION['messages'][] = 'L\'adresse est obligatoire !';
        }
        if (empty($_POST['password'])) {
            $_SESSION['messages'][] = 'Le mot de passe est obligatoire !';
        }
        $_SESSION['old_inputs'] = $_POST;
        header('Location:index.php?controller=users&action=new');
        exit;
    } else {
        $resultAdd = addUser($_POST);
        if ($resultAdd) {
            $_SESSION['messages'][] = 'Utilisateur enregistré !';
        } else {
            $_SESSION['messages'][] = "Erreur lors de l'enregistrement de l'utilisateur... :(";
        }
        header('Location:index?controller=users&action=list');
        exit;
    }
} elseif ($_GET['action'] == 'edit') {
    if (!empty($_POST))

        if (empty($_POST['first_name']) && empty($_POST['last_name']) && empty($_POST['email']) && empty($_POST['address']) && empty($_POST['password'])) {

            if (empty($_POST['first_name'])) {
                $_SESSION['messages'][] = 'Le champ prenom est obligatoire !';
            }
            if (empty($_POST['last_name'])) {
                $_SESSION['messages'][] = 'Le nom est obligatoire !';
            }
            if (empty($_POST['email'])) {
                $_SESSION['messages'][] = 'L\'email est obligatoire !';
            }
            if (empty($_POST['address'])) {
                $_SESSION['messages'][] = 'L\'adresse est obligatoire !';
            }
            if (empty($_POST['password'])) {
                $_SESSION['messages'][] = 'Le mot de passe est obligatoire !';
            }
            $_SESSION['old_inputs'] = $_POST;
            header('Location:index.php?controller=users&action=edit&id=' . $_GET['id']);
            exit;
        } else {

            $result = updateUser($_GET['id'], $_POST);
            if ($result) {
                $_SESSION['messages'][] = 'utilisateur mis à jour !';
            } else {
                $_SESSION['messages'][] = 'Erreur lors de la mise à jour... :(';
            }
            header('Location:index.php?controller=users&action=list');
            exit;
        }
    else {
        if (!isset($_SESSION['old_inputs'])) {
            $label = getUser($_GET['id']);
        }
        require('views/userForm.php');


    }
} elseif ($_GET['action'] == 'delete') {
    if (isset($_GET['id'])) {
        $result = deleteUser($_GET['id']);
        header('Location:index.php?controller=users&action=list');

    } else {
        header('Location:index.php?controller=users&action=list');
        exit;
    }
}
