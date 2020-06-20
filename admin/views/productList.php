
<?php require 'partials/header.php'; ?>
<?php require 'partials/head_assets.php'; ?>


<?php if(isset($_SESSION['messages'])): ?>
    <div class="alert alert-success">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<h1 class="d-flex justify-content-center">la liste complète des produits: </h1>
<div class="content">
    <table class="table">
        <tr>
            <th>Nom du produits</th>
            <th>Description du produit</th>
            <th>Prix du produit</th>
        </tr>
        <?php foreach($products as $product): ?>
            <tr>
                <td scope="col"><?=  htmlspecialchars($product['name']) ?> </td>
                <td scope="col"><?=  htmlspecialchars($product['description']) ?> </td>
                <td scope="col"><?=  htmlspecialchars($product['price']) ?>€</td>
                <td scope="col"><a class="btn btn-warning" href="index.php?controller=products&action=delete&id=<?= $product['id'] ?>"> Supprimer</a></td>
                <td scope="col"><a class="btn btn-primary" href="index.php?controller=products&action=edit&id=<?= $product['id'] ?>"> Modifier</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a class="btn btn-info" href="index.php?controller=products&action=new"> Ajouter un produits</a>
</div>
