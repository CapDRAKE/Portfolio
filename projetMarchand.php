<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'Site marchand | Bastien Leuwers',
    'description' => 'Projet site marchand.',
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
			  <!-- particles.js container -->
<!-- scripts -->
            <h1>Site marchand</h1>
            <span class="subheading">Projet avec utilisation de bases de données MySQL</span>
          </div>
        </div>
      </div>
    </div>
  </header>
	  	  <div class="col-lg-8 col-md-10 mx-auto">
	          <p>Ceci est notre deuxième projet. C'est probablement celui sur lequel nous avons passé le plus de temps. Nous l'avons commencé en janvier-février 2020 et terminé en septembre 2020. Ce site marchand s'est découpé en plusieurs étapes : d'abord un site vitrine, puis la liaison avec une base de données que nous devions créer, avant d'ajouter des évolutions comme le panier en variable de session.</p>
	  </div>
	  <br/><br/>
	
			<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
		<img src="img/marchand1.jpg" height="200px" width="300px">
        <p>Accueil du site</p>
      </div>
      <div class="col-md-4">
		<img src="img/marchand2.jpg" height="200px" width="300px">
        <p>Les produits</p>
      </div>
      <div class="col-md-4">
		<img src="img/marchand3.jpg" height="200px" width="300px">
        <p>Panier</p>
      </div>
    </div>
		 <hr>
	    <div class="row">
      <div class="col-md-4">
		<img src="img/marchand4.jpg" height="200px" width="300px">
        <p>Back Office</p>
      </div>
      <div class="col-md-4">
		<img src="img/marchand5.jpg" height="200px" width="300px">
        <p>A propos</p>
      </div>
      <div class="col-md-4">
		<img src="img/marchand6.jpg" height="200px" width="300px">
        <p>Facture</p>
      </div>
    </div>
					        <p><center><a class="btn btn-secondary" href="samsung/accueil.php" role="button">Voir le site &raquo;</a></center></p>

  <hr>

  <?php portfolio_render_end(['copyright' => 'Mon portfolio 2020']); ?>
