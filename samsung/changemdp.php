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
					if (isset($_SESSION['identifiant']) && isset($_SESSION['mdpUtilisateur'])){
						$id = $_SESSION['id'];
						if($id == "1"){
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
			<!--Fin EnTete-->
			
			<!--Titre-->
			<div class="compte">
			<center>Changer de mot de passe</center>
			</div>
			<!--Fin titre-->
			
			<!--Formulaire de modification mdp-->
			<div class="formulaire">
				<form class= "form" action="" method = "POST" name="formulaire" onSubmit="return verif_formulaire()">
					<fieldset class="fieldset">
						<legend>Modification</legend>
						<input class="inputInfo" type="password" name="mdp" placeholder="Nouveau mot de passe"/>
						<input class="inputInfo" type="password" name="mdp2" id="mdp2" placeholder="Confirmer nouveau mot de passe"/>
						<input class="valider" type="Submit" name="submit"/>
					</fieldset>
				</form>
			</div>

			<!--Fin formulaire-->
			
			<!--PHP pour modification du mdp-->
			<?php
				session_start();
				if ($bdd=mysqli_connect('localhost','Bastien','zNoi32~4','marchand')){
				}	
					
				if(isset($_POST['mdp']) && isset($_POST['mdp2'])){
					$mdp = $_POST['mdp'];
					$changement = mysqli_query($bdd, "UPDATE utilisateur SET mdpUtilisateur = sha1('$mdp') WHERE identifiant = '".$_SESSION['identifiant']."';");
					echo"<script>alert(\"Votre mot de passe a bien été modifié !\")</script>";
				}
				else{
					echo"<script>alert(\"Merci de saisir un nouveau mot de passe \")</script>";
				}
			?>
			<!--Fin PHP pour modificiation du mdp-->

			
		</div>
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