<?php
	session_start();
	//tester si la session du client n'est pas encore terminée, on laisse le client accéder à l'application
	
	//si la session de l'utilisateur existe, il n'oblige pas de s'authentifier et il donne accès à l'application
	if (isset($_SESSION['username'])){
		header("Location: admin_panel.php");
		exit();
	} 
	
	//quand le client appluie sur le bouton login.
	if (isset($_POST['sub_btn'])){
		
		//trouver si client et son mot de passe sont corrects dans la base de données.
		$username = $_POST['username'];
		$password = $_POST['password'];	
		
		
		//Tester si username et mot de passe est correct
		if(($username == "admin") AND ($password == "admin")){
			$_SESSION['username']=$username;			
			header("Location: admin_panel.php");			
			exit();
		}else{  // dans le cas contraire on mettre l'état error dans une variable de session et on relance la page
			$_SESSION['message'] = "<center class=\"alert\">Mauvais username ou mot de passe</center><br>";
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
			
		</header>
		<main>
			<!--banner-->
			<section class="index-banner">
				<div class="vertical-center">
					<h2> Login Administrateur </h2>
				</div>
			</section>
		</main>

			</nav>
		</header>
		<!-- début menu -->
		<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale1.0">
	   <title>Login Administrateur</title>
	   <link rel="stylesheet" type="text/css" href="contact.css">	   
</head>
<nav>
      <section class="contact">
	  <div class="content">
	      <h2>Connexion</h2>
		  </div>
		  
		  <?php 
	
	//il est affiché quand le client ou son mot de passe ne sont pas corrects.
	if (isset($_SESSION['message'])){
		echo $_SESSION['message'];
		unset($_SESSION['message']);
	}
	     ?>
		  
			 <div class="contactForm">
		    <form class="login-email" action="login.php" method="POST">
			   
			   <div class="inputBox">
			       <input type="text"  name="username" required="required">
				   <span>Identifiant</span>
				</div>
				
				<div class="inputBox">
				    <input type="password" name="password" required="required">
					<span>Mot de passe</span>
					<div class="inputBox">
				   <input type="submit" name="sub_btn" value="Se Connecter">
				 </div>
				
			  </form>
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