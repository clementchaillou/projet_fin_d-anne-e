<?php require ('partials/header.php'); ?>
<?php require 'partials/head_assets.php'; ?>


<?php if(isset($_SESSION['messages'])): ?>
    <div class="alert alert-success">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<h1>liste des categories : </h1>
<div class="content">
    <table class="table">
        <?php foreach($categories as $category): ?>
            <tr>
                <th scope="col"><?=  htmlspecialchars($category['name']) ?></th>
                <th scope="col"><a class="btn btn-warning" href="index.php?controller=categories&action=delete&id=<?= $category['id'] ?>"> supprimer</a></th>
                <th scope="col"><a class="btn btn-primary" href="index.php?controller=categories&action=edit&id=<?= $category['id'] ?>">modifier</a></th>
            </tr>
        <?php endforeach; ?>
    </table>
    <a class="btn btn-info" href="index.php?controller=categories&action=new"> Ajouter une categorie</a>
</div>
