<?php
	session_start();
	//si l'utilisateur ne s'est pas connecté, il demande de s'authentifier
	if (!(isset($_SESSION['username']))){
		header("Location: login.php");		
		exit();
	}
	
	require_once 'config.php';	
?>

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
					<button type="" name=""><a href="signout.php"/>sign out</button> 
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
					<a href="list_client.php">
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
	<footer>
			<!-- début pied -->
			<footer>
			<ul class="footer-links">
				<li><a href="/accueil.php">Home</a></li>
				<li><a href="/contact.php">Contact</a></li>
			</ul>
			<div class="footer-sm">
				<a href="">
					<img src="multimedia/fb_icone.jpg" alt="image facebook icone" />
					<img src="multimedia/insta_icone.jpg" alt="image instagram icone" />
					<img src="multimedia/linkedin_icone.jpg" alt="image linkedin icone" />
				</a>
		    </div>
			    <div style="text-align:center">
				<div style="font-family:Calibri;color:#FFF;font-size:25px">Copyright &copy; 2021 - Groupe 72</div>
				</div>
		</footer>
	</body>
</html>

