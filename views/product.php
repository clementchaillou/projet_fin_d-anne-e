<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'partials/head_assets.php'; ?>
    <title><?= $selectedProduct['name']; ?></title>
</head>
<body>
<?php require 'partials/header.php'; ?>
    <div class="container-img">
        <?php foreach ($images as $image) :?>
        <div class="img-secondary">
            <img src="./assets/img/<?= $image['name'] ?>" alt="">
        </div>
        <?php endforeach; ?>
    </div>
    <main>
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
