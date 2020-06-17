<?php
require('models/Category.php');

if($_GET['action'] == 'list'){
    $categories = getAllCategories();
    require('views/categoryList.php');
}
elseif($_GET['action'] == 'new'){
    $categories = getAllCategories();
    require('views/categoryForm.php');
}
elseif($_GET['action'] == 'add'){

    if(empty($_POST['name'])){

        if(empty($_POST['name'])){
            $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
        }

        $_SESSION['old_inputs'] = $_POST;
        header('Location:Home.php?controller=categories&action=new');
        exit;
    }
    else{
        $resultAdd = addCategory($_POST);
        if($resultAdd){
            $_SESSION['messages'][] = 'category enregistré !';
        }
        else{
            $_SESSION['messages'][] = "Erreur lors de l'enregistrement de la catégorie... :(";
        }
        header('Location:Home.php?controller=categories&action=list');
        exit;
    }
}

elseif($_GET['action'] == 'edit'){

    if(!empty($_POST))

        if(empty($_POST['name'])){

            if(empty($_POST['name'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }


            $_SESSION['old_inputs'] = $_POST;
            header('Location:Home.php?controller=categories&action=edit&id='.$_GET['id']);
            exit;
        }
        else{

            $result = updateCategory($_GET['id'], $_POST);
            if($result){
                $_SESSION['messages'][] = 'catégorie mis à jour !';
            }
            else{
                $_SESSION['messages'][] = 'Erreur lors de la mise à jour... :(';
            }
            header('Location:Home.php?controller=categories&action=list');
            exit;
        }
    else{
        if(!isset($_SESSION['old_inputs'])){
            $categories = getCategory($_GET['id']);
        }
        //$categories = getAllCategories();
        require('views/categoryForm.php');


    }
}
elseif($_GET['action'] == 'delete'){
    if(isset($_GET['id'])){
        $result = deleteCategory(   $_GET['id']    );
        header('Location:Home.php?controller=categories&action=list');

    }
    else{
        header('Location:Home.php?controller=categories&action=list');
        exit;
    }
}