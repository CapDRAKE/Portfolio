<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/style.css" media="all" />
		<script type= "text/javascript" src="js/scriptlogin.js"></script>
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
					if(session_id() == '') {
						session_start();
					}
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
			<!-- fin EnTete -->
		
			<br/>
			<div class="compte">
			<center>Compte</center>
			</div>
			
			<!--On vérifie ici si l'utilisateur est connecté ou non-->
			<?php
				if (isset($_SESSION['identifiant']) && isset($_SESSION['mdpUtilisateur'])){
			?>
			<!--Fin verification-->
			
			<h1><center>Bienvenue ! Vous êtes désormais connecté !</center></h1>
			<center>Tu veux déjà partir ? </center>
			</br>
			
			<!--Bouton pour la deconnexion-->
			<div class="formulaire">
				<form action="deco.php" method="POST">
					<input class="boutonInsc"type="submit" value="Deconnexion" name="Deconnexion">
				</form>
			</div>
			<!--Fin bouton deconnexion-->
			<h2><center>Modifier votre mot de passe</h2></center>
			<!--Bouton pour changer le mdp-->
			<div class="formulaire">
				<form action="changemdp.php" method="POST">
					<input class="boutonInsc"type="submit" value="Modifier" name="mdp"></div>
				</form>
			</div>
			<!--Fin bouton de changement de mdp-->
						
			<!-- Si l'utilisateur n'est pas connecté on rentre alors dans le formulaire de connexion ci-dessous-->
			<?php
				}
				else{
			?>
			
			<!-- Formulaire-->
			<div class="formulaire">
				<form class= "form" action="connexion.php" method = "POST" name="formulaire" onSubmit="return verif_formulaire()">
					<fieldset class="fieldset">
						<legend>Connexion</legend>
						<input class="inputInfo" type="text" name="identifiant" placeholder="Identifiant"/>
						<input class="inputInfo" type="password" name="mdp" placeholder="Mot de passe"/>
						<input class="valider" type="Submit" name="submit"/>
					</fieldset>
				</form>
			<!--Fin formulaire--> 
			
			
			<br/>
			Pas encore inscrit?
			<br/><br/>
		
			<!--Bouton d'inscription-->
				<a href="inscription.php"><div class="boutonInsc">Créer un compte</div></a>
			<!-- Fin bouton inscription-->
			
			<?php
				}
			?>
			
			</div>
			<br/>
		</div>
		<!-- PHP pour connecter l'utilisateur -->
				
		<!-- Fin php partie connexion-->
		
		<!--Bas de Page du site-->
		<div id="BasDePage">			
			<div id = "imgBasDP">
				<a href="https://www.samsung.com/fr" > <img title="Site officiel de Samsung" src="images/w-www.png" height="35px" width="35px"></a>
				<a href="#haut"> <img title="Retour en haut de page" src="images/w-up-arrow.png" height="35px" width="35px"></a>
			</div>
		</div>
	</body>
</html>