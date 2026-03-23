<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'Site Noël | Bastien Leuwers',
    'description' => 'Projet Site Noël.',
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
            <h1>Site Noël</h1>
            <span class="subheading">Une présentation pas comme les autres...</span>
          </div>
        </div>
      </div>
    </div>
  </header>
	  <div class="col-lg-8 col-md-10 mx-auto">
	          <p>Ceci est notre premier projet. L'objectif était de réaliser un site vitrine à travers lequel nous devions présenter la chose que nous souhaiterions avoir pour Noël. C'était notre premier vrai projet de BTS, réalisé en binôme.</p>
	  </div>
	  <br/><br/>
	
		<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
		<img src="img/noel1.jpg" height="300px" width="300px">
        <p>Accueil du site</p>
      </div>
      <div class="col-md-4">
		<img src="img/noel2.jpg" height="300px" width="300px">
        <p>Page de l'entreprise</p>
      </div>
      <div class="col-md-4">
		<img src="img/noel3.jpg" height="300px" width="300px">
		 <p>Page des avantages et inconvénients</p>
      </div>
    </div>
	 <hr>
			</br>
	    <div class="row">
      <div class="col-md-4">
		<img src="img/noel4.jpg" height="300px" width="300px">
        <p>Page de comparaison</p>
      </div>
      <div class="col-md-4">
		<img src="img/noel5.jpg" height="300px" width="300px">
        <p>Page sur notre avis</p>
      </div>
      <div class="col-md-4">
		<img src="img/noel6.jpg" height="300px" width="300px">
        <p>Formulaire d'avis</p>
      </div>
    </div>
	        <p><center><a class="btn btn-secondary" href="noel/noel.html" role="button">Voir le site &raquo;</a></center></p>

  <hr>

  <?php portfolio_render_end(['copyright' => 'Mon portfolio 2020']); ?>
