<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Mon portfolio</title>

	<link rel="stylesheet" media="screen" href="css/style.css">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/clean-blog.min.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Bastien LEUWERS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="propos.php">A propos de moi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="projet.php">Mes projets</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="veille.php">Veille</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link" href="stage.php">Stage</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contactez-moi</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/home.jpg')">
    <div class="overlay"></div>
	<div id="particles-js" >
    <div class="container">
      <div class="row">
		
        <div class="col-lg-8 col-md-10 mx-auto">

          <div class="site-heading" >
			  	  <!-- particles.js container -->
<!-- scripts -->
<script src="particles.js-master/particles.js"></script>
			  <script src="js/app.js"></script>
			  
            <h1>Portfolio</h1>
			<i class="far fa-smile-beam fa-spin"></i>
            <span class="subheading"></span>
			</div>
          </div>
        </div>
      </div>
    </div>
	  
	  
</header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <!-- Pager -->
        <!-- <div class="clearfix"> -->
          <!-- <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> -->
        <!-- </div> -->
      </div>
	  </div>
	        <!-- Jumbotron -->
      <div class="jumbotron">
        <h1>Bastien LEUWERS</h1>
              <img src="img/bastien.PNG" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
        <p class="lead"><i class="fas fa-bolt fa-3x amber-text pr-3" aria-hidden="true"></i>Je m'appelle Bastien LEUWERS. Actuellement en BTS SIO, j'ai d'abord cherché ma voie. Après un bac STMG en spécialité "Ressources Humaines", j'ai ensuite commencé mes études par un DUT carrières juridiques. N'ayant pas, à ce moment-là, trouvé ma voie, j'ai décidé de me lancer dans un BTS informatique.</p>
        <p><a class="btn btn-lg btn-success" href="propos.php" role="button">Voir plus...</a></p>
      </div><br/>
	  	          <hr><br/>
	  		<header>
			<center><h2>Présentation</h2></center>
		</header>
	  <br/><hr><br/>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item  active" data-interval="3000">
      <img src="img/propos.jpg" class="d-block w-100" height="700" alt="First slide">
						      <div class="carousel-caption d-none d-md-block">
		        <h3>Qui suis-je?</h3>
		<p><center><a class="btn btn-secondary" href="veilletechno.php" role="button">Voir ma présentation &raquo;</a></center></p>
		</div>
    </div>
	<div class="carousel-item" data-interval="3000">
      <img src="img/slide1.PNG" class="d-block w-100" height="700" src="..." alt="Second slide" href="projet.php">
		      <div class="carousel-caption d-none d-md-block">
        <h3>Mes projet</h3>
		<p><center><a class="btn btn-secondary" href="projetMarchand.php" role="button">Voir le projet Samsung &raquo;</a></center></p>
		</div>
    </div>
    <div class="carousel-item" data-interval="3000">
      <img src="img/oeil.jpg" class="d-block w-100" height="700" alt="Third slide">
				      <div class="carousel-caption d-none d-md-block">
		        <h3>Ma veille technologique</h3>
		<p><center><a class="btn btn-secondary" href="veilletechno.php" role="button">Voir ma veille &raquo;</a></center></p>
		</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	  <br/><br/>
	  <hr><br/>
	  		<header>
			<center><h2>Informations</h2></center>
		</header>
	  <br/>
	          <hr><br/>
	  <center><img src="img/projet.jpg" height="350px" width="660px"></center><br/>
	          <hr>
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-lg-4">
          <h2>Mes projets</h2>
          <p>Durant ces deux années de BTS, nous avons dû réaliser différents projets afin d'augmenter nos compétences et de nous préparer au monde de l'entreprise </p>
			<br/>
          <p><a class="btn btn-primary" href="projet.php" role="button">Voir plus... &raquo;</a></p>
        </div>
        <div class="col-lg-4">
          <h2>Veille</h2>
          <p>Nous devions réaliser une veille technologique où nous devions choisir un sujet et le tenir à jour. Nous devions également réaliser une veille juridique sur un sujet donné, et la tenir à jour.<br/>
			</p>
          <p><a class="btn btn-primary" href="veille.php" role="button">Voir plus... &raquo;</a></p>
       </div>
        <div class="col-lg-4">
          <h2>Me contacter</h2>
          <p>Si vous desirez avoir d'autre informations à mon sujet, ou si vous souhaitez donner votre avis, .</p><br/><br/><br/>
          <p><a class="btn btn-primary" href="contact.php" role="button">Voir plus... &raquo;</a></p>
        </div>
      </div>

  </div>

  <hr>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://twitter.com/BastienLEUWERS">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/bastien.leuwers.54">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://github.com/CapDRAKE">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <p class="copyright text-muted">Copyright &copy; Mon portfolio 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>

</body>

</html>
