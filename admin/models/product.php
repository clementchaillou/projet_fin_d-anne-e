<?php

function getAllProducts()
{
    $db = dbConnect();

    $query = $db->query('SELECT * FROM products');
    $products =  $query->fetchAll();

    return $products;
}


function getProduct($id){
    {
        $db = dbConnect();

        $query = $db->prepare('SELECT * FROM products WHERE id = ?');
        $query->execute([$id]);

        $result = $query->fetch();
        return $result;
    }
}
function deleteProduct($id)
{
    $db = dbConnect();
    $query = $db->prepare('DELETE FROM products WHERE id = ?');
    $result = $query->execute(
        [
            $id
        ]

    );

    return $result;
}
function addProduct($informations){

    $db= dbConnect();
    $query = $db->prepare("INSERT INTO products (name, description, price, feature, image, category_id) VALUES( :name, :description, :price, :feature, :image, :category_id)");
    $result = $query->execute([
        'name' => $informations["name"],
        'description' => $informations["description"],
        'price' => $informations["price"],
        'feature' => $informations["feature"],
        'image' => $informations["image"],
        'category_id' => $informations["category_id"]

    ]);

    if($result){
        $productId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/img/images_products' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE products SET image = '$new_file_name' WHERE id = $productId");
        }
    }
    return $result;
}
function updateProduct($id, $informations){

    $db= dbConnect();
    $query = $db->prepare("UPDATE products SET name=?, description=?, price=?, feature=?, image=?, category_id=? WHERE id =?");
    $result = $query->execute([
        $informations["name"],
        $informations["description"],
        $informations["price"],
        $informations["feature"],
        $informations["image"],
        $informations["category_id"],
        $id,
    ]);

    if($result){
        $productId = $db->lastInsertId();

        $allowed_extensions = array( 'jpg' , 'jpeg' , 'gif', 'png' );
        $my_file_extension = pathinfo( $_FILES['image']['name'] , PATHINFO_EXTENSION);
        if (in_array($my_file_extension , $allowed_extensions)){
            $new_file_name = $productId . '.' . $my_file_extension ;
            $destination = '../assets/img/images_products' . $new_file_name;
            $result = move_uploaded_file( $_FILES['image']['tmp_name'], $destination);

            $db->query("UPDATE products SET image = '$new_file_name' WHERE id = $productId");
        }
    }
    return $result;

}

