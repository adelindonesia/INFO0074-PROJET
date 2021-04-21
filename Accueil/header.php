<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<title>Accueil</title>
		<link rel="stylesheet" type="text/css" href="accueil.css">
	</head>
	<body>
		<!-- Logo, navigation bar -->
		<header>
			<a href="accueil.php" ><img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
			<nav>
				<ul>
					<li><a href="./login.php">Utilisateur</a>
						<ul>
							<?php
								if(isset($_SESSION["client_id"])) /*Il faut mettre entre les crochets user exists and have loged in*/ {
									echo "<li>
											<a href='mon_compte.php'>Mon profil</a>
										</li>";
									echo "<li>
											<a href='includes/signout.php'>Déconnexion</a>
										</li>";
								}
								else {
									echo "<li>
											<a href=''>Connexion</a>
										</li>";
								}
							?>
							<li><a href="">Contactez-nous</a></li>
						</ul>
					</li>
					<li><a href="./panier.php">Panier</a></li>
					<li><a href="./produit.php">Produits</a></li>
				</ul>

				<!-- La barre de recherche -->
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