<?php require 'partials/header.php'; ?>
<?php require 'partials/head_assets.php'; ?>


<?php if(isset($_SESSION['messages'])): ?>
    <div class="alert alert-danger">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<h1>categories </h1>
<form action="index.php?controller=categories&action=<?= isset($category) || (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>" method="post" enctype="multipart/form-data">
    <div>
        <label for="name">Nom :</label>
        <input  type="text" name="name" id="name" value="<?= isset($_SESSION[
            'old_inputs']) ? $_SESSION['old_inputs']['name'] : '' ?><?= isset($category) ? $category['name']:''?>"
    </div>
    <div class="row">
        <input type="submit" value="Enregistrer">
    </div>
</form>



