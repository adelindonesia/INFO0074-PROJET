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
								<a href="signup.php">Connexion</a>
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

			

		<head>
  <script src="https://kit.fontawesome.com/c611c1c655.js" crossorigin="anonymous"></script>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale1.0">
	   <title>Contactez - nous</title>
	   <link rel="stylesheet" type="text/css" href="contact.css">	   
</head>

<nav>
<?php
 // définir les variables et valeurs nulles
$nomErr = $emailErr = $messageErr = "";
$nom = $email = $message = "";

  if (empty($_POST["nom"])) {
    $nomErr = "";
  } else {
    $nom = test_input($_POST["nom"]);
    // vérifier si le nom contient juste des lettres
    if (!preg_match("/^[a-zA-Z-' ]*$/",$nom)) {
      $nomErr = "invalide";
    }
  }

if (empty($_POST["email"])) {
    $emailErr = "";
  } else {
    $email = test_input($_POST["email"]);
    // vérifier  l'e-mail 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = " invalide";
    }
  }
  
   if (empty($_POST["message"])) {
    $message = "";
  } else {
    $message = test_input($_POST["message"]);
  }
  function test_input($data) 
  {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
}
 ?>
 
      <section class="contact">
	  <div class="content">
	      <h2>Contactez-nous</h2>
		  </div>
		  <div class="container">
		    <div class="contactInfo">
			  <div class="box">
			     <div class="icon"><i class="fas fa-map-marker"></i></div>
				  <div class="text">
				    <h3>Adresse</h3>
					<p>72 Rue de HEC,<br>Liège</p>
				</div>
			</div>
			<div class="box">
			   <div class="icon"><i class="fas fa-mobile"></i></div>
			   <div class="text">
			      <h3>Téléphone</h3>
				  <p>36 438299238</p>
				 </div>
				</div>
		    <div class="box">
			   <div class="icon"><i class="fas fa-at"></i></div>
			   <div class="text">
			      <h3>Email</h3>
				  <p>Groupe72@uliege.com</p>
				 </div>
				</div>
			 </div>
			
			 <div class="contactForm">
			     <h2>Envoyer le Message</h2>
				  <div class="inputBox">
				  <form action="contact.php" method="POST">
				    <input type="text" name="nom" required="required">
					<span class="error"><?php echo $nomErr;?>Nom Complet</span>
				</div>
				<div class="inputBox">
				    <input type="text" name="email" required="required">
					<span class="error"><?php echo $emailErr;?>Email</span>
				</div>
				<div class="inputBox">
				   <textarea required="required"></textarea>
				   <span class="error"><?php echo $messageErr;?>Saissisez votre Message ici...</span>
				</div>
				<div class="inputBox">
				  <input type="submit" name="sub_btn" value="envoyer">
			  </form>
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