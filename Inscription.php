<?php
session_start();  //Démarre une nouvelle session ou reprend une session existante

require_once "functions/Inscription.php";


if (isset($_POST['pass']) && isset($_POST['confirme_pass']) && isset($_POST['email'])) {
    //on initialise la class
    $inscription = new Inscription($_POST['pass'], $_POST['confirme_pass'], $_POST['email']);
    $verif       = $inscription->verif();

    if($verif == "Votre compte viens d être créé") {
        if($inscription->enregistrement()) {

            if($inscription->session()) {
                header("Location: index.php");
                exit();
            }
        }
    }
}

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inscription - Nutribox</title>
    <link rel="stylesheet" type="text/css" href="styles/css/screen.css">
    <link rel="stylesheet" href="styles/css/reset-meyer.css" media="screen" title="no title">
    <meta name="title" content="Inscription">
    <meta name="description" content="S'inscrire sur le site">
    <meta name="keywords" content="nutribox, compte, nouveau, passe, mot, inscription, produits, moi, souvenir, confirmer, mail">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" href="img-layout/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="French">

</head>
<?php require_once "header.php" ?>
    <main id="new-connect">
        <div class="verif"><?php if(isset($verif)){ echo $verif;} ?></div>
        <h1>Nouveau compte</h1>

        <section class="info">

            <form action="" method="post">
            <div>
                <label for="email">E-mail</label>
                <input type="text" id="email" placeholder="jean@gmail.com" name="email" class="input_text" required>
            </div>

            <div>
                <label for="pass">Mot de passe</label>
                <input type="password" name="pass" id="pass" class="input_text" required>
            </div>

            <div>
                <label for="confirm_pass">Confirmer votre mot de passe</label>
                <input type="password" id="confirm_pass" name="confirme_pass" class="input_text" required>
            </div>

            <div>
                <label class="memory">
                    <input type="checkbox" id="cbox" value="checkbox1">
                    Se souvenir de moi
                </label>
            </div>

            <input type="submit"  name="inscription_bouton" class="input_text submit" id="inscription" value="S'inscrire">
                <p class="mt"><a href="Connexion.php">Vous avez déjà un compte ? </a></p>
            </form>

        </section>
    </main>

<?php require_once "footer.php" ?>
    </html>