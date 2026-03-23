<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'Veille | Bastien Leuwers',
    'description' => 'Veille de Bastien Leuwers.',
    'active' => '',
]);
?>
<header class="masthead" style="background-image: url('img/header-veille-modern.svg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="page-heading">
        <div class="hero-badge"><i class="fas fa-lightbulb"></i> Veille</div>
        <h1>Veilles</h1>
        <span class="subheading">Bastien LEUWERS</span>
      </div>
    </div>
  </header>

  <main class="container page-frame">
    <section class="site-section reveal">
      <div class="project-grid">
        <article class="project-card">
          <img src="img/oeil.jpg" alt="Veille technologique">
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Veille technologique</span>
          </div>
          <h3>Veille technologique</h3>
          <p>Ma veille technologique porte sur la computer vision. Computer vision signifie "vision par ordinateur". C'est la capacite d'un ordinateur a voir comme un humain.</p>
          <div class="project-actions">
            <a class="btn btn-primary" href="veilletechno.php">Voir la veille</a>
          </div>
        </article>
        <article class="project-card">
          <img src="img/droit.jpg" alt="Veille juridique">
          <div class="project-meta">
            <span class="project-badge">Veille juridique</span>
          </div>
          <h3>Veille juridique</h3>
            <p>Un second axe de veille pour suivre les dimensions juridiques qui accompagnent les usages numériques et les évolutions du secteur.</p>
        </article>
      </div>
    </section>
  </main>

  <?php portfolio_render_end(['copyright' => 'Portfolio Bastien Leuwers 2026']); ?>
