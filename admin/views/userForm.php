
<?php require 'partials/header.php'; ?>
<?php require 'partials/head_assets.php'; ?>


<?php if(isset($_SESSION['messages'])): ?>
    <div class="alert alert-danger">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<h1>user </h1>
<form action="index.php?controller=users&action=<?= isset($user) && (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>" method="post" enctype="multipart/form-data">

    <div class="form-group ">
        <label for="first_name">Prenom :</label>
        <input  type="text" name="first_name" id="first_name" class="form-control" value="<?= isset($_SESSION[
            'old_inputs']) ? $_SESSION['old_inputs']['first_name'] : '' ?><?= isset($user) ? $user['first_name']:''?>"
    </div>

    <div class="form-group">
        <label for="last_name">Nom :</label>
        <input  type="text" name="last_name" id="last_name" class="form-control" value="<?= isset($_SESSION[
            'old_inputs']) ? $_SESSION['old_inputs']['last_name'] : '' ?><?= isset($user) ? $user['last_name']:''?>"
    </div>

    <div class="form-group">
        <label for="email">Email :</label>
        <input  type="email" name="email" id="email" class="form-control" value="<?= isset($_SESSION[
            'old_inputs']) ? $_SESSION['old_inputs']['email'] : '' ?><?= isset($user) ? $user['email']:''?>"
    </div>

    <div class="from-group">
        <label for="address">Adresse :</label>
        <input  type="text" name="address" id="address" class="form-control" value="<?= isset($_SESSION[
            'old_inputs']) ? $_SESSION['old_inputs']['address'] : '' ?><?= isset($user) ? $user['address']:''?>"
    </div>

    <div class="form-group">
        <label for="password">Mot de passe :</label>
        <input  type="text" name="password" id="password" class="form-control" value="<?= isset($_SESSION[
            'old_inputs']) ? $_SESSION['old_inputs']['password'] : '' ?><?= isset($user) ? $user['password']:''?>"
    </div>

    <div class="form-group">
        <label for="password">Admin :</label>
        <input  type="text" name="is_admin" id="is_admin" class="form-control" value="<?= isset($_SESSION[
            'old_inputs']) ? $_SESSION['old_inputs']['is_admin'] : '' ?><?= isset($user) ? $user['is_admin']:''?>"
    </div>
    <button class="btn btn-primary" type="submit">Enregistrer</button>
</form>

