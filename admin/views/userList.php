<?php require ('partials/header.php'); ?>
<?php require 'partials/head_assets.php'; ?>

<?php if(isset($_SESSION['messages'])): ?>
    <div class="alert alert-success">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?><br>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
<h1 class="d-flex justify-content-center">liste des utilisateurs : </h1>
<div class="content">
    <table class="table">
        <tr>
            <th>Prenom</th>
            <th>Nom</th>
            <th>Email</th>
            <th>Adresse</th>
            <th>admin</th>
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td scope="col"><?=  htmlspecialchars($user['first_name']) ?></td>
                <td scope="col"><?=  htmlspecialchars($user['last_name']) ?></td>
                <td scope="col"><?=  htmlspecialchars($user['email']) ?></td>
                <td scope="col"><?=  htmlspecialchars($user['address']) ?></td>
                <td scope="col"><?=  htmlspecialchars($user['is_admin']) ?></td>
                <td scope="col"><a class="btn btn-warning" href="index.php?controller=users&action=delete&id=<?= $user['id'] ?>"> supprimer</a></td>
                <td scope="col"><a class="btn btn-primary" href="index.php?controller=users&action=edit&id=<?= $user['id'] ?>">modifier</a></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <a class="btn btn-info" href="index.php?controller=users&action=new"> Ajouter un utilisateur</a>
</div>