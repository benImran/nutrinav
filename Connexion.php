<?php

session_start();

require_once "functions/Connexion.php";

if(isset($_POST) && count($_POST) > 0) {

    if (isset($_POST['connexion_bouton']) && isset($_POST['email']) && isset($_POST['pass'])) {

        $connexion = new Connexion($_POST['email'], $_POST['pass']);
        $verif = $connexion->verif();

        if ($verif == "ok") {

            if($connexion->session()) {

                header("Location: index.php");
                exit();
            }
        }
    }
    else {
        echo "Il y à une erreur lors de la connexion";
    }
}

?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Se connecter - Nutribox</title>
    <link rel="stylesheet" type="text/css" href="styles/css/screen.css">
    <link rel="stylesheet" href="styles/css/reset-meyer.css" media="screen" title="no title">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" href="img-layout/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="French">
    <meta name="title" content="Se connecter">
    <meta name="description" content="Page de connexion de l'utilisateur sur nutribox.com">
    <meta name="keywords" content="nutribox, inscrit, connexion, produits, inscrire, moi, souvenir, passe, mot, mail, abonnement, connecter, composez">
</head>
<?php require_once "header.php" ?>
<main id="connect">
    <div><?php if(isset($verif)){ echo $verif;} ?></div>

    <h1>Déjà inscrit?</h1>

    <section class="info">
        <form action="" method="post">
        <div>
            <label for="mail">E-mail</label>
            <input type="text" name="email" id="mail" placeholder="jean@gmail.com" required>
        </div>

        <div>
            <label for="mdp">Mot de passe</label>
            <input type="password" id="mdp" name="pass" class="input_text" required>
        </div>

        <div>
            <label class="memory">
                <input type="checkbox" id="cbox" value="checkbox1">
                Se souvenir de moi
            </label>
        </div>

        <input type="submit"  name="connexion_bouton" class="input_text submit" id="connexion" value="Se connecter" >
            <p class="mt"><a href="Inscription.php">S'inscrire </a></p>
        </form>
    </section>
</main>

<?php require_once "footer.php" ?>
</html>