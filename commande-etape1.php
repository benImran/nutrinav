<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Commande - Nutribox</title>
    <link rel="stylesheet" type="text/css" href="styles/css/screen.css">
    <link rel="stylesheet" href="styles/css/reset-meyer.css" media="screen" title="no title">
    <meta name="title" content="Commander sa box">
    <meta name="description" content="Commander sa box">
    <meta name="keywords" content="nutribox, box, commande, commander, conditions, nouveau, perso, générales, box perso, etape, livraison, frais">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" href="img-layout/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="French">
</head>
<?php require_once "header.php" ?>

<main id="commande">
    <h1>Commander</h1>
    <h2>Nouveau chez Nutribox ? </h2>

    <div class="nav actif"></div>
    <div class="nav"></div>
    <div class="nav"></div>

    <div class="box">
        <h3>Box Perso</h3>
        <img src="img-content/beefnrice.png">

        <div class="flex">
            <p>Frais de livraison</p>
            <p>1.50€</p>
        </div>

        <div class="flex">
            <p>Total</p>
            <p>17€</p>
        </div>

        <div>
            <label for="nom">Nom * : </label>
            <input type="text" name="nom" id="nom"  required>
        </div>

        <div>
            <label for="prenom">Prénom * : </label>
            <input type="text" name="prenom" id="prenom" required>
        </div>

        <div>
            <label for="quantite">Quantité</label>
            <select id="quantite" name="quantite" required>
                <option value="1" selected="">1</option>
                <option value="2">2</option>
                <option value="3" >3</option>
                <option value="3" >4</option>
                <option value="3" >5</option>
            </select>
        </div>

        <p class="next"><a href="commande-etape2.php"> Suivant ></a></p>
        <p class="light">En vous inscrivant, vous acceptez les <span>conditions générales d'utilisation</span> de Nutribox.</p>

    </div>



</main>

<?php require_once "footer.php" ?>
</html>