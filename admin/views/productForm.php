
<?php require 'partials/header.php'; ?>
<?php require 'partials/head_assets.php'; ?>

<?php if(isset($_SESSION['messages'])): ?>
    <div class="alert alert-danger">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<h1>Ajouter des produits </h1>
<form action="index.php?controller=products&action=<?= isset($product) && (isset($_SESSION['old_inputs']) && $_GET['action'] == 'edit') ? 'edit&id='. $_GET['id'] : 'add' ?>" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="name">Nom :</label>
        <input  type="text" name="name" class="form-control" id="name" value="<?= isset($_SESSION[
            'old_inputs']) ? $_SESSION['old_inputs']['name'] : '' ?><?= isset($product) ? $product['name']:''?>"
    </div>

    <div class="form-group">
        <label for="category_id">categories :</label>
        <select name ="category_id" id ="category_id" class="form-control">
            <?php
            foreach ($categories as $category):?>
                <option value ="<?= $category['id'];?>"<?php if(isset($product) && $product['category_id']==
                $category['id']):?>selected="selected"<?php endif;?>><?= $category['name'];?></option>
            <?php endforeach;?>
        </select>
    </div>


    <div class="form-group">
        <label for="description">description :</label>
        <textarea name="description" class="form-control" id="description"><?= isset($_SESSION[
                'old_inputs']) ? $_SESSION['old_inputs']['description'] : '' ?><?= isset($product) ? $product['description'] :''?>
        </textarea>
    </div>

    <div class="form-group">
        <label for="price">prix :</label>
        <input  type="text" name="price" class="form-control" id="price" value="<?= isset($_SESSION[
            'old_inputs']) ? $_SESSION['old_inputs']['price'] : '' ?><?= isset($product) ? $product['price']:''?>"
    </div>

    <div class="form-group">
        <label for="feature">caractéristique :</label>
        <textarea name="feature" class="form-control" id="feature"><?= isset($_SESSION[
                'old_inputs']) ? $_SESSION['old_inputs']['feature'] : '' ?><?= isset($product) ? $product['feature'] :''?>
        </textarea>
    </div>


    <div class="form-group">
        <label for="image">image :</label>
        <input type="file" class="form-control-file" name="image" id="image" /><br>
    </div>

    <button type="submit" class="btn btn-primary">Enregistrer</button>
</form>



