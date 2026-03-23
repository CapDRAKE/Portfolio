<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'Contact | Bastien Leuwers',
    'description' => 'Contact Bastien Leuwers.',
    'active' => 'contact',
]);
?>
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

  <?php
portfolio_render_end([
    'copyright' => 'Portfolio Bastien Leuwers 2026',
    'extra_scripts' => [
        'js/jqBootstrapValidation.js',
        'js/contact_me.js'
    ],
]);
?>
