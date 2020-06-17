<!DOCTYPE html>
<html lang="fr">
<head>
    <?php require 'partials/head_assets.php'; ?>
    <title>form</title>
</head>
<body>
<?php require 'partials/header.php'; ?>
    <main>
        <section class="section-form">
            <div class="form">
                <h1>Se connecter</h1>
                <form action="index.php?page=users&action=login" method="post" enctype="multipart/form-data">
                    <div>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Password">
                    </div>
                    <input type="submit" value="Se connecter">
                    <a href="#">Mot de passe oublié ?</a>
                </form>
            </div>
            <div class="form">
                <h2>S'inscrire</h2>
                <form action="index.php?page=users&action=register" method="post" enctype="multipart/form-data">
                    <div>
                        <input type="text" name="first_name" placeholder="Prénom">
                    </div>
                    <div>
                        <input type="text" name="last_name" placeholder="Nom">
                    </div>
                    <div>
                        <input type="text" name="address" placeholder="Adresse">
                    </div>
                    <div>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div>
                        <input type="password" name="password" placeholder="Mot de passe">
                    </div>
                    <input type="submit" value="S' enregistrer">
                </form>
            </div>
        </section>
    </main>
</body>
</html>
