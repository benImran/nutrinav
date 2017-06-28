<!doctype html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Mon panier - Nutribox</title>
	<link rel="stylesheet" type="text/css" href="styles/css/screen.css">
	<link rel="stylesheet" href="styles/css/reset-meyer.css" media="screen" title="no title">
	<meta name="title" content="Panier">
	<meta name="description" content="Panier">
	<meta name="keywords" content="box, nutribox, panier, calories, prix, total, acceptons">
	<meta name="robots" content="noindex,nofollow">
	<link rel="icon" href="img-layout/favicon.ico" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="French">
</head>
<?php require_once "header.php" ?>

<main id="panier">

<section id="first">
		<h1>PANIER</h1>
</section>

<section id="second">
	<img src="img-content/beefnrice.png" alt="box">
	<div class="flex a">
		<h2>Box Beef'n</h2>
			<fieldset>
				<p class="ingredient">100 g riz</p>
				<p class="ingredient">350 g boeuf</p>
				<p class="ingredient">200 g brocolis</p>
			</fieldset>
	</div>

	<div class="flex">
		<h2>Calories :</h2>
		<p>568</p>
	</div>

	<div class="flex">
	    <label for="quantite">Qté :</label>
	    <select name="quantite" required>
			<option value="0">0</option>
	        <option value="1" selected="">1</option>
	        <option value="2">2</option>
	        <option value="3" >3</option>
	    </select>
	</div>

	<div class="flex">
		<h2>Prix :</h2>
		<p>16,99€</p>
	</div>
	
	<div class="trait"></div>

	<img src="img-content/fitpleasure.png" alt="box">
	<div class="flex a">
		<h2>Box Perso</h2>
			<fieldset class="w">
				<p class="ingredient">100 g riz</p>
				<p class="ingredient">250 g poulet</p>
				<p class="ingredient">40 g carottes</p>
				<p class="ingredient">30 g tomates</p>
				<p class="ingredient">20 g brocolis</p>
				<p class="ingredient">350 g boeuf</p>
			</fieldset>
	</div>

	<div class="flex">
		<h2>Calories :</h2>
		<p>1100</p>
	</div>

	<div class="flex">
	    <label for="quantite">Qté :</label>
	    <select name="quantite" required>
			<option value="0">0</option>
	        <option value="1" selected="">1</option>
	        <option value="2">2</option>
	        <option value="3" >3</option>
	    </select>
	</div>

	<div class="flex">
		<h2>Prix :</h2>
		<p>20€</p>
	</div>
	
	<div class="trait"></div>

		<img src="img-content/feelgood.png" alt="box">
	<div class="flex a">
		<h2>Box Perso</h2>
			<fieldset class="w2">
				<p class="ingredient">100 g pâtes</p>
				<p class="ingredient">250 g poulet</p>
				<p class="ingredient">40 g carottes</p>
				<p class="ingredient">30 g avocats</p>
			</fieldset>
	</div>

	<div class="flex">
		<h2>Calories :</h2>
		<p>780</p>
	</div>

	<div class="flex">
	    <label for="quantite">Qté :</label>
	    <select id="quantite" name="quantite" required>
			<option value="0">0</option>
	        <option value="1" selected="">1</option>
	        <option value="2">2</option>
	        <option value="3" >3</option>
	    </select>
	</div>

	<div class="flex">
		<h2>Prix :</h2>
		<p>20€</p>
	</div>

</section>

<section class="float">
	<h3>Total</h3>
		<div class="space-between">
			<p>Sous-Total</p>
			<p>46,99€</p>
		</div>
		<div class="space-between">
			<label for="livraison">Livraison</label>
	    		<select id="livraison" name="quantite" required>
			        <option value="1" selected="">Standard (gratuit)</option>
			        <option value="2">A domicile</option>
			        <option value="3" >Chronopost</option>
	    		</select>
		</div>
		<button> <a href="commande-etape3.php"> PAIEMENT</a></button>
		<h4>Nous acceptons :</h4>
		<div class="card">
			<img src="img-layout/paypal.svg">
			<img src="img-layout/credit-card.svg">
			<img src="img-layout/credit-card-1.svg">
			<img src="img-layout/credit-card-2.svg">
			<img src="img-layout/credit-card-3.svg">
		</div>
		<p class="code">Vous avez un code promotionnel ? Ajoutez le à la prochaine étape.</p>
</section>
</main>
<?php require_once "footer.php" ?>
</html>