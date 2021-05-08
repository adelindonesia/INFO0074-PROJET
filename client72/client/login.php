<?php	
	session_start();
	//tester si la session du client n'est pas encore terminée, on laisse le client accéder à l'application
	if (isset($_SESSION['email'])){
		header("Location: accueil.php");				
		exit();
	}
	
	//quand le client appluie sur le bouton login.
	if (isset($_POST['sub_btn'])){		
		require_once "config.php"; 
		
		//trouver si le client et son mot de passe sont corrects dans la base de données.
		$email = $_POST['email'];
		$password = $_POST['password'];	
		$query = "SELECT * FROM client WHERE email = '" .$email. "' AND password = '".$password."'";
		$result = mysqli_query($con, $query);
		$nbLigne = mysqli_num_rows($result); 
		
		mysqli_close($con); //fermer la connection
		
		echo $query;
		//$nbLine > 0, c'est à dire si l'email et mot de passe du client sont corrects. On redirige vers la page mon compte
		if($nbLigne > 0){
			$_SESSION['email']=$email;
			$_SESSION['cart']=array();
			header("Location: mon_compte.php");
			exit();
		
		echo $query;
			
	 //}else{  // dans le cas contraire, on met message d'erreur dans une variable de session et on relance la page
			$_SESSION['message'] = "<center class=\"alert\">Mauvais email Client ou mot de passe</center><br>";
			header("Location: login.php");				
			exit();
		}	
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
								<a href="signup.php">Créer un compte</a>
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

			</nav>
		</header>
		<!-- début menu -->
		<head>
  <script src="https://kit.fontawesome.com/c611c1c655.js" crossorigin="anonymous"></script>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale1.0">
	   <title>Connexion</title>
	   <link rel="stylesheet" type="text/css" href="contact.css">	   
</head>
<nav>
      <section class="contact">
	  <div class="content">
	      <h2>Connexion</h2>
		  </div>
		  
		  
       <?php 	
//Le message est affiché quand l'email ou son mot de passe ne sont pas corrects.
   if (isset($_SESSION['message'])){
   echo $_SESSION['message'];
   unset($_SESSION['message']);
	}
       ?>	
		  
			 <div class="contactForm" >
			     <form class="login-email" action="login.php"  method="POST" >
			   <div class="inputBox">
			   <div class="icon"><i class="fas fa-at"></i></div>
			       <input type="email"  name="email" required="required">
				   <span>Email</span>
				</div>
				<div class="box">
				<div class="icon"><i class="fas fa-key"></i></i></div>
				</div>
				<div class="inputBox">
				    <input type="password" name="password" required="required">
					<span>Mot de passe</span>
				<div class="inputBox">
				   <input type="submit" name="sub_btn" value="Se Connecter">
				</div>
				<p class="login-register-text"><i>Vous n'avez pas encore de compte?<a href="signup.php"></i> Créez un compte ici</a></p>
			  </form>
		 </div>
	  </nav>
	  

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