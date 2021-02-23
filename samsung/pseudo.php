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
				<center>Modifier un identifiant</center>
			</div>
		<!--Début formulaire de modification du pseudo -->
			<div class="formulaire">	
				<form class= "form4" name="formulaire" action="" method="POST" onSubmit="return verif_formulaire()">
					<fieldset > 
						<legend>Modifier un identifiant</legend>
						<input class="inputinfo" type="text" name="nom" placeholder="Nom de l'utilisateur"/>
						<input class="inputinfo" type="text" name="prénom" placeholder="Prénom de l'utilisateur"/>
						<input class="inputInfo" type="text" name="pseudo" placeholder="Nouvel identifiant"/>
						<input class="valider" type="Submit" name="submit" placeholder="Modifier"/>
					</fieldset>
				</form>
			</div>
			<!--PHP de modification de l'identifiant-->
				<?php
						if ($bdd=mysqli_connect('localhost','Bastien','zNoi32~4','marchand')){
						}
						if(isset($_POST['nom'])&&isset($_POST['prénom'])&&isset($_POST['pseudo'])){
							$nom = $_POST['nom'];
							$prénom = $_POST['prénom'];
							$pseudo = $_POST['pseudo'];
							$insertion = mysqli_query($bdd, "UPDATE utilisateur SET identifiant ='".$pseudo."' WHERE nomUtilisateur = '".$nom."' AND prenomUtilisateur = '".$prénom."';");
							echo "<script>alert(\"Pseudo bien modifié\")</script>";
						}
						else{
							echo "<script>alert(\"Merci de saisir le nom et prénom et le nouveau pseudo de l'utilisateur\")</script>";
						}
					?>
				<!--Fin du PHP de modification du pseudo -->
			<!--Fin formulaire du nouveau pseudo -->
			

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