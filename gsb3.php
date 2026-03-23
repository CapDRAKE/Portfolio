<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'GSB gestion des conferences | Bastien Leuwers',
    'description' => 'Projet GSB gestion des conferences.',
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
            <h1>GSB gestion des confÃ©rences</h1>
            <span class="subheading">Projet CodeIgniter</span>
          </div>
        </div>
      </div>
    </div>
  </header>
	  <div class="col-lg-8 col-md-10 mx-auto">
	          <p>Ce projet Ã©tait notre dernier projet de notre seconde annÃ©e. Ce projet Ã©tait un projet web que nous devions rÃ©aliser durant notre stage. Nous devions utilise une base de donnÃ©es que nous avions crÃ©Ã© au prÃ©alable. Nous avions une application Java pour nous aider. Cette application web devait Ãªtre crÃ©Ã©e Ã  l'aide du framework CodeIgniter. Cette application devait permettre la gestion des confÃ©rences, l'inscription, et la consultation des statistiques en fonction de l'utilisateur.</p>
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
        <p>Page d'affichage des confÃ©rences</p>
      </div>
      <div class="col-md-4">
		<img src="img/inscription.png" height="300px" width="300px">
        <p>Inscription Ã  une confÃ©rence</p>
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
