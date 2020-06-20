<header class="heading">
    <input type="checkbox" class="trigger">
    <nav class="heading-nav">
        <a href="index.php"><img src="./assets/img/SpaceTech.png" alt="Logo SpaceTech"></a>
        <div>
            <a href="index.php">La Société</a>
            <a href="index.php?page=product_list">Nos Vaisseaux</a>
            <a href="#">Evénement</a>
            <a href="#">Avis</a>
            <a href="#" class="cross"><img src="./assets/img/picto-croix.png" alt="Une croix"></a>
        </div>
        <div>
            <?php if(isset($_SESSION['user'])) :?>
                <a href="admin"><i class="far fa-user-circle"></i></a>
                <a href="index.php?page=users&action=disconnect"><i class="fas fa-sign-out-alt"></i></a>
            <?php else: ?>
                <a href="index.php?page=users&action=form"><i class="far fa-user-circle"></i></a>
            <?php endif; ?>
            <a href="#"><i class="far fa-heart"></i></a>
            <a href="#"><i class="fas fa-shopping-cart"></i></a>
            <a href="#"><img src="./assets/img/picto-burger.svg" alt="Un burger"></a>
        </div>
    </nav>
    <!--<div id="app">
        <form @submit.prevent>
            <input type="search"
                   placeholder="Tapez un mot clé"
                   aria-label="Search"
                   @input="typing"
                   @keyup.enter="typing"
                        v-model="query">
        </form>
    </div>-->
</header>

<?php if(isset($_SESSION['messages'])): ?>
    <div class="message">
        <?php foreach($_SESSION['messages'] as $message): ?>
            <?= $message ?>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

