<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<title>Client</title>
		<link rel="stylesheet" type="text/css" href="style.css">
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
	    				<li><a href="mon_compte.php">Mon compte</a></li>
	    				<li><a href="">Produits</a></li>
	    				<li><a href="">Panier</a></li>
	   					<li><a href="signout.php">Déconnexion</a></li>
	  				</ul>
				</nav>
			</div>	


			<div class="contenu">
				<!-- <form name="mon_compte" action="mon_compte.php"  method="POST">
				   	Nom
				   	<br>
				       <input type="text" name="nom" required="required">
					<br>
					<br>
					Prénom
					<br>
				       <input type="text" name="prenom" required="required">
					<br>
					<br>
				    Email
				    <br>
				       <input type="email" name="email" required="required">
					<br>
					<br>
					Date de Naissance
					<br>
				       <input type="date" name="birthdate" required="required">
					<br>
					<br>
					GSM
					<br>
				       <input type="text" name="GSM" required="required">
					<br>
					<br>
					Mot de Passe(7 caract&egrave;res max.)
					<br>
					    <input type="password" name="password" required="required">
					<br>
					<br>
					Confirmer le mot de passe
					<br>
					    <input type="password" name="passverif" required="required">
					<br>
					<br>
					   <input type="submit" name="save_btn" value="modifier">
					 <br>
					 <br>
					 	<input type="reset" name="res_btn" value="Réinitialiser">
				</form>		
			</div> -->
			<?php
				if (isset($_POST['email'])) {	
				// Etape 1 :
				$server = "localhost";
				$username = "root";
				$passeword = "";
				$db = "groupe_72.sql";

				$con = mysqli_connect($server,$username,$passeword,$db);
				if (mysqli_connect_errno()){
					echo "Failed to connect to MySQL: " . mysqli_connect_error();
				}



				// Etape 2 : Récuperer les informations de cette addresse email
				$email = $_POST['email'];
				$password = $_POST['password'];	
				$query = "SELECT * FROM client WHERE email = '" .$email. "' AND password = '".$password."'";
				$result = mysqli_query($con, $query);
				$nbLigne = mysqli_num_rows($result);


				if($nbLigne == 0){  //cette addresse email n'existe pas
					die("<center class=\"alert\">Cette addresse email '.$email.' est inexistante.</center>");
				}else{   //récupérer les information dans le cas existant
					$nom = $_POST['nom'];
					$prenom= $_POST['prenom'];
					$email= $_POST['email'];			
					$birthdate = $_POST['birthdate'];
				    $GSM= $_POST['GSM'];
				    $password= $_POST['password'];
					$passverif= $_POST['passverif'];
				}


				//Etape 3 : si utilisateur clique sur le bouton Modifier 
				if (isset($_POST["save_btn"])){
					$nom = $_POST['nom'];
					$prenom= $_POST['prenom'];
					$email= $_POST['email'];			
					$birthdate = $_POST['birthdate'];
			        $GSM= $_POST['GSM'];
			        $password= $_POST['password'];
					$passverif= $_POST['passverif'];

					if($password == $passverif){	
					} else {
						echo"<script>alert('mot de passe pas identiques.')</script>";
					}
				
				   //On verifie si le mot de passe a 7 caracteres au plus
				    if(strlen(['password'])>=7){
					}
					
					//on verifie si l'âge est >= à 16 ans
					if ($_POST["birthdate"] >= 31-12-2005){
						echo "<h3 style=\"color: blue\"> Vous pouver acheter de la bi&egrave;re!!</h3>";
					}else{
						echo "<h3 style=\"color:red\"> Vous ne pouvez pas acheter de la bi&egrave;re!!</h3>";
					}

						
					if($_POST["nom"] == ''|| $_POST["prenom"] == ''|| $_POST["email"] == ''|| $_POST["birthdate"] == ''|| $_POST["GSM"] == ''|| $_POST["password"] == ''|| $_POST["passverif"] == ''){
						echo "<center>Nom, prénom, email, birthdate, GSM, password ou passverif ne peuvent pas être vides.</center>";
					}else{
						if (!mysqli_query($con,"UPDATE Utilisateur SET nom='".$nom."',prenom='".$prenom."',
						email='".$email."',birthdate='".$birthdate."',GSM='".$GSM."',password='".$password."' WHERE email = '".$email."'")){
							die('Erreur: ' . mysqli_error($con)); 
						}
						echo "<center>Utilisateur ".$email." modifié dans la base de données</center>";
						}			
					}


					echo "<form name=\"mon_compte\" action=\"mon_compte.php?email=$email\" method=\"post\">";
					echo "<table align=\"center\">";
					echo "<tr><td align=right>Email: </td><td>".$email."<input type=\"hidden\" name=\"email\" value=\"".$email."\"></td></tr>"; 
					echo "<tr><td align=right>Nom: </td><td><input type=\"text\" name=\"nom\" value=\"".$nom."\"></td></tr>"; 
					echo "<tr><td align=right>Prénom: </td><td><input type=\"text\" name=\"prenom\" value=\"".$prenom."\"></td></tr>";
					echo "<tr><td align=right>Date de naissance: </td><td><select name=\"UER\" value=\"".$birthdate."\">";
					echo "<tr><td align=right>GSM: </td><td><input type=\"text\" name=\"GSM\" value=\"".$GSM."\"></td></tr>";
					echo "<tr><td align=right>Passeword: </td><td><select name=\"UER\" value=\"".$password."\">";
					echo "<tr><td align=right>Vérification du password: </td><td><select name=\"UER\" value=\"".$passverif."\">";

					echo "</select>";
					echo "</td></tr>";			
					echo "<tr><td align=right><input type=\"submit\" name=\"save_btn\" value=\"Modifier\"></td><td><input type=\"reset\" name=\"res_btn\" value=\"Réinitialiser\"></td></tr>";
					echo "</table>";
					echo "</form>";						
					
					echo "<br>";
					echo "<br>";
				?>

				
			<div class="footer">
				<?php
					include 'footer.php'
				?>
			</div>
		</div>
	</body>
</html>