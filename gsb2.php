<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'GSB gestion des materiels | Bastien Leuwers',
    'description' => 'Projet Java GSB gestion des materiels.',
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
            <h1>GSB gestion des frais</h1>
            <span class="subheading">Projet MVC</span>
          </div>
        </div>
      </div>
    </div>
  </header>
	  <div class="col-lg-8 col-md-10 mx-auto">
	          <p>Ce projet Ã©tait notre deuxiÃ¨me projet de notre seconde annÃ©e. Ce projet Ã©tait un projet Ã  rÃ©aliser en Java. Nous devions utilise une base de donnÃ©es que nous avions crÃ©Ã© au prÃ©alable. Cette application devait permettre de gÃ©rer des materiels et des vÃ©hicules mais Ã©galement de consulter des statistiques en fonction de l'utilisateur.</p>
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
        <p>Page de rÃ©servation</p>
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
        <p>Supprimer un materiel</p>
      </div>
      <div class="col-md-4">
		<img src="img/pdf.png" height="300px" width="300px">
        <p>Page de gÃ©nÃ©ration du PDF</p>
      </div>
    </div>

  <hr>

  <?php portfolio_render_end(['copyright' => 'Mon portfolio 2021']); ?>
