<?php
	session_start();	
	//le client doit d'abord se déconnecter 
	if (isset($_SESSION['email'])){
		header("Location: accueil.php");				
		exit();
	}
	
	//customer clique sur le bouton Créer 
	if (isset($_POST['sub_btn'])){				
		require_once 'config.php';
		
		//récupérer les données du formulaire
		$nom = $_POST['nom'];
		$prenom= $_POST['prenom'];
		$email= $_POST['email'];			
		$birthdate = $_POST['birthdate'];
        $GSM= $_POST['GSM'];
        $password= $_POST['password'];
		$passverif= $_POST['passverif'];
		
		//On verifie si le mot de passe et celui de la verification sont identiques
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
   	
		
		//ajouter un nouveau client dans la base de données
		$query = "INSERT INTO client (nom, prenom, email, birthdate, GSM, password) VALUES ('$nom','$prenom','$email','$birthdate','$GSM','$password')";
		
		echo $query;
		if (mysqli_query($con,$query)){
			//On met le message dans la session
			$_SESSION['message'] = "<center><h3 style=\"color:blue\">Votre compte ".$email."  a bien été crée. Merci!</h3></center><br>";		
		}else{
			//On met le message dans la session
			echo mysqli_errno();
			$_SESSION['message'] = "<center class=\"alert\" h3 style=\"color:red\">Cet utilisateur ".$email."  a déjà un compte!</center> <br>";
		}			
		
		mysqli_close($con);	
		
		//redirige vers la même page
		header("Location: signup.php");			
		exit();
	}	
?>


<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">	
		<title>Connexion</title>
		<link rel="stylesheet" type="text/css" href="accueil.css">
	</head>
	<!--Tuto :https://www.youtube.com/watch?v=kbLfWKGVsMQ&ab_channel=DaniKrossing-->
	<body>
	<header>
			<img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
			<nav>
				<ul>
					
						<ul>
						     <li>
								<a href="accueil.php">Accueil</a>
							</li>
						
							<li>
								<a href="login.php">Se connecter</a>
							</li>
						</ul>
					
					
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

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale1.0">
	   <title>Signup</title>
	   <link rel="stylesheet" type="text/css" href="contact.css">   
</head>
<nav>
      
		 <section class="contact">
	  <div class="content">
	      <h2>Créez un compte</h2>
		  </div>
		  <?php 
	//afficher le message de la session
	if (isset($_SESSION['message'])){
		echo $_SESSION['message']; 
		unset($_SESSION['message']);
	}
	      ?>
		  
			 <div class="contactForm">
			     <form class="login-email" action="signup.php"  method="POST">
			   <h2>Créer mon compte</h2>
			   <div class="inputBox">
			       <input type="text" name="nom" required="required">
				   <span>Nom</span>
				</div>
				<div class="inputBox">
			       <input type="text" name="prenom" required="required">
				   <span>Prénom</span>
				</div>
				<div class="inputBox">
			       <input type="email" name="email" required="required">
				   <span>Email</span>
				</div>
				<div class="inputBox">
			       <input type="date" name="birthdate" required="required">
				   <span>Date de Naissance</span>
				</div>
				<div class="inputBox">
			       <input type="text" name="GSM" required="required">
				   <span>GSM</span>
				</div>
				<div class="inputBox">
				    <input type="password" name="password" required="required">
					<span>Mot de Passe(7 caract&egrave;res max.)</span>
				</div>
				<div class="inputBox">
				    <input type="password" name="passverif" required="required">
					<span>Confirmer le mot de passe</span>
				</div>
				
				<div class="inputBox">
				   <input type="submit" name="sub_btn" value="Créer">
				</div>
				<p class="login-register-text"> <i>Vous avez déjà un compte?</i><a href="login.php"> Connectez-vous ici</a></p>
			  </form>
		 </div>
	  </nav>
	  </section>
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
		<!----fin de pied--->
		
		
	</body>
</html>