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
          <li class="nav-item"><a class="nav-link" href="propos.php">A propos</a></li>
          <li class="nav-item"><a class="nav-link" href="projet.php">Mes projets</a></li>
          <li class="nav-item"><a class="nav-link" href="veille.php">Veille</a></li>
          <li class="nav-item"><a class="nav-link" href="experiences.php">Experiences</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead" style="background-image: url('img/projet.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="page-heading">
        <div class="hero-badge"><i class="fas fa-folder-open"></i> Selection de projets</div>
        <h1>Des projets de BTS, puis des produits plus ambitieux et maintenus dans la duree.</h1>
        <span class="subheading">Le portfolio melange des projets de formation et des projets personnels plus recents. Les dossiers Samsung, Morpion et Noel restent intacts: seule leur mise en valeur dans le portfolio a ete retravaillee.</span>
      </div>
    </div>
  </header>

  <main class="container page-frame">
    <section class="site-section reveal">
      <div class="portfolio-note">
        <div class="section-tag">Vue d'ensemble</div>
        <h2>Une progression visible entre projets de formation et projets produits.</h2>
        <p class="section-lead">Cette page presente d'abord les projets realises pendant le BTS, puis les projets personnels et produits plus recents autour de MajestyLauncher, MajestyCraft, MajestyChallenge et de la librairie AlternativeAPI.</p>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-tag">Projets BTS</div>
      <h2>Les projets historiques du portfolio.</h2>
      <div class="project-grid">
        <article class="project-card">
          <img src="img/noel1.jpg" alt="Projet Noel">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Projet en binome</span>
            <span class="project-badge">HTML / CSS / JS</span>
          </div>
          <h3>Site Noel</h3>
          <p>Premier projet realise en binome pour mettre en pratique les bases du front-end et construire une vitrine complete autour d'un produit Samsung.</p>
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
          <p>Un projet plus ambitieux avec catalogue, base de donnees, espace administrable et logique e-commerce. C'est l'une des realisations les plus completes du portfolio.</p>
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
          <p>Un morpion developpe en autonomie pour travailler une logique de jeu simple et sortir du cadre purement web.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="morpion.php">Voir le projet</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/gsb.jpg" alt="Projet GSB gestion des frais">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Projet en binome</span>
            <span class="project-badge">PHP / MVC</span>
          </div>
          <h3>GSB1 gestion des frais</h3>
          <p>Une reprise d'application existante avec amelioration fonctionnelle, structuration du code et reponse a un cahier des charges plus cadre.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="gsb.php">Voir le projet</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/GSB1.png" alt="Projet GSB gestion des materiels">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Application Java</span>
            <span class="project-badge">Java / Base de donnees</span>
          </div>
          <h3>GSB2 gestion des materiels</h3>
          <p>Une application Java connectee a une base de donnees pour gerer materiels et vehicules avec une logique plus orientee logiciel metier.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="gsb2.php">Voir le projet</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/GSB1.png" alt="Projet GSB gestion des conferences">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Framework web</span>
            <span class="project-badge">CodeIgniter</span>
          </div>
          <h3>GSB3 gestion des conferences</h3>
          <p>Une application web construite avec CodeIgniter pour consulter, gerer et suivre des inscriptions a des conferences.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="gsb3.php">Voir le projet</a>
          </div>
        </article>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-tag">Produits et maintenance</div>
      <h2>Des projets personnels plus recents, deployes ou maintenus.</h2>
      <div class="project-grid">
        <article class="project-card">
          <img src="img/majestylauncher-accueil.jpg" alt="MajestyLauncher">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Produit personnel</span>
            <span class="project-badge">Launcher Minecraft</span>
          </div>
          <h3>MajestyLauncher / MajestyCraft 4.0</h3>
          <p>Launcher dedie a l'univers MajestyCraft, presente comme un launcher francais avec gestion des versions Minecraft, compatibilite OptiFine et Forge, gestion des mods et packs de ressources, et integration d'un telechargement simplifie.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="https://majestylauncher.com/" target="_blank" rel="noopener">Voir le site</a>
            <a class="btn btn-secondary" href="https://github.com/CapDRAKE/MajestyCraft-4.0" target="_blank" rel="noopener">Voir le GitHub</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/majestycraft-bg.jpg" alt="MajestyCraft">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Produit en ligne</span>
            <span class="project-badge">Minecraft</span>
          </div>
          <h3>MajestyCraft</h3>
          <p>Serveur Minecraft multijoueur centre sur plusieurs modes comme Survie, PvP Box, Skyblock et Creatif, avec une experience pensee pour durer, des systemes exclusifs et un lien direct avec MajestyLauncher.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="https://majestycraft.com/" target="_blank" rel="noopener">Voir le site</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/majestychallenge-favicon.png" alt="MajestyChallenge">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Plateforme IA</span>
            <span class="project-badge">EdTech</span>
          </div>
          <h3>MajestyChallenge</h3>
          <p>Plateforme de coding challenge assistee par l'IA, orientee apprentissage et evaluation, avec exercices interactifs, generation IA, execution instantanee et suivi de progression sur plusieurs langages.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="https://majestychallenge.fr/" target="_blank" rel="noopener">Voir le site</a>
          </div>
        </article>

        <article class="project-card">
          <img src="img/majestylauncher-param.jpg" alt="AlternativeAPI">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Librairie reprise</span>
            <span class="project-badge">JavaFX</span>
          </div>
          <h3>AlternativeAPI Reloaded</h3>
          <p>J'ai repris la librairie AlternativeAPI et je la maintiens depuis 3 ans. Elle sert de base JavaFX pour des launchers Minecraft et couvre notamment les usages Forge 1.13+ et les fichiers distants necessaires au lancement.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="https://github.com/CapDRAKE/AlternativeAPI-1.5.3-RELOADED" target="_blank" rel="noopener">Voir le GitHub</a>
          </div>
        </article>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="https://twitter.com/BastienLEUWERS"><span class="fa-stack fa-lg"><i class="fas fa-circle fa-stack-2x"></i><i class="fab fa-twitter fa-stack-1x fa-inverse"></i></span></a></li>
            <li class="list-inline-item"><a href="https://www.facebook.com/bastien.leuwers.54"><span class="fa-stack fa-lg"><i class="fas fa-circle fa-stack-2x"></i><i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i></span></a></li>
            <li class="list-inline-item"><a href="https://github.com/CapDRAKE"><span class="fa-stack fa-lg"><i class="fas fa-circle fa-stack-2x"></i><i class="fab fa-github fa-stack-1x fa-inverse"></i></span></a></li>
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

