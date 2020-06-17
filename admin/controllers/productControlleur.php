<?php
require 'models/Product.php';
require 'models/Category.php';

if($_GET['action'] == 'list'){
    $products = getAllProducts();
    require('views/productList.php');
}
elseif($_GET['action'] == 'new'){
    $categories = getAllCategories();
    require('views/productForm.php');
}
elseif($_GET['action'] == 'add'){

    if(empty($_POST['name']) && empty($_POST['category_id']) && empty($_POST['price'])){

        $_SESSION['old_inputs'] = $_POST;
        header('Location:Home.php?controller=products&action=new');
        exit;
    }
    else{
        $resultAdd = addProduct($_POST);

        header('Location:Home.php?controller=products&action=list');
        exit;
    }
}

elseif($_GET['action'] == 'edit'){

    if(!empty($_POST))

        if(empty($_POST['name']) && empty($_POST['category_id'])){

            if(empty($_POST['name'])){
                $_SESSION['messages'][] = 'Le champ nom est obligatoire !';
            }
            if(empty($_POST['category_id'])){
                $_SESSION['messages'][] = 'Le champ catégorie est obligatoire !';
            }

            $_SESSION['old_inputs'] = $_POST;
            header('Location:Home.php?controller=products&action=edit&id='.$_GET['id']);
            exit;
        }
        else{

            $result = updateProduct($_GET['id'], $_POST);
            if($result){

                $_SESSION['messages'][] = 'produit mis à jour !';
            }
            else{
                $_SESSION['messages'][] = 'Erreur lors de la mise à jour... :(';
            }
            header('Location:Home.php?controller=products&action=list');
            exit;
        }
    else{
        if(!isset($_SESSION['old_inputs'])){
            $product = getProduct($_GET['id']);
        }
        $categories = getAllCategories();
        require('views/productForm.php');
    }
}
elseif($_GET['action'] == 'delete'){
    if(isset($_GET['id'])){
        $result = deleteProduct(   $_GET['id']    );
        header('Location:Home.php?controller=products&action=list');
    }
    else{
        header('Location:Home.php?controller=products&action=list');
        exit;
    }
}
