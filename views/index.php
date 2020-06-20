<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Space Tech</title>
    <?php require 'partials/head_assets.php'; ?>
</head>
<body>
<?php require 'partials/header.php'; ?>
<div class="background-image">
    <img src="./assets/img/Planet-spaceTech-1.jpg" alt="">
</div>
<main>
    <section class="section">
            <div class="section-description">
                <?php foreach($description as $account) : ?>
                <div class="section-text">
                    <h1><?= $account['title']; ?></h1>
                    <h2><?= $account['sub_title']; ?></h2>
                    <hr>
                    <p><?= $account['description']; ?></p>
                </div>
                <div>
                    <img src="./assets/img/<?= $account['image']; ?>" alt="<?= $account['name']; ?>">
                </div>
            </div>
        <?php endforeach; ?>
    </section>
</main>
<?php require 'partials/footer.php'?>
</body>
</html>

