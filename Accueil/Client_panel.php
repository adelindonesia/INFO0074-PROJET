<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<title>Client</title>
		<link rel="stylesheet" type="text/css" href="panel.css">
	</head>
	<body>
		<div class="grid">
			<div class="title">
				<a href="accueil.php" ><img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
				<nav>
					<ul>
						<li><a href="accueil.php">Acceuil</a></li>
						<li><a href="">Contactez-nous</a></li>	
						<form action="search.php" method="POST">
							<input type="text" name="search" placeholder="search">
							<button type="submit" name="submit-search">Search</button>
						</form>
					</ul>
				</nav>
			</div>
			<div class="header">
				<img src="multimedia/user1.png" alt="image user" class="user">
				<center>
					<h1>Mon compte</h1>
				</center>
			</div>
			<div class="sidebar">
				<nav>
	  				<ul>
	    				<li><a href="mon_profil.php">Mon compte</a></li>
	    				<li><a href="">Produits</a></li>
	    				<li><a href="">Panier</a></li>
	   					<li><a href="">Déconnexion</a></li>
	  				</ul>
				</nav>
			</div>		
			<div class="content">Contenu</div>
			<div class="footer">
				<?php
					include 'footer.php'
				?>
			</div>
		</div>
	</body>
</html>