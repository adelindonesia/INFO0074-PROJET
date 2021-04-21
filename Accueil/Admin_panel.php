<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<title>Admin</title>
		<link rel="stylesheet" type="text/css" href="accueil.css">
	</head>
	<body>
		<header>
			<a href="accueil.php" ><img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
			<nav>
				<form action="" method="POST">
					<button type="" name="">sign out</button> 
				</form>
			</nav>
		</header>
		<main>
			<section class="index-banner">
				<div class="vertical-center">
					<h2>Bonjour!
						<p>
							Bienvenu dans le panneau d'administration
						</p>
					</h2>
				</div>
			</section>
			<!--Sous banner-->
			<div class="wrapper">
				<section class="index-links">
					<a href="">
						<div>
							<h3>Gérer les clients</h3>
						</div>
					</a>
					<a href="">
						<div>
							<h3>Gérer les Produits</h3>
						</div>
					</a>
					<a href="">
						<div>
							<h3>Gérer les commandes</h3>
						</div>
					</a>
				</section>
			</div>
		</main>
	<?php 
		include'footer.php';
	?>
	</body>
</html>

