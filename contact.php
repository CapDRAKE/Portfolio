<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Contact Bastien Leuwers.">
  <meta name="author" content="Bastien Leuwers">
  <title>Contact | Bastien Leuwers</title>
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
          <li class="nav-item"><a class="nav-link" href="experiences.php">Expériences</a></li>
          <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="masthead" style="background-image: url('img/header-contact-modern.svg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="page-heading">
        <div class="hero-badge"><i class="fas fa-envelope"></i> Contact</div>
        <h1>Me contacter</h1>
        <span class="subheading">Pour échanger sur un projet, une expérience ou une opportunité professionnelle.</span>
      </div>
    </div>
  </header>

  <main class="container page-frame">
    <section class="site-section reveal">
      <div class="section-shell split-layout">
        <div>
        <div class="section-tag">Coordonnées</div>
          <h2>Restons en contact</h2>
        <p class="section-lead">Tu peux utiliser le formulaire ci-dessous si tu souhaites me poser une question, demander plus d'informations ou simplement échanger autour d'un projet ou d'une mission.</p>
          <div class="career-list">
            <article class="career-card">
              <div class="meta">Email</div>
              <p>bastienleuwers2@gmail.com</p>
            </article>
            <article class="career-card">
              <div class="meta">GitHub</div>
              <p><a href="https://github.com/CapDRAKE" target="_blank" rel="noopener">github.com/CapDRAKE</a></p>
            </article>
          </div>
        </div>
        <div class="contact-card">
          <h2>Formulaire de contact</h2>
          <form action="mail/contact_me.php" method="POST" name="sentMessage" id="contactForm" novalidate>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Nom</label>
                <input type="text" class="form-control" placeholder="Nom" id="name" required data-validation-required-message="Merci de rentre votre nom.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Email" id="email" required data-validation-required-message="Merci de rentrer votre email.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="control-group">
              <div class="form-group floating-label-form-group controls">
                <label>Votre Message</label>
                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Merci de rentrer un message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div id="success"></div>
            <div class="hero-actions">
              <button type="submit" class="btn btn-primary" id="sendMessageButton">Envoyer</button>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="https://github.com/CapDRAKE"><span class="fa-stack fa-lg"><i class="fas fa-circle fa-stack-2x"></i><i class="fab fa-github fa-stack-1x fa-inverse"></i></span></a></li>
          </ul>
          <p class="footer-links">
            <a href="https://majestychallenge.fr/" target="_blank" rel="noopener">MajestyChallenge</a>
            <a href="https://majestylauncher.com/" target="_blank" rel="noopener">MajestyLauncher</a>
            <a href="https://majestycraft.com/" target="_blank" rel="noopener">MajestyCraft</a>
          </p>
          <p class="copyright text-muted">Copyright &copy; Portfolio Bastien Leuwers 2026</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <script src="js/clean-blog.min.js"></script>
</body>
</html>
