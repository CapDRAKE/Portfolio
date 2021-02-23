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
		
			<br/>
			
			<!--Titre-->
			<div class="compte">
			<center>Création du compte</center>
			</div>
			<!--Fin titre-->
			
			<!--Début formulaire d'inscription-->
			<div class="formulaire">	
				<form class= "form" name="formulaire" action="" method="POST" onSubmit="return verif_formulaire()">
					<fieldset > 
						<legend>Inscription</legend>
						<input class="inputinfo" type="text" name="prenom" placeholder="Prénom"/>
						<input class="inputinfo" type="text" name="nom" placeholder="Nom"/>
						<input class="inputInfo" type="text" name="identifiant" placeholder="Identifiant"/>
						<input class="inputInfo" type="text" name="email" placeholder="Adresse e-mail"/>
						<input class="inputInfo" type="password" name="mdp" placeholder="Mot de passe"/>
						<input class="inputInfo" type="password" name="mdp2"  id="mdp2" placeholder="Confirmer le mot de passe"/> 
						<input class="valider" type="Submit" name="submit"/>
					</fieldset>
				</form>
			</div>
			<!--Fin formulaire d'inscription -->
			
		</div>
				<!--PHP d'insertion de l'inscription dans la base de donnée -->
				<?php
						if ($bdd=mysqli_connect('localhost','Bastien','zNoi32~4','marchand')){
						}
						if(isset($_POST['prenom'])&&isset($_POST['nom'])&&isset($_POST['identifiant'])&&isset($_POST['email'])&&isset($_POST['mdp'])&&isset($_POST['mdp2'])){
							$nom = $_POST['nom'];
							$prenom = $_POST['prenom'];
							$identifiant = $_POST['identifiant'];
							$email = $_POST['email'];
							$mdp =  $_POST['mdp'];
							$verif = mysqli_query($bdd , "SELECT identifiant FROM Utilisateur WHERE identifiant = '".$identifiant."';");
							$donnee = mysqli_fetch_assoc($verif);
							if($identifiant == $donnee['identifiant']){
								echo "<script>alert(\"Cet identifiant est déjà pris ! Essayez en un autre\")</script>";
							}
							else{
								$insertion = mysqli_query($bdd, "INSERT INTO Utilisateur VALUES ('', FALSE, '$nom', '$prenom', '$identifiant', '$email', sha1('$mdp'));");
								echo "<script>alert(\"Ton compte est créé ! Retourne sur la page de connexion pour te connecter\")</script>";
							}
						}
					?>
				<!--Fin du PHP d'insertion de l'inscription -->

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