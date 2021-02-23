<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/style.css" media="all" />
		<title>Samsung</title>
		<meta charset="utf-8">
	</head>
	<body>
	<?php
		session_start();
	?>
		<div id="haut"> </div>
		<div id = "contenu-page">
			<!-- EnTete -->
			<div class="header">
				<div class="logo"><img src="images/LogoSamsung.png" alt="Samsung" height="30%" width="100px" /></div>
				<div class="navbar"  id="txtnavbar">
					<a href="accueil.php">Accueil</a>
					<a href="a propos.php">à propos</a>
					<a href="produit.php">Produits</a>
					<?php
					if (isset($_SESSION['identifiant']) && isset($_SESSION['mdpUtilisateur'])){
						$admin = $_SESSION['admin'];
						if($admin == "1"){
						?>
						<a href="office.php">Back office</a>
						<?php
						}
					}
					?>
				</div>
				<div class="icones">
					<a href="compte.php"><img src="images/compte.png" alt="Mon Compte" height="35px" width="35px" /></a>
					<a href="panier.php"><img src="images/panier.png" alt="Panier" height="35px" width="35px" /></a>
				</div>
			</div>
			<div class = "fold">
				<div class = "catFold">
					<div class = "imgFold"><img  src="images/GalaxyFold.png" width="100%" height="100%"/></div>
					<div class = "text-fold"><p>Galaxy Fold</p></div>
				</div>
				<a href="fold.php" class= "boutonFold">Découvrir</a>
			</div>
			<p id="nvGalaxy">Découvrez les nouveautés Galaxy</p>
			<div class = "produits">
				<div class = "produit">
					<a href="s10.php"><div class = "imgproduit"><img  src="images/s10+.png" width="100%" height="100%"/></div></a>
					<div class = "text-produit"><p>Galaxy S10+</p></div>
				</div>
				<div class = "produit">
					<a href="note10.php"><div class = "imgproduit"><img  src="images/note10.png" width="100%" height="100%"/></div></a>
					<div class = "text-produit"><p>Galaxy Note 10</p></div>
				</div>
				<div class = "produit">
					<a href="watch2.php"><div class = "imgproduit"><img  src="images/Gwatch.png" width="100%"height="100%"/></div></a>
					<div class = "text-produit"><p>Galaxy Watch Active 2</p></div>
				</div>
			</div>
			
		</div>
		<!--Bas de Page du site-->
		<div id="BasDePage">			
			<div id = "imgBasDP">
				<a href="https://www.samsung.com/fr" > <img title="Site officiel de Samsung" src="images/w-www.png" height="35px" width="35px"></a>
				<a href="#haut"> <img title="Retour en haut de page" src="images/w-up-arrow.png" height="35px" width="35px"></a>
			</div>
		</div>
	</body>
</html>