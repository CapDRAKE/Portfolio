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
			</br>	
			<img id="imgPropos" src = "images/logopropos.png">
			</br>
			<HR size="3" width="60%" color="#12279e">
				<h1><center>A propos de Samsung...</center></h1>
			<HR size="3" width="60%" color="#12279e">
			</br>
			<p class="txt">
			Le Groupe Samsung est un groupe Coréen dont le nom de la marque veut dire "Trois étoiles". Plusieurs sociétés importantes s'y rattachent, dont l'entreprise d'électronique Samsung Electronics, connue du grand public par les téléviseurs ou la téléphonie mobile.
			Le groupe est à la tête de 59 sociétés, de média numériques, d'écrans, de moniteurs et de semi-conducteurs. 
			La société est également présente dans le secteur du BTP avec notamment la construction du gratte-ciel Burj Khalifa, le nucléaire, les chantiers navals, les parcs de loisirs, l'armement, les assurances et la grande distribution.
			</p>
			
			<p class="txt"></br>
			Samsung est particulièrement reconnu pour ses smartphonnes. 
			Le groupe est actuellement le leader dans le monde du smartphone. Il possède une gamme très large de produits allant de l'entré de gamme, en passant par le moyen gamme, jusq'au haut et ultra haut de gamme.
			Ils sont parvenu à toucher tous les marchés et à vendre leurs smartphones partout dans le monde. 
			</p>
			<p class="txt"></br>
			Le logo du groupe Samsung a beaucoup changé au fil des années.
			</p>
			<HR size="3" width="60%" color="#12279e">
			<img id="imgPropos" src= "images/logo.png">
			<HR size="3" width="60%" color="#12279e">
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