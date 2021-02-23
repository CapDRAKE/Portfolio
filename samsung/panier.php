<html>
	<head>
		<link type="text/css" rel="stylesheet" href="css/style.css" media="all" />
		<title>Samsung</title>
		<meta charset="utf-8">
		<script type= "text/javascript" src="js/fonction.js"></script>
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
			<!--Fin EnTete-->
			
			<!--Titre de la page-->
			<div class="compte">
				<center>Panier</center>
			</div>
			<!--Fin titre de la page-->
			
			<!--Utilisateur connecté-->
			<?php
			
			if ($bdd=mysqli_connect('localhost','Bastien','zNoi32~4','marchand')){
						}
				if (isset($_SESSION['identifiant']) && isset($_SESSION['mdpUtilisateur'])){
					$id = $_SESSION['id'];
					$verif= mysqli_query($bdd, "SELECT * FROM panier WHERE idUtilisateur = '".$id."';");
					$donnee = mysqli_fetch_assoc($verif);
					if($donnee['idUtilisateur'] != $id){

			?>
			<div class="compte">
				<center>Votre panier est tristement vide! :'(</center>
			</div>
			
			<h1><center>Voici une petite astuce pour le remplir... Appuyez sur ce bouton ! ;)</center></h1>
		<div class="formulaire">
			<form action="produit.php" method="POST">
				<input class="boutonInsc"type="submit" value="Nos produits" name="Connexion"></div>
			</form>
		</div>
			
			<?php
					}
					else{
			?>
			

			<div class="descPanier">
				<div class = "text-descPanier"><?php echo"Produit"; ?></div>
				<div class = "prix-descPanier">Prix</div>
				<div class = "qtt-descPanier">Quantité</div>
				<div class = "tot-descPanier">Total</div>
			</div>
			<?php
			$article = mysqli_query($bdd, "SELECT * FROM panier, produits WHERE produits.idProduit = panier.idProduit AND idUtilisateur = '".$id."';");
			$idProduit = 0;
			$quant = 0;
			$total_panier = 0;
			$i = 0;
			while($donne = mysqli_fetch_assoc($article)){
				$total = $donne['prixProduit'] * $donne['quantite'];
				$idP = $donne['idProduit'];
				$quantite = $donne['quantite'];
				$total_panier = $total_panier + $total;
			?>
			<div class="prodPanier">
				<img class = "img-prodPanier" src="<?php echo $donne['image'] ?>" width="10%" height="10%"/>
				<div class = "text-prodPanier"><?php echo $donne['nomProduit'] ?></div>
				<div class = "prix-prodPanier"><?php echo $donne['prixProduit'] ?></div>
				<form method="POST">
					<fieldset>
						<div class = "qtt-prodPanier"><input class="inputNb" type="number" step="1" name="<?php echo $i; ?>" value="<?php echo $donne['quantite']?>"  min="1" max="64"></div>
					</fieldset>
				</form>
				<div class = "tot-prodPanier"><?php echo $total ?></div>
				<form method="POST">
					<fieldset>
						<input class="x-prodPanier" type ="submit" name="<?php echo $idP; ?>" value ="x">
					</fieldset>
				</form>
			</div>
			<?php
			if(isset($_POST[$idP])){
				$idProduit = $donne['idProduit'];
			}
			if(isset($_POST[$i])){
				$quant = $_POST[$i];
				$idAjout = $donne['idProduit'];
				echo "ok";
			}
			$i = $i+1;
			}
			if($idProduit != 0){
				$suppre = mysqli_query($bdd, "DELETE FROM panier WHERE idProduit = '".$idProduit."';");
				echo"<script> location.href = ('panier.php') ; </script>";
				echo"<script>alert(\"Votre article a bien été retiré !\")</script>";
			}	
			if($quant != 0){
				$ajout = mysqli_query($bdd, "UPDATE panier SET quantite = '".$quant."' WHERE idProduit = '".$idAjout."';");
				echo"<script> location.href = ('panier.php') ; </script>";
			}	
			?>
			<div class="descPanier2">
				<div class = "tot-prodPanier2">Total panier : <?php echo $total_panier ;?></div>
			</div>
			<a href="paiement.php"><center><div class="boutonInsc" href="">Paiement</div></center></a>
			</br></br>
			<div class="formulaire">
				<form action="test.php" method="POST">
					<input class="boutonInsc"type="submit" value="Imprimer la facture" name="Imprimer"></div>
				</form>
			</div>
		</div>;
				
		<!--Fin utilisateur connecté-->
		
		<!--Début utilisateur non-connecté-->
		<?php
				}
			}
		else{
		?>
		<br/>
		<div class="compte">
			<center>Vous n'êtes pas connecté! :'(</center>
		</div>
		<h1><center>Voici un petit chemin pour vous connecter sur notre formidable site marchand ;)</center></h1>
		<div class="formulaire">
			<form action="compte.php" method="POST">
				<input class="boutonInsc"type="submit" value="Connexion" name="Connexion"></div>
			</form>
		</div>
		<?php
		}
		?>
		<!--Fin utilisateur non connecté-->
		
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