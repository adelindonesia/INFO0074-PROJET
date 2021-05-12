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
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="accueil.css"> 
<head>
	<title>Clients</title>
</head>
<header>
			<img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
			<nav>
				<form action="" method="POST">
					<button type="" name=""><a href="signout.php"/>sign out</button> 
				</form>
			</nav>
			
			<nav>
			
			    <section class="index-banner">
				<div class="vertical-center">
					<h2>Bonjour!
						<p>
							Bienvenu dans la liste des clients
						</p>
					</h2>
				</div>
			           </section>
			
					 
				<link rel="stylesheet" type="text/css" href="./style.css">
				
				<div class="menu"><div style="color:#F1A594">  
				   <ul class="menu">
						<ul>
						
						<ul class="menu_s"> <!--Menu opérations-->
			<li class="menu_s"><a href="detail_order.php"><div style="font-family:Calibri;color:#74605C;font-size:25px">Modifier Commande</div></a></li>
		              </ul>
						     <li menu="active">
								<a  href="list_client.php"><div style="font-family:Calibri;color:#EE9D8C;font-size:25px">Clients</div></a>
							</li>
						
							<li>
								<a href=""><div style="font-family:Calibri;color:#EE9D8C;font-size:25px">Produits</div></a>
							</li>
							
							<li>
								<a href=""><div style="font-family:Calibri;color:#EE9D8C;font-size:25px">Commandes</div></a>
							</li>
							
							<li>
								<a href=""><div style="font-family:Calibri;color:#EE9D8C;font-size:25px">Statistiques</div></a>
							</li>
							
							
						</ul>
					
					
						</ul>
						</div>
					
						</nav>
						
						
						
 </header>
<body>

<div class="contenant"><!-- début contenant -->		
	
	
	<div> <!-- début contenu -->
	
	
	<?php
	
	//lister les clients	
	$result_client = mysqli_query($con, "SELECT * FROM client");
	echo "<table class=\"list\" align=\"center\">";
	echo "<th>ID</th><th>Nom</th><th>Prénom</th><th>Naissance</th><th>GSM</th><th>Email</th><th>Password</th>";
	while($row = mysqli_fetch_array($result_client)){
		echo "<tr class=\"list\">";
		echo "<td class=\"list\" width=\"20%\" >".$row['client_id']."</td>";
		echo "<td class=\"list\" width=\"20%\">".$row['nom']."</td>";		
		echo "<td class=\"list\" width=\"30%\">".$row['prenom']."</td>";
		echo "<td class=\"list\" width=\"30%\">".$row['birthdate']."</td>";
		echo "<td class=\"list\" width=\"20%\">".$row['GSM']."</td>";
		echo "<td class=\"list\" width=\"40%\">".$row['email']."</td>";
		echo "<td class=\"list\" width=\"20%\">".$row['password']."</td>";
		
		
		echo "</tr>";
	}
	echo "</table>";		
	echo "<br><br>";		
		
	mysqli_close($con);	
	?>
	</div> <!-- fin contenu -->		
</div><!-- fin contenant -->

<!-- début pied -->
			<footer>
			<ul class="footer-links">
				<li><a href="/accueil.php"><div style="font-family:Calibri;color:#FFF;font-size:25px">Home</div></a></li>
				<li><a href="/contact.php"><div style="font-family:Calibri;color:#FFF;font-size:25px">Contact</div></a></li>
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
		<!----fin de pied--->
</body>
</html>