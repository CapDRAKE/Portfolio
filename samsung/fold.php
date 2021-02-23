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
						<div class = "imgFold"><img  src="images/GalaxyFold.png" width="50%" height="50%"/></div>
						<p class = "text-fold" >Galaxy Fold</p>
					</div>
				</div>
					<br/><br/>
					<HR size="3" width="60%" color="#12279e">
						<h1><center>Le futur du smartphone</center></h1>
					<HR size="3" width="60%" color="#12279e">
					<br/><br/>
					<center><img id="img" src="images/GalaxyFold.png"></center>
					<br/><br/>
					<p class="txt">
					Le Samsung Galaxy FOLD crée une rupture dans le monde des smartphones. Samsung a travaillé pendant 10ans pour produire un smartphone mélangeant à la fois la tablette,
					et le téléphone.</br>
					Ce smartphone est l'aboutissement de 10 années de recherche.
					</p>
					<br/><br/>
					<HR size="3" width="60%" color="#12279e">
						<h1><center>Le fusion du smartphone et de la tablette à travers un appareil</center></h1>
					<HR size="3" width="60%" color="#12279e">
					<br/><br/>
					<center><img id="img" src="images/fold-face.jpg" height="400" width="450px"></center>
					<br/><br/>
					<p class="txt">
					Après 10ans de recherche, Samsung est parvenu à réaliser ce que l'on pensait futuriste: la fusion du smartphone et de la tablette.</br>
					Vous voulez passez un appel? Répondre à un message? Prendre une photo? L'écran de 4,58 pouces en façade vous le permettra. 			
					</p>
					<br/><br/>
					<center><img id="img" src="images/fold-ouvert.jpg" ></center>
					<br/><br/>
					<p class="txt">
					Besoin d'un plus grand écran? Pour jouer, ou regarder un film? Le sublime écran de 7.3pouces situé à l'intérieur du smartphone vous le permettra. Cet écran est l'un des plus beaux écrans jamais conçu.
					Il intégre la téchnologie AMOLED dans un écran capable de se plier. De plus, le mécanisme permettant au smartphone de se plier est extrèmement bien conçu afin de supporter plusieurs années sans le moindre problème.
					</p>
					<br/><br/>
					<HR size="3" width="60%" color="#12279e">
						<h1><center>Les performances, au maximum !</center></h1>
					<HR size="3" width="60%" color="#12279e">
					<br/><br/>
					<center><img src="images/fold-processeur.jpg" ></center>
					<br/><br/>
					<p class="txt">
					Le nouveau Galaxy Fold est équipé du tout dernier processeur de chez Qualcomm : le snapdragon 855. Ce processeur est un processeur octo-core, gravé en 7nm.
					Cette finesse de gravure lui permet à la fois de gagner en performance, mais également d'être plus économique. En parlant d'autonomie, le Galaxy Fold est un monstre d'autonomie.
					Sa taille lui permet de posséder deux batteries. Ces deux batteries permettent au Galaxy Fold de tenir au moins 2 jours sans avoir besoin de le recharger.
					</P>
					<br/><br/>
					<HR size="3" width="60%" color="#12279e">
						<h1><center>Un vrai "PhotoPhone" !</center></h1>
					<HR size="3" width="60%" color="#12279e">
					<br/><br/>
					<center><img id="img" src="images/fold-photo.jpg" ></center>
					<br/><br/>
					<p class="txt">
					En plus de toutes ses qualités, le smartphone est un véritable "Photophone". Il est équipé au total de 6 appareils photos. De quoi prendre des photos comme un pro !
					Bien evidemment, ce smartphone est capable de prendre des photos ouvert ou fermé ! Avec le Galaxy Fold, vos photos seront toujours parfaites !
					</p>		
					<br/><br/>
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