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
					<div class = "catS10">
					<img  src="images/S10-presentation.png" width="100%" height="700px"/>
					<p class = "text-fold" >Galaxy S10e/S10/S10+
					<br/><br/>
					</div>
					<h1>Le futur, entre vos mains</h1>
					</p>
					</div>
				</div>
					<HR size="3" width="60%" color="#12279e">
						<h1><center>L'aboutissement de 10 années de recherche, un design révolutionnaire</center></h1>
					<HR size="3" width="60%" color="#12279e">
					<center><img id="img" src="images/s10-ecran.png"></center>
					<br/><br/>
					<p class="txt">
					Le S10 est le nouveau smartphone proposé par Samsung. Il est l'aboutissement de 10 années de recherche. L'équivalent de 10 générations de Galaxy S en un seul smartphone.
					L'écran du nouveau Galaxy S10 occupe désormais la quasi totalité de l'avant du smartphone. L'objectif frontal est situé dans un trou situé en haut à droit de l'écran.
					</p>
					<br/><br/>
					<center><img id="img" src="images/s10-arrière.png" width="500px" height="250px"></center>
					<br/><br/>
					<p class="txt">
					A l'arrière du smartphone, les changement restent mineurs, mais le galaxy S10 intègre desormais 3 objectifs photos. De plus, le dos est desormais en céramique.
					Cela permet à l'arrière du smartphone d'être bien plus résistant et également de diminuer les traces de doigts. 
					</p>
					<HR size="3" width="60%" color="#12279e">
						<h1><center>Des performances révolutionnaires</center></h1>
					<HR size="3" width="60%" color="#12279e">
					<center><img src="images/performance-s10.png"></center>
					<br/><br/>
					<p class="txt">
					Le Galaxy S10 est l'un des smartphones les plus performants du moment. Il est equipé d'un processeur 8 coeurs, et de 8gb de ram. 
					Afin de refroidir le tout, le Galaxy S10 est équipé d'un système de refroidissement lui permettant de maintenir une température correcte et de maximiser les performances.
					Avec cela, le Galaxy S10 est équipé d'une grosse batterie permettant d'améliorer son autonomie et de tenir une journée complète. De plus, l'intélligence artificielle intégrée dans le Galaxy S10 lui permet de s'optimiser automatiquement afin d'augmenter l'autonomie.
					Le Galaxy S10 est un smartphone intelligent qui vous suivra partout, tout le temps. 
					</p>
					<HR size="3" width="60%" color="#12279e">
						<h1><center>Prendre des photos, comme un pro</center></h1>
					<HR size="3" width="60%" color="#12279e">
					<br/>
					<center><img id="img" src="images/s10-photo.jpg" width="300px" height="400px"></center>
					<br/><br/>
					<p class="txt">
					Le Galaxy S10 est équipé au total de 4 appareils photos (5 pour le S10+). Sur l'avant du smartphone, un objectif de 12 MP vous permettra de prendre de splendides selfies. 
					Sur l'arrière du smartphone se trouve 3 capteurs: un capteur grand angle de 12 MP, un capteur zoom x2 de 12 MP, et enfin un capteur de 16 MP ultra grand angle. Ces trois capteurs permettent de réaliser de superbes clichés. 
					Le Galaxy S10 est un des meilleurs "PhotoPhones" du moment !
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