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
			<br/><br/>
			<center><img id="img" src="images/w2-presentation.jpg" height="400px"/></center>
			<br/><br/>
			<center><h1> Galaxy Watch Active2 </h1></center>
			<br/><HR size="3" width="60%" color="#12279e">
			<br/><br/>
			<center><h1> Design </h1></center>
			<HR size="4" width="5%" color="#12279e">
			<br/><br/>
			<center><img id="img" src="images/w2-design.png" height="400px" /></center>
			<br/><br/>
			<p class="txt">
			La toute nouvelle Galaxy Watch Active2 succède à la Galaxy Watch sortie un an auparavant. <br/>La Galaxy Watch Active2 se décline en deux tailles de boitier : 
			40 et 44mm et également en deux finitions : aluminium et acier inoxydable. Le choix vous appartient.<br/>
			La Galaxy Watch Active2 est équipée d'un sublime écran SUPER Amoled sans bords qui vous permettra de voir toutes les informations dont vous avez besoin. Bien évidemment, la Galaxy Watch Active2 est étanche !
			</p>
			<br/><br/>
			<center><h1> Sport et suivi de santé </h1></center>
			<HR size="4" width="5%" color="#12279e">
			<br/><br/>
			<img align="right" src="images/w2-sport.png" height="500px" />
			<br/><br/>
			<p class="txt">
			La Galaxy Watch 2 suit tous vos mouvements au cours de la journée. Elle mesure votre rythme cardiaque, mesure la distance que vous avez parcouru etc...
			<br/><br/><br/>Elle est capable de vous guider dans tous vos entrainements tel que la natation ou la course par exemple.<br/><br/><br/>
			Elle est également capable de suivre votre bien être, vérifier votre état de stress etc... <br/><br/><br/>
			La Galaxy Watch Active2 intègre à son dos 8 capteurs photodiodes. Le suivi de votre rythme cardiaque devient très précis et la Galaxy Watch Active2 vous envoie une alerte lorsque celui-ci est au-dessus ou en-dessous de votre rythme cardiaque habituel.<br/><br/><br/><br/><br/><br/><br/><!--TEMPORAIRE. A modifier en CSS-->
			</p>
			<br/><br/>
			<center><h1> Autonomie </h1></center>
			<HR size="4" width="5%" color="#12279e">
			<br/><br/>
			<center><img src="images/w2-batterie.png" height="400px" /></center>
			<br/><br/>
			<p class="txt">
			La Galaxy Watch Active2 a été conçu pour vous suivre toute la journée sans jamais vous abandonner. C'est pourquoi elle est équipée d'une batterie longue durée lui permettant de tenir une journée complète sans avoir besoin de la recharger.<br/>
			De plus, elle est compatible avec la recharge sans-fil. Vous pouvez donc la recharger sur sa plateforme de charge, ou sur votre S10/Note 10. 
			</p>
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