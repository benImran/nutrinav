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
    <div class="nav"></div>
    <div class="nav actif"></div>

    <div class="box">
        <p class="light">Votre transaction est assurée en toute sécurité par notre partenaire de paiement Stripe.</p>
        <div>
            <label for="paiement">Type de paiement :</label>
            <select id="paiement" name="paiement" required>
                <option value="1" selected="">Visa</option>
                <option value="2">PayPal</option>
                <option value="3" >MasterCard</option>
            </select>
        </div>

        <div>
            <label for="titulaire">Titulaire de la carte : * </label>
            <input type="text" name="titulaire" id="titulaire" required>
        </div>

        <div>
            <label for="carte">Numéro de la carte : *</label>
            <input type="text" name="carte" id="carte" required>
        </div>

        <div>
            <label for="cryptogramme">Cryptogramme : *</label>
            <input type="text" name="cryptogramme" id="cryptogramme" required>
        </div>

        <div>
            <label for="expiration">Date d'expiration : *</label>
            <input type="text" name="expiration" id="expiration" placeholder="mm/aaaa" required>
        </div>

        <div>
            <button><a href="commande-valide.php">VALIDER MA COMMANDE</a></button>
        </div>

        <div class="next-prev">
            <p class="next"><a href="commande-etape2.php">< Précédent </a></p>
        </div>

        <h5>Livraison entre 20 et 30 minutes. Nous vous préviendrons par SMS lorsque le livreur sera parti.</h5>
    </div>



</main>

<?php require_once "footer.php" ?>
</html>