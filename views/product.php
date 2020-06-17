<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'partials/head_assets.php'; ?>
    <title><?= $selectedProduct['name']; ?></title>
</head>
<body>
<?php require 'partials/header.php'; ?>
    <main>
        <div>
            <h1><?= $selectedProduct['name']; ?></h1
            <p><?= $selectedProduct['description']; ?></p>
            <h3><?= $selectedProduct['price']; ?> €</h3>
            <div>
                <!--<?php foreach($selectedProduct['images'] as $image): ?>
                    <div>
                        <img" src="./assets/img/<?= $image; ?>" alt="<?= $selectedProduct['name']; ?>">
                    </div>
                <?php endforeach; ?>-->
            </div>
        </div>
    </main>
<?php require 'partials/footer.php'?>
</body>
</html>
