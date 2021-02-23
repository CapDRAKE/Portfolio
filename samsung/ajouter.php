<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/style.css" media="all" />
		<script type= "text/javascript" src="js/script.js"></script>
		<title>Samsung</title>
		<meta charset="utf-8">
	</head>
	<body>
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
					session_start();
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
			<!--Fin EnTete -->
			<div class="compte">
				<center>Ajouter un produit</center>
			</div>
		<!--Début formulaire du nouveau produit-->
			<div class="formulaire">	
				<form class= "form" name="formulaire" action="" method="POST" onSubmit="return verif_formulaire()">
					<fieldset > 
						<legend>Nouveau produit</legend>
						<input class="inputinfo" type="text" name="nom" placeholder="Nom du produit"/>
						<input class="inputinfo" type="text" name="prix" placeholder="Prix du produit"/>
						<input class="inputinfo" type="text" name="desc" placeholder="Description du produit"/>
						<input class="inputinfo" type="text" name="image" placeholder="lien de l'image du produit"/>
						<input class="inputInfo" type="text" name="quantité" placeholder="Quantité du produit"/>
						<input class="valider" type="Submit" name="submit" placeholder="Ajouter"/>
					</fieldset>
				</form>
			</div>
			<!--PHP d'insertion du produit dans la base de donnée -->
				<?php
						if ($bdd=mysqli_connect('localhost','Bastien','zNoi32~4','marchand')){
						}
						if(isset($_POST['nom'])&&isset($_POST['prix'])&&isset($_POST['quantité'])){
							$nom = $_POST['nom'];
							$prix = $_POST['prix'];
							$quantité = $_POST['quantité'];
							$desc = $_POST['desc'];
							$image = $_POST['image'];
							$insertion = mysqli_query($bdd, "INSERT INTO produits VALUES ('', '$nom', '$desc', '$prix', '$image', '$quantité');");
							echo "<script>alert(\"Produit bien ajouté\")</script>";
						}
						else{
							echo "<script>alert(\"Merci de saisir le produit à ajouter\")</script>";
						}
					?>
				<!--Fin du PHP d'insertion du nouveau produit dans la base de donnée -->
			<!--Fin formulaire du nouveau produit -->
			

		<!--Bas de Page du site-->
		<div id="BasDePage">			
			<div id = "imgBasDP">
				<a href="https://www.samsung.com/fr" > <img title="Site officiel de Samsung" src="images/w-www.png" height="35px" width="35px"></a>
				<a href="#haut"> <img title="Retour en haut de page" src="images/w-up-arrow.png" height="35px" width="35px"></a>
			</div>
		</div>
		<!--Fin bas de page du site-->
	</body>
</html>