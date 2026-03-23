<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'GSB gestion des frais | Bastien Leuwers',
    'description' => 'Projet MVC GSB gestion des frais.',
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
	          <p>Ce projet Ã©tait notre premier projet de notre 2Ã¨me annÃ©e. A travers ce projet nous devions dÃ©couvrir le fonctionnement MVC. Nous devions reprendre une application web dÃ©jÃ  existante et l'amÃ©liorer afin de rÃ©pondre Ã  un cahier des charges.</p>
	  </div>
	  <br/><br/>
	
			<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
		<img src="img/connexion.PNG" height="200px" width="300px">
        <p>Connexion</p>
      </div>
      <div class="col-md-4">
		<img src="img/ajout.PNG" height="200px" width="300px">
        <p>Ajout des frais</p>
      </div>
      <div class="col-md-4">
		<img src="img/ff.PNG" height="200px" width="300px">
        <p>Les fiches de frais</p>
      </div>
    </div>
		 <hr>
	    <div class="row">
      <div class="col-md-4">
		<img src="img/valider.PNG" height="200px" width="300px">
        <p>Valider fiche de frais</p>
      </div>
      <div class="col-md-4">
		<img src="img/mdp.PNG" height="200px" width="300px">
        <p>Modifier mot de passe</p>
      </div>
      <div class="col-md-4">
		<img src="img/accueil.PNG" height="200px" width="300px">
        <p>Accueil</p>
      </div>
    </div>

  <hr>

  <?php portfolio_render_end(['copyright' => 'Mon portfolio 2020']); ?>
