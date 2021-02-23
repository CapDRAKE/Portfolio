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
			<p id="nvGalaxy">Découvrez les produits Galaxy</p>
			
			<?php
			if ($bdd=mysqli_connect('localhost','Bastien','zNoi32~4','marchand')){
			}
			$produit = mysqli_query($bdd, "SELECT * FROM produits");
			$i=0;
			$idProduit=0;
			while ($resultat = mysqli_fetch_assoc($produit)){
				$idP=$resultat['idProduit'];
			?>
				<?php
					if($i%3 == 0){
				?>
				<div class ="lesProduits">
				<?php
					}
				?>
				<a href="s10.php"><div class = "descProduit">
					<div class = "descImgproduit"><img  src="<?php echo $resultat['image']?>" width="100%" height="100%"/></div>
					<div class = "txtBtnProduit">
						<div class = "text-descProduit"><?php echo $resultat['nomProduit']?></div>
						<div class = "prix-descProduit"><?php echo $resultat['prixProduit']?> €</div>
						<div class = "text-descProduit2"><p><?php echo $resultat['descriptionProduit']?></p></div>
						<!--Affichage uniquement si connecté-->
						<?php
						if (isset($_SESSION['identifiant']) && isset($_SESSION['mdpUtilisateur'])){
							?>
						<form class="placementBouton" action="" method="POST">
							<fieldset>
								<input class="boutonProduit" type="Submit" name="<?php echo $idP ?>" value="Ajouter au panier"/>
							</fieldset>
						</form>
						<?php 
						}
						?>
					</div>	
				</div></a>
				<?php
				if(isset($_POST[$idP])){
					$idProduit = $resultat['idProduit'];
				}	
				if($i == 2){
				?>
					</div>
				<?php
				}
				$i=$i+1;
				?>
			<?php
			}
			if($idProduit != 0){
					$id = $_SESSION['id'];
					$test = mysqli_query($bdd, "SELECT idUtilisateur, idProduit, quantite FROM panier WHERE idProduit = '".$idProduit."' AND idUtilisateur = '".$id."';");
					$verif = mysqli_fetch_assoc($test);
					if($idProduit == $verif['idProduit']){
						$total = $verif['quantite'] + 1;
						$ajouter = mysqli_query($bdd, "UPDATE panier SET quantite = '".$total."' WHERE idProduit = '".$idProduit."';");
						echo"<script>alert(\"Quantité modifiée !\")</script>";
					}
					else{
					$panier = mysqli_query($bdd, "INSERT INTO panier VALUES ('', '$id', '$idProduit', NULL, '1');");
					echo"<script>alert(\"Produit bien ajouté !\")</script>";
					}
			}	
			?>
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