<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Projets réalisés par Bastien Leuwers pendant son parcours.">
  <meta name="author" content="Bastien Leuwers">

  <title>Mes projets | Bastien Leuwers</title>

  <link rel="stylesheet" media="screen" href="css/style.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <link href="css/clean-blog.min.css" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="index.php">Bastien LEUWERS</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="index.php">Accueil</a></li>
          <li class="nav-item"><a class="nav-link" href="propos.php">À propos</a></li>
          <li class="nav-item"><a class="nav-link" href="projet.php">Mes projets</a></li>
          <li class="nav-item"><a class="nav-link" href="veille.php">Veille</a></li>
          <li class="nav-item"><a class="nav-link" href="stage.php">Stage</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead" style="background-image: url('img/projet.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="page-heading">
        <div class="hero-badge"><i class="fas fa-folder-open"></i> Sélection de projets</div>
        <h1>Des projets de BTS présentés comme un vrai catalogue.</h1>
        <span class="subheading">Cette page rassemble les réalisations majeures de mon parcours avec une lecture plus claire, plus actuelle et centrée sur la valeur de chaque projet.</span>
      </div>
    </div>
  </header>

  <main class="container">
    <section class="site-section reveal">
      <div class="portfolio-note">
        <div class="section-tag">Focus</div>
        <h2>Une lecture plus simple, sans toucher aux dossiers de démonstration.</h2>
        <p class="section-lead">Les projets historiques comme <strong>Samsung</strong>, <strong>Morpion</strong> et <strong>Noël</strong> conservent leurs sources telles quelles. La refonte porte ici sur leur mise en scène dans le portfolio pour les rendre plus lisibles et plus attractifs.</p>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-tag">Première année</div>
      <h2>Les bases: interface, front-end, logique applicative.</h2>
      <p class="section-lead">Les premiers projets m'ont permis de manipuler l'intégration, le JavaScript, les bases de données et la logique applicative dans des contextes très différents.</p>
      <div class="project-grid">
        <article class="project-card">
          <img src="img/noel1.jpg" alt="Projet Noël">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Projet en binôme</span>
            <span class="project-badge">HTML / CSS / JS</span>
          </div>
          <h3>Site Noël</h3>
          <p>Premier projet réalisé en binôme pour mettre en pratique les bases du front-end à travers une mini-expérience web autour d'un produit Samsung.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="projetNoel.php">Voir le projet</a>
            <a class="btn btn-secondary" href="noel/noel.html">Ouvrir le site</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/marchand1.jpg" alt="Projet site marchand Samsung">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Projet vitrine + data</span>
            <span class="project-badge">PHP / SQL</span>
          </div>
          <h3>Site marchand</h3>
          <p>Un projet plus ambitieux avec catalogue, base de données, espace administrable et logique e-commerce. C'est l'une des réalisations les plus complètes du portfolio.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="projetMarchand.php">Voir le projet</a>
            <a class="btn btn-secondary" href="samsung/accueil.php">Ouvrir le site</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/morpion.PNG" alt="Jeu Morpion en Java">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Projet solo</span>
            <span class="project-badge">Java</span>
          </div>
          <h3>Jeu Java</h3>
          <p>Un morpion développé en autonomie, utile pour montrer une logique de jeu simple, une interface dédiée et l'envie d'apprendre en dehors du web pur.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="morpion.php">Voir le projet</a>
          </div>
        </article>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-tag">Deuxième année</div>
      <h2>Des projets plus structurés et plus proches du monde professionnel.</h2>
      <p class="section-lead">La seconde année pousse plus loin: cadre projet plus fort, notions d'architecture, usage du MVC, Java applicatif et découverte d'un framework web.</p>
      <div class="project-grid">
        <article class="project-card">
          <img src="img/gsb.jpg" alt="Projet GSB gestion des frais">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Projet en binôme</span>
            <span class="project-badge">PHP / MVC</span>
          </div>
          <h3>GSB1 gestion des frais</h3>
          <p>Une reprise d'application existante avec amélioration fonctionnelle, structuration du code et réponse à un cahier des charges plus cadré.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="gsb.php">Voir le projet</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/GSB1.png" alt="Projet GSB gestion des matériels">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Application Java</span>
            <span class="project-badge">Java / Base de données</span>
          </div>
          <h3>GSB2 gestion des matériels</h3>
          <p>Une application Java connectée à une base de données pour gérer matériels et véhicules, avec une logique plus orientée logiciel métier.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="gsb2.php">Voir le projet</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/GSB1.png" alt="Projet GSB gestion des conférences">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Framework web</span>
            <span class="project-badge">CodeIgniter</span>
          </div>
          <h3>GSB3 gestion des conférences</h3>
          <p>Une application web construite avec CodeIgniter pour consulter, gérer et suivre des inscriptions à des conférences.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="gsb3.php">Voir le projet</a>
          </div>
        </article>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="timeline-grid">
        <article class="timeline-item">
          <span class="timeline-year">Ce que ces projets montrent</span>
          <h3>Une progression technique visible</h3>
          <p>On voit une évolution depuis les bases du front-end jusqu'à des projets plus structurés avec bases de données, frameworks et logique métier.</p>
        </article>
        <article class="timeline-item">
          <span class="timeline-year">Ce que la refonte apporte</span>
          <h3>Plus de lisibilité et une meilleure hiérarchisation</h3>
          <p>Chaque projet est plus simple à comparer: même structure, même niveau d'information, et un habillage cohérent avec le nouveau style global du portfolio.</p>
        </article>
      </div>
    </section>
  </main>

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
          <p class="copyright text-muted">Copyright &copy; Portfolio Bastien Leuwers 2026</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/clean-blog.min.js"></script>
</body>
</html>
