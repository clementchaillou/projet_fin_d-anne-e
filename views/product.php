<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'partials/head_assets.php'; ?>
    <title><?= $selectedProduct['name']; ?></title>
</head>
<body>
<?php require 'partials/header.php'; ?>
    <main>
        <div class="images-product">
            <?php foreach ($images as $image) :?>
                <div>
                    <img src="./assets/img/<?= $image['name'] ?>" alt="">
                </div>
            <?php endforeach; ?>
        </div>
        <h1 class="title_product"><?= $selectedProduct['name']; ?></h1>
        <div class="description">
            <h2>Descriptif</h2>
            <p><?= $selectedProduct['description']; ?></p>
            <h2>Caractéristique</h2>
            <ul>
                <li><?= $selectedProduct['feature']; ?></li>
            </ul>
        </div>
    </main>
<?php require 'partials/footer.php'?>
</body>
</html>
