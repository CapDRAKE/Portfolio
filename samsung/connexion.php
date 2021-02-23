<?php
						
	if ($bdd=mysqli_connect('localhost','Bastien','zNoi32~4','marchand')){
	}			
	if(isset($_POST['identifiant'])&&isset($_POST['mdp'])){
		$identifiant = $_POST['identifiant'];
		$mdp = $_POST['mdp'];
		$connexion=mysqli_query($bdd, "SELECT identifiant, mdpUtilisateur, idUtilisateur, Admin FROM Utilisateur WHERE identifiant = '".$identifiant."' AND mdpUtilisateur = sha1('$mdp');");
		$donnee = mysqli_fetch_assoc($connexion);
		if(sha1($mdp) == $donnee['mdpUtilisateur'] && $identifiant == $donnee['identifiant']){
			echo "<script>alert(\"Connexion réussie ! Bienvenue $identifiant !\")</script>";	
			session_start();
			$_SESSION['identifiant'] = $donnee['identifiant'];
			$_SESSION['mdpUtilisateur'] = sha1($mdp);
			$_SESSION['admin'] = $donnee['Admin'];
			$id = $donnee['idUtilisateur'];
			$_SESSION['id'] = $donnee['idUtilisateur'];
			include("compte.php");
			//Ici nous ajoutons l'heure de connexion de début de l'utilisateur
			$log = mysqli_query($bdd, "INSERT INTO log_connexion VALUES('', now(), NULL, '$id');");
		}
		else {
			echo "<script>alert(\"Mot de passe ou identifiant incorrect\")</script>";
			include("compte.php");
		}
	}
?>