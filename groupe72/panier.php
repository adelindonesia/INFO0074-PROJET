<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">
        
		<title>Panier</title>
	</head>
	
	<body>
			<header>
				<a href="accueil.php" ><img src="multimedia/Logo.jpg" alt="Logo : Groupe 72" class="header-brand"/></a>
				<nav>
					<ul>
						<li><a href="./produit.php">Produits</a></li>
						<li><a href="./contactez_nous.php">Contactez-nous</a></li>
						<li><a href="./login.php">Login</a></li>
						<li><a href="./panier.php">Panier</a></li>
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
                    <section class="products-container">
                        <div class="product-header">
                        <h5 class="product-title">Produit</h5>
                        <h5 class="price">Prix</h5>    
                        <h5 class="quantity">Quantité</h5>
                        <h5 class="total">Total</h5>
                        </div>
                        
                        </section>
                  
                
                   <section class="product-container">
                    <div class="product-header">
                    <div class="product-title">
                    <ion-icon name="trash"></ion-icon>
				    <img  src="multimedia/biere.jpg" alt="produit" width="150px" height="150px"/>
                    </div>
                    <div class="price">6€</div>
                    <div class="quantity"><ion-icon name="caret-back"></ion-icon>1<ion-icon name="caret-forward"></ion-icon>
                        </div>
                    <div class="total">6€
            
   
                        </div>
                    </div>
                    </section> 
                    
                    <div class="paiement">
                    <img src="multimedia/paiement-securise.webp" alt="mode-paiement"/ width="400px" height="200px">
                    </div>
                  
					
				
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