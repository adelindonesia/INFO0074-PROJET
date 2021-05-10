<?php
	session_start();
	if (!(isset($_SESSION['username']))){
		header("Location: login.php");		
		exit();
	}
	
	require_once 'config.php';
	
	if (isset($_GET['delete_commande'])){
		$panier_id = $_GET['delete_commande'];
		$query = "DELETE FROM panier WHERE panier_id='".$panier_id."'";
		if (mysqli_query($con,$query)){
			$_SESSION['message'] = "<center>La commande ".$panier_id." a &eacute;t&eacute; supprim&eacute;e.</center> <br>";
		}else{
			$_SESSION['message'] = "<center>".mysqli_error($con).".</center> <br>";
		}		
		header("Location: commandes.php");
		exit();
	}
?>	

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<title>Commandes</title>
		<link rel="stylesheet" type="text/css" href="./order.css">
	</head>
	<body>
		<header>
			<a href="admin_panel.php" ><img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
			<nav>
					<ul>
						<li><a href="">Clients</a></li>
						<li><a href="">Produits</a></li>
						<li><a href="commandes.php">Commandes</a></li>
					</ul>
					<form action="signout.php" method="POST">
						<button type="submit" name="signout">sign out</button> 
					</form>
					
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
					<h2> COMMANDES </h2>
				</div>
			</section>
		</main>
		
		<?php
		if (isset($_SESSION['message'])){
			echo $_SESSION['message'];
			unset($_SESSION['message']);
		}
		
		$requete_commande = "SELECT panier_id, panier.panier_client, client_firstname, client_surname, panier_date, panier_price FROM panier, client WHERE client.client_id = panier.panier_client ORDER BY panier_id DESC";				
		$result_commande = mysqli_query($con,$requete_commande);

		echo "<table class=\"list\">";
		echo "<th>N&deg; de<br>commande</th><th>Date</th><th>Client</th><th>Prix total</th><th>&Eacute;tat</th><th></th>";
		while($row = mysqli_fetch_array($result_commande)){
			echo "<tr class=\"list\">";		
			echo "<td class=\"list\" width=\"20%\">".$row['panier_id']."</td>";
			echo "<td class=\"list\" width=\"20%\">".$row['panier_date']."</td>";
			echo "<td class=\"list\" width=\"20%\">".$row['client_surname']."<br>".$row['client_firstname']."</td>";		
			echo "<td class=\"list\" width=\"20%\">".$row['panier_price']."&euro;</td>";
			echo "<td class=\"list\" width=\"10%\">".$row['']."</td>";
			echo "<td class=\"list\" width=\"10%\">
					<a href=update_commande.php?panier_id=".$row['panier_id'].">
					<img src=\"multimedia/edit.png\" alt=\"modifier\" height=\"30\"></a>
					<a href=commandes.php?delete_commande=".$row['panier_id'].">
					<img src=\"multimedia/trash.png\" alt=\"supprimer\" height=\"30\"></a>
				</td>";
			echo "</tr>";
		}
		echo "</table>";	
		mysqli_close($con);
		?>
		
	</body>
</html>

<?php
	include 'footer.php'
?>