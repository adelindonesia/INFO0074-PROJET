<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<title>Accueil</title>
		<link rel="stylesheet" type="text/css" href="style.css">
	</head>
	<!--Tuto :https://www.youtube.com/watch?v=kbLfWKGVsMQ&ab_channel=DaniKrossing-->
	<body>
		<!-- Logo, navigation bar -->
		<header>
			<a href="accueil.php" ><img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
			<nav>
				<ul>
					<li><a href="./login.php"><img src="./multimedia/user.png" class="user"></a></li>
					<li><a href="./panier.php"><img src="./multimedia/cart-icon.png" class="cart">Panier</a></li>
					<li><a href="./produit.php">Produits</a></li>
				</ul>

				<!-- Mettre une barre de recherche ? -->
				<form action="search.php" method="POST">
					<input type="text" name="search" placeholder="search">
					<button type="submit" name="submit-search">Search</button>
				</form>

			</nav>
		</header>
		<main>
			<!--banner-->
			<section class="index-banner">
				<div class="vertical-center">
					<h2> CLIQUEZ ET COLLECTEZ </h2>
				</div>
			</section>
		</main>
	</body>
</html>