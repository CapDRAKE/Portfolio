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
			<center><img id="img" src="images/note10-presentation.png" height="400px"/></center>
			<br/><br/>
			<center><h1> Galaxy Note 10/ Note 10+ </h1></center>
			<br/><HR size="3" width="60%" color="#12279e"><br/>
			<center><h1> Découvrez la puissance de demain </h1></center>
			<br/>
			<p class="txt">
			Les Galaxy Note10 et Note10+ offrent des performances incomparables : ordinateur, console de jeux, studio de cinéma et S Pen connecté, le tout dans un seul appareil. 
			</p>
			<HR size="3" width="60%" color="#12279e">
			<center><h1> Le smartphone parfait...</h1></center>
			<HR size="3" width="60%" color="#12279e">
			<br/><br/>
			<center><img id="img" src="images/n10-design.png" height="400px"/></center>
			<br/><br/>
			<p class="txt">
			Le tout nouveau Galaxy Note 10 est l'aboutissement de 10 années de recherche de la part de Samsung. Ce smartphone, au design sans bord,
			succède au Galaxy Note 9 sortie 1 an avant. Samsung est parvenu à supprimer les bords en haut et en bas afin qu'il n'y ai plus qu'un écran en façade.
			L'objectif photo frontal a été intégré dans un petit trou dans l'écran peu visible lors de l'usage. De plus cet écran possède un capteur d'empreinte ultrasonique permettant une sécurité parfaite et une rapidité de déverouillage incroyable.
			L'intégralité du smartphone est en verre. C'est également le smartphone le plus fin jamais conçu actuellement. 
			</p>
			<br/><br/>
			<center><h1>Le smartphone fait pour ceux qui veulent le maximum</h1></center>
			<HR size="3" width="60%" color="#12279e">
			<br/><br/>
			<center><img src="images/n10-performance.jpg" height="500px"/></center>
			<br/>
			<p class="txt">
			Le Galaxy Note 10 est équipé avec ce qui se fait de mieux actuellement. Il possède un processeur 8 coeurs haute performance, et 12 GB de mémoire ram. De quoi utiliser pleins d'applications à la fois sans le moindre ralentissement.
			De plus, le Galaxy Note 10 est équipé d'un système de refroidissement lui permettant de toujours maintenanir une température correcte. Avec le Note 10, votre smartphone ne sera plus responsable de vos défaites dans votre jeu préféré...
			</p>
			<br/><br/>
			<center><h1>Il était une fois, la photo...</h1></center>
			<HR size="3" width="60%" color="#12279e">
			<br/><br/>
			<center><img src="images/n10-photo.jpg" height="500px"/></center>
			<br/>
			<p class="txt">
			Si vous recherchez ce qui se fait de mieux pour la photo, alors le Galaxy Note 10 est fait pour vous ! Ce smartphone est équipé au total de 5 capteurs photos : 1 en frontal et 4 à l'arrière. 
			Le capteur frontal est un capteur de 12 MPX qui vous permettra de réaliser vos plus beaux selfies. Sur l'arrière du smartphone, se trouvent 4 capteurs : un capteur grand angle de 12 MPX, un capteur ZOOM de 12 MPX, un capteur ultra-grand-angle de 16 MPX, et enfin un capteur TOF de 10 MPX. Ce dernier vous permettra de réaliser des photos en mode portrait parfaites.
			</p>
			<br/><br/>
			<center><h1>Prenez le contrôle avec votre S Pen.</h1></center>
			<HR size="3" width="60%" color="#12279e">
			<br/><br/>
			<center><img src="images/n10-spen.jpg" height="500px"/></center>
			<br/>
			<p class="txt">
			Le S-pen est la signature des Galaxy Note. Aujourd'hui le S-pen est plus performant que jamais. Avec lui, vous pourrez répondre à un appel, écrire rapidement une note, faire des dessins précis, prendre une photo de loin... Tout ça avec seulement ce stylet.
			<br/>De plus il est désormais connecté en bluetooth ce qui vous peremettra de l'utiliser tout en restant connecté à votre smartphone, pour prendre une photo par exemple.<br/> Et grâce à son excellente autonomie de 10h, n'ayez plus peur de manquer de batterie.
			Bien évidemment, le stylet est, comme le Note 10, certifié IP 68, résistant à l'eau et à la poussière, alors n'ayez plus peur de vous mouiller.
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