<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'Morpion Java | Bastien Leuwers',
    'description' => 'Projet Morpion en Java.',
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
            <h1>Projet java</h1>
            <span class="subheading">Un morpion en JAVA</span>
          </div>
        </div>
      </div>
    </div>
  </header>
	  	  	  <div class="col-lg-8 col-md-10 mx-auto">
	          <p>Ce projet Ã©tait un projet Ã  rÃ©aliser durant nos vacances. Nous devions rÃ©aliser le jeu de notre choix dans le langage Java</p>
	  </div>
	  <br/><br/>
	
	
			<div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
		<img src="img/devinette.PNG"  height="300px" width="300px" >
        <p>Devinette</p>
      </div>
      <div class="col-md-4">
		<img src="img/message.PNG" height="200px" width="300px"><br/><br/><br/><br/>
        <p>Explications du jeu</p>
      </div>
      <div class="col-md-4">
		<img src="img/grille.PNG" height="300px" width="300px">
        <p>Grille</p>
      </div>
    </div>
	        <p><center><a class="btn btn-secondary" href="morpion/morpion.jar" download="Morpion" role="button">TÃ©lÃ©charger &raquo;</a></center></p>
  <hr>

  <?php portfolio_render_end(['copyright' => 'Mon portfolio 2020']); ?>
