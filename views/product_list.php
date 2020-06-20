<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Space Tech</title>
    <?php require 'partials/head_assets.php'; ?>
</head>
<body>
<?php require 'partials/header.php'; ?>
    <div class="background-products-image">
        <img src="./assets/img/Stanton_Microtech_New_Babbage.jpg" alt="image des produits">
    </div>
    <main>
        <div class="category">
            <a href="index.php?page=product_list">Tous les produits</a>
            <?php foreach($categories as $category): ?>
                <a href="index.php?page=product_list&category_id=<?= $category['id'] ?>"><?= $category['name']; ?></a>
            <?php endforeach; ?>
        </div>
        <section class="section-product">
            <?php foreach($products as $product): ?>
            <figure>
                <a href="index.php?page=product&product_id=<?= $product['id']; ?>"><img src="./assets/img/images_products/<?= $product['image']; ?>" alt="<?= $product['name']; ?>"></a>
                <h2><?= $product['name']; ?></h2>
                <figcaption><?= $product['price']; ?> €</figcaption>
                <hr>
                <div>
                    <p><?= $product['feature'] ?></p>
                </div>
            </figure>
            <?php endforeach; ?>
        </section>
    </main>
<?php require 'partials/footer.php'?>
</body>
</html>

