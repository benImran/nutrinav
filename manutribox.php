<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ma nutribox - Nutribox</title>
    <link rel="stylesheet" type="text/css" href="styles/css/screen.css">
    <meta name="title" content="Nutribox">
    <link rel="icon" href="img-layout/favicon.ico" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="French">
    <meta name="description" content="Composer sa nutribox">
    <meta name="keywords" content="nutribox, panier, produits, alimentaires, poulet, boeuf, riz, avocat, champignons, carotte, concombre, navet, poisson, oeuf">
    <meta name="robots" content="noindex,nofollow">
    <meta name="language" content="French">

</head>
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
                <li><a href="#">Composez votre Nutribox</a></li>
                <li><a href="Connexion.php">Se connecter</a></li>
                <li><a href="abonnement.php">Abonnement</a></li>
                <li><a href="concept.php">Le concept</a></li>
                <li><a href="produit.php">Nos produits</a></li>
                <?php
            } else {
                ?>
                <li><a href="Index.php">Nutribox</a></li>
                <li><a href="#">Composez votre Nutribox</a></li>
                <li><a href="panier.php">Panier</a></li>
                <li><a href="concept.php">Le concept</a></li>
                <li><a href="produit.php">Nos produits</a></li>
                <li><a href="Deconnexion.php">Se déconnecter</a></li>
                <?php
            } ?>
        </ul>
    </nav>
</header>
<main id="interface">
<section>
    <div >
        <h1 class="dessus"> Ma Nutribox</h1>
        <img src="img-content/cuisine.png" class="bg wid">
    </div>
</section>

<div class="container">
    <section class="row">
        <div class="col-m-7 col-xs-12 icons_box">
            <section id="garniture">
                <h3>Garnitures</h3>
                <div class="icons">
                    <div class="icon" data-name="laitue">
                        <img src="img-content/letuce.png" alt="laitue" />
                        <p>laitue</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="pates">
                        <img src="img-content/pasta.png" alt="pattes" />
                        <p>pâtes</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="riz">
                        <img src="img-content/rice.png" alt="riz" />
                        <p>riz</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                </div>
            </section>
            <section id="legumes">
                <h3>Légumes</h3>
                <div class="icons">
                    <div class="icon" data-name="avocat">
                        <img src="img-content/avocado.png" alt="avocat" />
                        <p>avocat</p>
                        <span class="add_plus">+</span>
                        <span  class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="concombre">
                        <img src="img-content/cocumber.png" alt="concombre" />
                        <p>concombre</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="carotte">
                        <img src="img-content/kawot.png" alt="carotte" />
                        <p>carotte</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="champignons">
                        <img src="img-content/mushroom.png" alt="champignons" />
                        <p>champignons</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="tomate">
                        <img src="img-content/tomato.png" alt="tomate" />
                        <p>tomate</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="navet">
                        <img src="img-content/turnip.png" alt="navet" />
                        <p>navet</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                </div>
            </section>
            <section id="Viandes">
                <h3>Produits d'origine animale</h3>
                <div class="icons">
                    <div class="icon" data-name="poulet">
                        <img src="img-content/poulet.png" alt="poulet" />
                        <p>poulet</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="poisson">
                        <img src="img-content/poisson.png" alt="poisson" />
                        <p>poisson</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="oeuf">
                        <img src="img-content/oeufs.png" alt="oeuf" />
                        <p>oeuf</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                    <div class="icon" data-name="boeuf">
                        <img src="img-content/boeuf.png" alt="boeuf" />
                        <p>boeuf</p>
                        <span class="add_plus">+</span>
                        <span class="add_less">-</span>
                    </div>
                </div>
            </section>
        </div>
        <div class="col-m-5 col-s-12 col-xs-12">
            <section id="aside-values-basket">
                <div id="valeur">
                    <h2>Valeurs nutritionelles</h2>


                    <div id="values">
                        <div data-value="cal" class="value">
                            <h3>Calories (Kcal)</h3>
                        </div>
                        <div data-value="lip" class="value">
                            <h3>Lipides</h3>
                        </div>
                        <div data-value="ags" class="value minor_values">
                            <h3>Acides gras saturés</h3>
                        </div>
                        <div data-value="cho" class="value">
                            <h3>Cholestérol</h3>
                        </div>
                        <div data-value="sod" class="value">
                            <h3>Sodium</h3>
                        </div>
                        <div data-value="pot" class="value">
                            <h3>Potassium</h3>
                        </div>
                        <div data-value="glu" class="value">
                            <h3>Glucides</h3>
                        </div>
                        <div data-value="fib" class="value minor_values">
                            <h3>Fibres alimentaires</h3>
                        </div>
                        <div data-value="suc" class="value minor_values">
                            <h3>Sucres</h3>
                        </div>
                        <div data-value="pro" class="value">
                            <h3>Protéines</h3>
                        </div>
                    </div>
                </div>
                <div id="panier">
                    <h2>Panier</h2>
                    <div id="basket">

                    </div>
                </div>
            </section>
        </div>
    </section>
</div>

<section class="buttons">
    <ul>
        <li>
            <a href="panier.php" class="myButton">Ajouter au panier</a>
        </li>
        <li>
            <a href="commande-etape1.php" class="myButton1">Commander</a>
        </li>
    </ul>
</section>
    </main>
<footer>
    <section>
        <div>
            <p>Suivez-nous</p>
            <a href="https://twitter.com/NutriboxParis" target="_blank"><img id="marginl" src="img-layout/twitter.png" alt="twitter"></a>
            <a href="https://www.instagram.com/nutriboxparis/?hl=fr" target="_blank"><img src="img-layout/instagram.png" alt="instagram"></a>
            <a href="https://www.facebook.com/NutriboxParis/?ref=aymt_homepage_panel" target="_blank"><img src="img-layout/facebook.png" alt="facebook"></a>
        </div>


        <div>
            <ul>
                <li><a href="cookie.html"> Cookies</a></li>
                <li>|</li>
                <li><a href="CGV.html">Conditions générales</a></li>
                <li>|</li>
                <li><a href="mentions-legales.html">Mentions Légales</a></li>
                <li>|</li>
                <li><a href="mailto:contact@nutribox.com">Nous contacter</a></li>
            </ul>
        </div>

        <div>
            <p>©2017 nutribox.com</p>
            <p>Tous droits réservés</p>
        </div>
    </section>

</footer>
</body>
<script src="styles/js/creer.js" type="text/javascript"></script>
<script src="styles/js/nutritive_values.js" type="text/javascript"></script>
</html>