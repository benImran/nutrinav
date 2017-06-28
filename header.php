<body>
<header>

    <input id="burger" type="checkbox" />

    <label for="burger">
        <span></span>
        <span></span>
        <span></span>
    </label>

    <nav>
        <ul>
            <?php

            if (!isset($_SESSION['email']) or $_SESSION['email'] == false) {
                ?>
                <li><a href="index.php">Nutribox</a></li>
                <li><a href="manutribox.php">Composez votre Nutribox</a></li>
                <li><a href="Connexion.php">Se connecter</a></li>
                <li><a href="abonnement.php">Abonnement</a></li>
                <li><a href="box.php">Nos Nutribox</a></li>
                <li><a href="concept.php">Le concept</a></li>
                <li><a href="produit.php">Nos produits</a></li>
                <?php
            } else {
                ?>
                <li><a href="index.php">Nutribox</a></li>
                <li><a href="manutribox.php">Composez votre Nutribox</a></li>
                <li><a href="panier.php">Panier</a></li>
                <li><a href="box.php">Nos Nutribox</a></li>
                <li><a href="abonnement.php">Abonnement</a></li>
                <li><a href="produit.php">Nos produits</a></li>
                <li><a href="Deconnexion.php">Se déconnecter</a></li>
                <?php
            } ?>
</ul>
</nav>
</header>