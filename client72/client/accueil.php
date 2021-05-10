<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<title>Accueil</title>
		<link rel="stylesheet" type="text/css" href="accueil.css">
	</head>
	<!--Tuto :https://www.youtube.com/watch?v=kbLfWKGVsMQ&ab_channel=DaniKrossing-->
	<body>
	<header>
			<img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
			<nav>
				<ul>
					<li><a href="./login.php"><!--<img src="./multimedia/user.png" class="user">-->Utilisateur</a>
						<ul>
							<li>
								<a href="login.php">Connexion</a>
							</li>
						
							<li>
								<a href="contact.php">Contactez-nous</a>
							</li>
						</ul>
					</li>
					<li><a href="./panier.php"><!--<img src="./multimedia/cart-icon.png" class="cart">-->Panier</a></li>
					<li><a href="./produit.php">Produits</a></li>
				</ul>

				<!-- Mettre une barre de recherche ? -->
				<form action="search.php" method="POST">
					<input type="text" name="search" placeholder="search">
					<button type="submit" name="submit-search">Search</button>
				</form>
				
<div class="produit-container">
<?php
    require_once 'config.php';

	if(isset($_POST['submit-search'])){
		$search = mysqli_real_escape_string($con, $_POST['search']);
		$sql = "SELECT * FROM produit WHERE produit_name LIKE '%$search%' or produit_type LIKE '%search%' or produit_country LIKE '%$search%' or produit_design LIKE '%$search%' ";

		$result = mysqli_query($con, $sql);
		$queryResult = mysqli_num_rows($result);

		echo "<h1>There are ". $queryResult." results!</h1>";
		echo "<br>","<br>", "<br>";

		if ($queryResult > 0 ) {
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<a href='produit.php?title=".$row['produit_name']."'>
						<div class='produit_box'>
							<h2>".$row['produit_name']."</h2>
							<h3>".$row['produit_type']."</h3>
							<p>Degré : ".$row['produit_alcohol']."</p>
							<p>Prix : ".$row['produit_price']." €</p>
							<p>Origine : ".$row['produit_country']."</p>
							<p>Description : </p>
							<p>".$row['produit_design']."</p>
						</div>
					</a>";
			}
		} else {
			echo"There are no result matching your research!";
		}
	}

?>
</div>

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

			</nav>
		</header>
		<!-- début menu -->
		 <nav>
		 <div class="wrapper">
		<section class="index-links">
			<a href="./produits.php">
				<div class="index-boxlink-square">
					<h3>Produits</h3>
				</div>
			</a>
			<a href="./panier.php">
				<div class="index-boxlink-rectangle">
					<h3>Panier</h3>
				</div>
			</a>
			<a href="./login.php">
				<div class="index-boxlink-rectangle">
					<h3>Mon Compte</h3>
				</div>
			</a>
			<a href="./Contact.php">
				<div class="index-boxlink-square">
					<h3>Contactez-Nous</h3>
				</div>
			</a>
		</section>
	</div>
	<!-- fin menu -->
   </nav>
   
 
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
 
			
   
	
		
		