<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'Experiences | Bastien Leuwers',
    'description' => 'Experiences professionnelles de Bastien Leuwers.',
    'active' => 'experience',
]);
?>
<header class="masthead" style="background-image: url('img/header-experiences-modern.svg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="page-heading">
        <div class="hero-badge"><i class="fas fa-briefcase"></i> Expérience professionnelle</div>
        <h1>Expériences en logiciel et data.</h1>
        <span class="subheading">SII, Thales et G2S occupent aujourd'hui une place centrale dans mon parcours, avec plus de 4 ans d'expérience autour de Java, Spark et du développement applicatif.</span>
      </div>
    </div>
  </header>

  <main class="container page-frame">
    <section class="site-section reveal">
      <div class="section-shell">
        <div class="section-tag">Expériences</div>
        <h2>Mes expériences récentes</h2>
        <div class="career-list">
          <article class="career-card">
            <div class="company-logo-strip">
              <span class="company-logo-chip company-logo-chip-sii">
                <img class="company-logo company-logo-sii" src="img/sii-logo.png" alt="Logo SII">
              </span>
              <span class="company-logo-chip company-logo-chip-thales">
                <img class="company-logo company-logo-thales" src="img/thales-logo.png" alt="Logo Thales">
              </span>
            </div>
            <div class="meta">Depuis octobre 2024</div>
            <h3>Ingénieur Logiciel chez SII en mission chez Thales</h3>
            <p>Rungis, Limours</p>
            <p>Développement Java sous environnement Linux.</p>
          </article>
          <article class="career-card">
            <div class="company-logo-strip">
              <span class="company-logo-chip">
                <img class="company-logo company-logo-g2s" src="img/g2s-logo.jpg" alt="Logo G2S">
              </span>
            </div>
            <div class="meta">Septembre 2021 - 2024</div>
            <h3>Alternant au sein de l'entreprise G2S (Groupama Supports Services)</h3>
            <p>Ingénieur data, développement d'applications Spark pour la migration de bases de données, et développement d'applications Java/JavaScript.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-shell split-layout">
        <div>
          <div class="section-tag">Expérience actuelle</div>
          <h2>SII / Thales</h2>
          <div class="company-logo-strip">
            <span class="company-logo-chip company-logo-chip-sii">
              <img class="company-logo company-logo-sii" src="img/sii-logo.png" alt="Logo SII">
            </span>
            <span class="company-logo-chip company-logo-chip-thales">
              <img class="company-logo company-logo-thales" src="img/thales-logo.png" alt="Logo Thales">
            </span>
          </div>
          <p class="section-lead">Depuis octobre 2024, j'évolue comme ingénieur logiciel chez SII en mission chez Thales, avec un travail centré sur le développement Java dans un environnement Linux.</p>
          <div class="inline-note"><i class="fas fa-server"></i><span>Java, Linux, environnement d'entreprise</span></div>
        </div>
        <div class="timeline-card">
          <div class="meta">Aujourd'hui</div>
          <h3>Un cadre plus exigeant</h3>
          <p>Cette expérience s'inscrit dans la continuité de mon parcours avec davantage de rigueur, d'architecture logicielle et de contraintes liées à la production.</p>
        </div>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-shell split-layout">
        <div>
          <div class="section-tag">Alternance</div>
          <h2>G2S (Groupama Supports Services)</h2>
          <div class="company-logo-strip">
            <span class="company-logo-chip">
              <img class="company-logo company-logo-g2s" src="img/g2s-logo.jpg" alt="Logo G2S">
            </span>
          </div>
          <p class="section-lead">Alternance menée de septembre 2021 à 2024 autour de la data et du développement applicatif.</p>
          <ul class="check-list">
            <li>Ingénieur data.</li>
            <li>Développement d'applications Spark pour la migration de bases de données.</li>
            <li>Développement d'applications Java / JavaScript.</li>
          </ul>
        </div>
        <div class="timeline-card">
          <div class="meta">2021 - 2024</div>
          <h3>Le lien entre études et concret</h3>
          <p>Cette alternance a fait le lien entre l'ESGI, la data, le développement et des besoins métier bien réels, avec des stacks variées et des sujets plus ambitieux.</p>
        </div>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-shell">
      <div class="section-tag">Stage</div>
      <h2>Stage chez i-BP</h2>
      <div class="career-card muted-card">
        <p>Conception et exécution de tests avec l'outil Octane, ainsi que mise en œuvre du kit nouvel arrivant sur Confluence.</p>
        <p>Ce stage a été ma première vraie immersion en entreprise, avec une découverte concrète des tests, de Confluence et d'un fonctionnement plus structuré en méthode Agile Scrum.</p>
      </div>
      <div class="timeline-grid mt-4">
          <article class="timeline-card muted-card">
            <div class="meta">Entreprise</div>
            <img src="img/ibp.png" alt="i-BP">
            <p class="mt-3">i-BP assure le développement informatique du Système d'Information de 11 Banques Populaires, de la Banque Palatine et de la Banque de Savoie.</p>
          </article>
          <article class="timeline-card muted-card">
            <div class="meta">Outils</div>
            <img src="img/octane.jpg" alt="Octane">
            <p class="mt-3">Octane pour les tests, Confluence pour le kit nouvel arrivant, et une immersion dans le fonctionnement concret d'une organisation plus structurée.</p>
          </article>
        </div>
      </div>
    </section>
  </main>

  <?php portfolio_render_end(['copyright' => 'Portfolio Bastien Leuwers 2026']); ?>
