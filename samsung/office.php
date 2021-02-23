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
			<div class="compte">
				<center>Back Office</center>
			</div>
			<div class="form4">	
					<legend>Gérer les produits</legend>
					<form action="ajouter.php">
						<input class="boutonoffice" type="Submit" name="modifier" value="Ajouter un nouveau produit"/>
					</form>
					<form action="modifier.php">
						<input class="boutonoffice" type="Submit" name="ajouter" value="Modifier la quantité d'un produit"/>
					</form>
					<form action="prix.php">
						<input class="boutonoffice" type="Submit" name="ajouter" value="Modifier le prix d'un produit"/>
					</form>
					<form action="supprimer.php">
						<input class="boutonoffice" type="Submit" name="ajouter" value="Supprimer un produit"/>
					</form>
			</div>
			<div class="form4">	
					<legend>Modifier les données d'un client</legend>
					<form action="admin.php">
						<input class="boutonoffice" type="Submit" name="ajouter" value="Ajouter un nouvel utilisateur ADMIN"/>
					</form>
					<form action="pseudo.php">
						<input class="boutonoffice" type="Submit" name="modifier" value="Modifier le pseudo d'un utilisateur"/>
					</form>
					<form action="mdp.php">
						<input class="boutonoffice" type="Submit" name="modifier" value="Modifier le mot de passe d'un utilisateur"/>
					</form>
					<form action="email.php">
						<input class="boutonoffice" type="Submit" name="ajouter" value="Modifier l'email d'un utilisateur"/>
					</form>
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