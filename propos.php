<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_redirect_to_app('about');
portfolio_render_start([
    'title' => 'A propos | Bastien Leuwers',
    'description' => 'Presentation de Bastien Leuwers, developpeur Full Stack a dominante Java.',
    'active' => 'about',
]);
?>
<header class="masthead" style="background-image: url('img/header-profile-modern.svg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="page-heading">
        <div class="hero-badge"><i class="fas fa-user"></i> Profil</div>
        <h1>Full Stack, dominante Java.</h1>
        <span class="subheading">Je travaille principalement sur des sujets logiciel, Java, data et applications, avec plus de 4 ans d'expérience entre alternance et entreprise.</span>
      </div>
    </div>
  </header>

  <main class="container page-frame">
    <section class="site-section reveal">
      <div class="section-shell split-layout">
        <div>
          <div class="section-tag">Présentation</div>
          <h2>Bastien Leuwers</h2>
          <p class="section-lead">Développeur Full Stack, aujourd'hui davantage orienté logiciel, Java, data et applications que simple développement web. Mon parcours m'a amené du BTS SIO vers un Bachelor Intelligence Artificielle et Big Data, puis vers un Master Architecture des Logiciels, en parallèle d'expériences en alternance et en entreprise.</p>
          <div class="project-meta">
            <span class="project-badge project-badge-accent">Java</span>
            <span class="project-badge">SQL</span>
            <span class="project-badge">Linux</span>
            <span class="project-badge">Spark</span>
            <span class="project-badge">Angular</span>
            <span class="project-badge">JavaScript</span>
          </div>
        </div>
        <div class="profile-card floating-card">
          <img src="img/bastien-cv.jpg" alt="Portrait de Bastien Leuwers">
          <div>
            <h3>Aujourd'hui</h3>
            <p>Full Stack, avec un cœur de compétence sur Java, l'architecture logicielle et les applications métier.</p>
            <div class="hero-actions">
              <a class="btn btn-primary" href="cv/CV_Bastien_Leuwers.pdf" target="_blank" rel="noopener">Ouvrir le CV</a>
              <a class="btn btn-secondary" href="experiences.php">Voir mes expériences</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-shell">
        <div class="section-tag">ESGI</div>
        <h2>Une école d'informatique tournée vers les projets et l'alternance.</h2>
        <p class="section-lead">C'est à l'ESGI que j'ai construit la partie la plus récente de mon parcours, avec une montée en compétences autour du développement logiciel, de la data et de l'architecture applicative.</p>
        <div class="split-layout">
          <div class="image-frame school-spotlight">
            <img src="img/esgi-logo.svg" alt="Logo ESGI">
          </div>
          <div>
            <ul class="check-list">
              <li>9 spécialisations informatiques du bachelor au mastère.</li>
              <li>Alternance possible dès la première année.</li>
              <li>18 campus en France.</li>
            </ul>
            <p>J'y ai suivi un Bachelor Intelligence Artificielle et Big Data, puis un Master Architecture des Logiciels, avec une progression centrée sur Java, la conception et les environnements applicatifs.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-shell">
        <div class="section-tag">Formation</div>
        <h2>Mon cursus</h2>
        <div class="course-list">
          <article class="career-card school-card">
            <img class="school-logo" src="img/esgi-logo.svg" alt="Logo ESGI">
            <div>
              <div class="meta">2022 - 2024</div>
              <h3>Master Architecture des Logiciels</h3>
              <p>ESGI Paris</p>
              <p>Langage C et Java avancé, Python, Android, Flutter, Clean Code, NodeJS...</p>
            </div>
          </article>
          <article class="career-card school-card">
            <img class="school-logo" src="img/esgi-logo.svg" alt="Logo ESGI">
            <div>
              <div class="meta">2021 - 2022</div>
              <h3>Bachelor Intelligence Artificielle et Big Data</h3>
              <p>ESGI Paris</p>
              <p>Conception et base de données, langage C et Java avancé, Python...</p>
            </div>
          </article>
          <article class="career-card school-card school-card-muted">
            <div class="school-logo school-wordmark school-wordmark-muted" aria-label="BTS SIO"><span>BTS</span></div>
            <div>
              <div class="meta">2019 - 2021</div>
              <h3>BTS Services informatiques aux organisations - Mention Bien</h3>
              <p>Lycée Parc des Loges, Évry</p>
            </div>
          </article>
          <article class="career-card">
            <div class="meta">2018 - 2019</div>
            <h3>1ère année DUT Carrière Juridique</h3>
            <p>IUT de Troyes</p>
          </article>
          <article class="career-card">
            <div class="meta">2018</div>
            <h3>Baccalauréat STMG - Mention Assez Bien</h3>
            <p>Lycée Truffaut, Bondoufle - option Ressources Humaines</p>
          </article>
        </div>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-shell">
        <div class="section-tag">BTS SIO</div>
        <h2>Le BTS SIO a posé les bases de mon parcours en développement.</h2>
        <p class="section-lead">Le BTS Services informatiques aux organisations m'a apporté une première vraie structure en développement, en conception et en compréhension des besoins métier. C'est là que j'ai commencé à travailler de manière plus concrète sur des applications et des projets cadrés.</p>
        <div class="split-layout">
          <div class="image-frame"><img src="img/bts_sio.png" alt="BTS SIO"></div>
          <div>
            <p>SISR : l'option Solutions d'infrastructure, systèmes et réseaux forme à l'installation, à l'administration et à la maintenance des environnements techniques.</p>
            <p>SLAM : l'option Solutions logicielles et applications métiers forme à l'analyse, à la conception et au développement de solutions logicielles. C'est celle qui correspond le plus à mon orientation.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-shell">
        <div class="section-tag">Compétences</div>
        <h2>Mes compétences</h2>
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>Langages</th>
                <th>Web / Data</th>
                <th>Outils / OS</th>
                <th>Langues</th>
              </tr>
            </thead>
            <tbody>
              <tr><td>Python, Java, SQL</td><td>PHP, JavaScript, Angular, Spark</td><td>Windows, Linux, MacOS</td><td>Anglais niveau professionnel</td></tr>
              <tr><td>Langage C</td><td>HTML, CSS, JSON, XML</td><td>MySQL, machines virtuelles</td><td>Espagnol niveau scolaire</td></tr>
              <tr><td>Flutter, NodeJS</td><td>Android, bases de données</td><td>Word, Excel, PowerPoint, X-mind, Teamspeak</td><td></td></tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-shell">
        <div class="section-tag">CV</div>
        <h2>Mon CV</h2>
        <iframe src="cv/CV_Bastien_Leuwers.pdf" title="CV de Bastien Leuwers" height="900"></iframe>
        <div class="hero-actions">
          <a class="btn btn-primary" href="cv/CV_Bastien_Leuwers.pdf" target="_blank" rel="noopener">Télécharger mon CV</a>
        </div>
      </div>
    </section>

    <section class="site-section reveal">
      <div class="section-shell">
        <div class="section-tag">Centres d'intérêt</div>
        <h2>Mes centres d'intérêt</h2>
        <div class="timeline-grid">
          <article class="timeline-card"><div class="meta">Technique</div><h3>Informatique et gestion d'un serveur Minecraft</h3><p>En partenariat avec Minestrator.</p></article>
          <article class="timeline-card"><div class="meta">Sport et musique</div><h3>Cyclisme, footing, musculation, batterie</h3><p>Je pratique également la musique et je garde une place importante pour le rythme et l'énergie dans mon quotidien.</p></article>
          <article class="timeline-card"><div class="meta">Collectif</div><h3>Danse country</h3><p>Création d'un club.</p></article>
          <article class="timeline-card"><div class="meta">Ouverture</div><h3>Voyages</h3><p>Espagne, République dominicaine, Sicile, Turquie, Kenya.</p></article>
        </div>
      </div>
    </section>
  </main>

  <?php portfolio_render_end(['copyright' => 'Portfolio Bastien Leuwers 2026']); ?>
