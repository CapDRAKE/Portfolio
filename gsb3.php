<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'GSB gestion des conférences | Bastien Leuwers',
    'description' => 'Projet GSB gestion des conférences.',
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
            <h1>GSB gestion des conférences</h1>
            <span class="subheading">Projet CodeIgniter</span>
          </div>
        </div>
      </div>
    </div>
  </header>
	  <div class="col-lg-8 col-md-10 mx-auto">
	          <p>Ce projet était notre dernier projet de notre seconde année. C'était un projet web à réaliser durant notre stage. Nous devions utiliser une base de données créée au préalable, avec une application Java comme support. Cette application web devait être créée avec le framework CodeIgniter et permettre la gestion des conférences, l'inscription et la consultation de statistiques en fonction de l'utilisateur.</p>
	  </div>
	  <br/><br/>
	
			<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
		<img src="img/co.png" height="300px" width="300px">
        <p>Connexion</p>
      </div>
      <div class="col-md-4">
		<img src="img/affich.png" height="300px" width="300px">
        <p>Page d'affichage des conférences</p>
      </div>
      <div class="col-md-4">
		<img src="img/inscription.png" height="300px" width="300px">
        <p>Inscription à une conférence</p>
      </div>
    </div>
		 <hr>
	    <div class="row">
      <div class="col-md-4">
		<img src="img/stats.png" height="300px" width="300px">
        <p>Statistiques des inscriptions</p>
      </div>
      <div class="col-md-4">
		<img src="img/stats2.png" height="300px" width="300px">
        <p>Statistiques des inscriptions sans participation</p>
      </div>
      <div class="col-md-4">
		<img src="img/participation.png" height="300px" width="300px">
        <p>Statistiques des participations</p>
      </div>
    </div>

  <hr>

  <?php portfolio_render_end(['copyright' => 'Mon portfolio 2021']); ?>
