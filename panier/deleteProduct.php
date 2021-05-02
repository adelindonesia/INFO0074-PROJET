<!DOCTYPE html>
<?php include("database.php"); ?>  
<?php 
session_start();

// Supprimer une commande
if(isset($_POST['oui'])) {
    // 
    $productName = $db->prepare("SELECT * FROM panier WHERE id_membre = ?");
    $productName->execute(array($_GET['id_membre']));
    $productName = $productName->fetch();
    
    $deleted = $db->prepare("DELETE FROM panier WHERE nom_produit = ?");
    $deleted->execute(array($productName['nom_produit']));
    header("Location:panier.php?id_membre=".$_GET['id_membre']);    
    } elseif(isset($_POST['non'])) {
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
                        <span>Etes vous sûr de supprimer votre produit ?</span>
                        <input name="oui" type="submit" value="Oui">
                        <input name="non" type="submit" value="Non">
                
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