<?php
	session_start();
	
	if (isset($_SESSION['identifiant']) && isset($_SESSION['mdpUtilisateur'])){
		if ($bdd=mysqli_connect('localhost','root','','marchand')){
						}
		$rechercheID=mysqli_query($bdd, "SELECT MAX(idConnexion) FROM log_connexion;");
		$donnee = mysqli_fetch_assoc($rechercheID);
		
		
		$log = mysqli_query($bdd, "UPDATE log_connexion SET dateFin = now() WHERE idConnexion = '".$donnee."'; ");
		session_destroy();
		echo"<script>alert(\"Vous êtes deconnecté !\")</script>";

	}
	include("accueil.php");
?>