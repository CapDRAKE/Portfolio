<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'GSB gestion des matériels | Bastien Leuwers',
    'description' => 'Projet Java GSB gestion des matériels.',
    'active' => 'projects',
]);
?>
<header class="masthead" style="background-image: url('img/header-detail-modern.svg')">
    <div class="overlay"></div>
	  	  	<div id="particles-js" >
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="site-heading">
			  <!-- scripts -->
            <h1>GSB gestion des matériels</h1>
            <span class="subheading">Projet Java</span>
          </div>
        </div>
      </div>
    </div>
  </header>
	  <div class="col-lg-8 col-md-10 mx-auto">
	          <p>Ce projet était notre deuxième projet de notre seconde année. Il s'agissait d'un projet à réaliser en Java. Nous devions utiliser une base de données créée au préalable. Cette application devait permettre de gérer des matériels et des véhicules, mais aussi de consulter des statistiques en fonction de l'utilisateur.</p>
	  </div>
	  <br/><br/>
	
			<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
		<img src="img/connexion.png" height="300px" width="300px">
        <p>Connexion</p>
      </div>
      <div class="col-md-4">
		<img src="img/reservation.png" height="300px" width="300px">
        <p>Page de réservation</p>
      </div>
      <div class="col-md-4">
		<img src="img/emprunts.png" height="300px" width="300px">
        <p>Affichage des emprunts</p>
      </div>
    </div>
		 <hr>
	    <div class="row">
      <div class="col-md-4">
		<img src="img/termineremprunt.png" height="300px" width="300px">
        <p>Terminer un emprunt</p>
      </div>
      <div class="col-md-4">
		<img src="img/supprimer.png" height="300px" width="300px">
        <p>Supprimer un matériel</p>
      </div>
      <div class="col-md-4">
		<img src="img/pdf.png" height="300px" width="300px">
        <p>Page de génération du PDF</p>
      </div>
    </div>

  <hr>

  <?php portfolio_render_end(['copyright' => 'Mon portfolio 2021']); ?>
