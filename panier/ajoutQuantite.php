<!DOCTYPE html>
<?php include("database.php"); ?>  
<?php 
session_start();



// Ajouter un produit en plus
    $product = $db->prepare("SELECT * FROM panier WHERE id_membre = ?");
    $product->execute(array($_GET['id_membre']));
    $product = $product->fetch();


if(isset($_POST['oui'])) {
    // 
    $product = $db->prepare("SELECT * FROM panier WHERE id_membre = ?");
    $product->execute(array($_GET['id_membre']));
    $product = $product->fetch();
    
    $quantite = $product['quantite'] + 1;
    $total = $product['total'] + $product['prix'];
    
    
    $update = $db->prepare("UPDATE panier SET quantite = ?, total = ? WHERE id_membre = ?");
    $update->execute(array($quantite, $total, $_GET['id_membre']));
    header("Location:panier.php?id_membre=".$_GET['id_membre']);  
    
    // Diminuer
    

    } 
    
    
    elseif($product['quantite'] >= 1 && isset($_POST['non'])) {
    $product = $db->prepare("SELECT * FROM panier WHERE id_membre = ?");
    $product->execute(array($_GET['id_membre']));
    $product = $product->fetch();
    
   
    
    $quantite = $product['quantite'] - 1;
    $total = $product['total'] - $product['prix'];
    
    $update = $db->prepare("UPDATE panier SET quantite = ?, total = ? WHERE id_membre = ?");
    $update->execute(array($quantite, $total, $_GET['id_membre']));
    header("Location:panier.php?id_membre=".$_GET['id_membre']);
    }


?>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
        
		<title>Panier</title>
	</head>
	
	<body>
			<header>
				<a href="index.php" ><img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
				<nav>
					<ul>
						<li><a href="./produit.php">Produits</a></li>
						<li><a href="./contactez_nous.php">Contactez-nous</a></li>
						<li><a href="./login.php">Login</a></li>
						<li><a href="./panier.php?id_membre=1">Panier</a></li>
					</ul>
				</nav>
			</header>
			<!--banner-->
			<main>
				<section class="index-banner">
					<div class="vertical-center">
						<h2> CLIQUEZ ET COLLECTEZ </h2>
					</div>
				</section>
				
					
                    <h2 id="panier">Votre panier</h2>
                   
                        <div class="result">
                        <form method="POST">
                        <span>Voulez-vous ajouter un produit en plus ?</span> <div class="choice"><br>
                        <input name="oui" type="submit" value="Ajouter"> <br>
                        <input name="non" type="submit" value="Diminuer"></div>
                
                        </form>
                
                        </div>
                    
            
   
                        </div>
                    </div>
                    </section> 
                
                    
                    
                    
                    
					
				
			</main>
			
			<footer>
				<ul class="footer-links">
					<li><a href="/accueil.php">Home</a></li>
					<li><a href="/contactez_nous.php">Contact</a></li>
				</ul>
				<div class="footer-sm">
					<a href="">
						<img src="multimedia/fb_icone.jpg" alt="image facebook icone" />
						<img src="multimedia/insta_icone.jpg" alt="image instagram icone" />
						<img src="multimedia/linkedin_icone.jpg" alt="image linkedin icone" />
					</a>
				</div>
			</footer>
			
		</div>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
	</body>
</html>