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


    <div class="nav"></div>
    <div class="nav actif"></div>
    <div class="nav"></div>

    <div class="box">

        <div>
            <label for="adresse">Adresse * : </label>
            <input type="text" name="adresse" id="adresse"  required>
        </div>

        <div>
            <label for="code">Code postal * : </label>
            <input type="text" name="code" id="code" required>
        </div>

        <div>
            <label for="ville">Ville * : </label>
            <input type="text" name="ville" id="ville" required>
        </div>

        <div>
            <label for="pays">Pays * : </label>
            <input type="text" name="pays" id="pays" required>
        </div>

        <div>
            <label for="telephone">Téléphone * : </label>
            <input type="text" name="telephone" id="telephone" required>
        </div>


        <div>
            <label for="mail">Mail * : </label>
            <input type="text" name="mail" id="mail" required>
        </div>

        <div class="next-prev">
        <p class="next"><a href="commande-etape1.php">< Précédent </a></p>
        <p class="next"><a href="commande-etape3.php"> Suivant > </a></p>
        </div>
    </div>



</main>

<?php require_once "footer.php" ?>
</html>