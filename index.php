<?php
session_start();

require_once "functions/Connect.php";

?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nutribox</title>
    <link rel="stylesheet" type="text/css" href="styles/css/screen.css">
    <link rel="stylesheet" href="styles/css/reset-meyer.css" media="screen" title="no title">
    <meta name="title" content="Nutribox">
    <meta name="description" content="Nutribox est un service permettant de réaliser des box diététiques sur-mesure à partir de produits frais.">
    <meta name="keywords" content="nutribox, box, nutrition, nutriments, produits, êtes, muscle, kilos, perdre, prise, recettes, contrôlez, calorie, lipides">
    <meta name="robots" content="noindex,nofollow">
    <link rel="icon" href="img-layout/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="French">
</head>
<?php require_once "header.php" ?>

<main id="index" class="bulma">
    <section class="hero is-medium bghome width">
        <div class="hero-body">
            <div class="container">
                <h1 class="title has-text-centered is-1">
                    Contrôlez votre nutrition
                </h1>
                <h2 class="subtitle has-text-centered is-1">
                    comme jamais
                </h2>

            </div>
        </div>
    </section>

    <a class="button is-primary is-centered is-large btnhome" href="manutribox.php">Composez votre nutribox</a>

    <section class="section">

        <h2 class="title has-text-centered is-1 hhome">VOUS &Ecirc;TES AU C&OElig;UR DE NOTRE D&Eacute;MARCHE</h2>

        <section class="section">
            <div class="columns">

                <div class="column pngmoch">
                    <img src="img-content/carotte.png" class="picto" alt="carotte">
                    <p class="has-text-centered"><br>VOUS choisissez les aliments qui composeront votre box</p>
                </div>
                <div class="column pngmoch">
                    <img src="img-content/balance.png" class="picto" alt="balance">
                    <p class="has-text-centered"><br>NOTRE interface interactive vous permet de contrôler les apports de votre box</p>
                </div>
                <div class="column pngmoch">
                    <img src="img-content/toque.png" class="picto" alt="toque">
                    <p class="has-text-centered"><br>NOUS préparons votre box avec tout le savoir-faire de nos cuisiniers</p>
                </div>
                <div class="column pngmoch">
                    <img src="img-content/velo.png" class="picto" alt="velo">
                    <p class="has-text-centered"><br>VOUS êtes livré rapidement, à la maison ou au travail</p>
                </div>
            </div>

        </section>
    </section>


    <section class="hero  is-medium  herode width2">
        <div class="hero-body">
            <div class="container">
                <h2 class="title is-1">
                    <strong>Calorie,</strong>
                </h2>
                <h2 class="subtitle is-2">
                    <strong> Nutriments, lipides...</strong>
                </h2>
            </div>
        </div>
    </section>


    <section class="hero hertroi">
        <div class="hero-body">
            <div class="container">
                <h2 class="has-text-centered is-3 title color">
                    EN MANQUE

                    D'INSPIRATION ?
                </h2>
            </div>
        </div>
    </section>


    <h2 class="has-text-centered is-2 title padding">FAITES CONFIANCE &Agrave; NOS RECETTES</h2>

    <section class="section">
        <div class="columns box-container">
            <div class="column">
                <img src="img-content/beefnrice.png" class="imgfirst imgbox is-centered" alt="box prise de muscle">
                <h4 class="title is-4 has-text-centered is-green"><br> OBJECTIF PRISE <br> DE MUSCLE ?</h4>
                <p class="has-text-centered">Essayez la <b>Green Beef’n’rice</b>, la lunchbox des sportifs qui veulent remplir leur t-shirt ! Du riz, du b&oelig;uf et des légumes verts composent ce repas riche en protéines. </p>
                <a class="button is-success lunch  is-hidden-desktop is-hidden-tablet" href="box.php">LUNCHER</a>
            </div>
            <div class="column">
                <img src="img-content/fitpleasure.png" class="imgsecond imgbox" alt="box perdre des kilos">
                <h4 class="title is-4 has-text-centered is-green"><br>QUELQUES KILOS &Agrave;<br>PERDRE ?</h4>
                <p class="has-text-centered">Salade tomate concombre ! Ajoutez quelques protéines, et la <b>Fit Pleasure</b> est prête ! Une box légère pour la ligne, mais consistante pour la forme. Pour la journée, de quoi tenir... et maigrir !</p>
                <a class="button is-success  lunch is-hidden-desktop is-hidden-tablet"  href="box.php">LUNCHER</a>
            </div>
            <div class="column">
                <img src="img-content/feelgood.png" class="imgthird imgbox" alt="box bien être">
                <h4 class="title is-4 has-text-centered is-green"><br>BESOIN DE <br> BIEN-&Ecirc;TRE ?</h4>
                <p class="has-text-centered">Avec la <b>Feel Good</b>, prenez votre ration de nutriments dans une box colorée et savoureuse. De la bonne humeur en barquette, de l’énergie dans la fourchette. </p>
                <a class="button is-success lunch  is-hidden-desktop is-hidden-tablet"  href="box.php">LUNCHER</a>
            </div>
        </div>

        <section class="section is-hidden-mobile">
            <div class="columns box-container">
                <div class="columns margin">
                    <div class="column"> <a class="button is-success lunch2"  href="box.php">LUNCHER</a></div>
                </div>
                <div class="columns margin" >
                    <div class="column" > <a class="button is-success lunch2"  href="box.php">LUNCHER</a></div>
                </div>
                <div class="columns margin">
                    <div class="column" > <a class="button is-success lunch2"  href="box.php">LUNCHER</a></div>
                </div>
            </div>
        </section>


    </section>
    <section class="hero is-grey">
        <div class="hero-body">
            <div class="container">
                <h2 class="title is-3 has-text-centered">
                    " LA RENCONTRE DE LA GASTRONOMIE ET DE LA NUTRITION, AVEC DES PRODUITS D'EXCEPTION "
                </h2>
            </div>
        </div>
    </section>


    <section class="hero hertroi">
        <div class="hero-body">
            <div class="container">
                <h2 class="has-text-centered is-2 title color">NEWSLETTER</h2>
            </div>
        </div>
    </section>


    <section class="hero  is-medium  herokatre" >
        <div class="hero-body"">
            <div class="container">
                <h2 class="title is-1 has-text-centered titlelast">
                    Recevez chaque semaine nos dernières recettes
                </h2>
                <div class="field">
                    <p class="control">
                        <input class="input inbot is-centered" type="text" placeholder="georges@gmail.com">
                    </p>
                </div>

                <a class="button is-large butbot">Abonnez - vous !</a>
            </div>
        </div>
    </section>

</main>
    <?php require_once "footer.php" ?>
</html>