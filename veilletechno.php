<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_render_start([
    'title' => 'Veille techno | Bastien Leuwers',
    'description' => 'Veille technologique de Bastien Leuwers.',
    'active' => '',
]);
?>
<header class="masthead" style="background-image: url('img/header-veille-modern.svg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="page-heading">
        <div class="hero-badge"><i class="fas fa-eye"></i> Computer vision</div>
        <h1>Veille technologique</h1>
        <span class="subheading">Les articles de ma veille</span>
      </div>
    </div>
  </header>

  <main class="container page-frame">
    <section class="site-section reveal">
      <div class="project-grid">
        <article class="project-card">
          <img src="img/google.PNG" alt="Google Fit et computer vision">
          <div class="project-meta"><span class="project-badge project-badge-accent">5 fevrier 2021</span></div>
          <h3>La camera du smartphone pour mesurer le rythme cardiaque et la frequence respiratoire</h3>
          <p>Grace aux appareils photo et des algorithmes de computer vision, des smartphones Android pourront servir a une mesure de frequence cardiaque et respiratoire. Les mesures seront proposees avec l'application Google Fit. Il suffira a l'utilisateur d'appuyer son doigt legerement sur l'appareil photo du smartphone pour la frequence cardiaque, et de placer sa tete et le haut de son torse en face de l'appareil photo pour avoir sa frequence respiratoire.</p>
          <div class="project-actions"><a class="btn btn-secondary" href="https://www.generation-nt.com/google-fit-camera-rythme-cardiaque-frequence-respiration-pixel-actualite-1985003.html" target="_blank" rel="noopener">Voir le site</a></div>
        </article>
        <article class="project-card">
          <img src="img/VCCOVIC19.PNG" alt="Computer vision et COVID-19">
          <div class="project-meta"><span class="project-badge project-badge-accent">5 fevrier 2021</span></div>
          <h3>La vision par ordinateur dans la lutte contre la pandemie COVID-19</h3>
          <p>En cette periode agitee de la pandemie COVID-19, toutes les technologies sont mises en premiere ligne de la lutte antivirus et la vision par ordinateur ne fait pas exception. Nous pouvons voir a travers cet article, comment la computer vision a permis de detecter la presence du coronavirus.</p>
          <div class="project-actions"><a class="btn btn-secondary" href="https://jaxenter.com/computer-vision-covid-173692.html" target="_blank" rel="noopener">Voir le site</a></div>
        </article>
        <article class="project-card">
          <img src="img/marche.PNG" alt="Supermarche automatise">
          <div class="project-meta"><span class="project-badge project-badge-accent">8 decembre 2020</span></div>
          <h3>Un super marche automatise et exclusivement base sur la computer vision</h3>
          <p>Reposant exclusivement sur des technologies de vision par ordinateur, le nouveau magasin autonome d'AiFi porte a quatre le nombre d'etablissements operes par la start-up californienne a Shanghai. Une acceleration qui temoigne des ambitions du concurrent d'Amazon Go.</p>
          <div class="project-actions"><a class="btn btn-secondary" href="https://www.usine-digitale.fr/article/a-shanghai-aifi-inaugure-un-supermarche-automatise-et-exclusivement-base-sur-la-vision-par-ordinateur.N1037719" target="_blank" rel="noopener">Voir le site</a></div>
        </article>
        <article class="project-card">
          <img src="img/covid.PNG" alt="Depistage COVID par vision par ordinateur">
          <div class="project-meta"><span class="project-badge project-badge-accent">3 mars 2020</span></div>
          <h3>Computer vision | Covid 19</h3>
          <p>En Chine, des medecins utilisent un logiciel capable de depister les cas de coronavirus SARS-CoV-2. Via un scanner thoracique, l'algorithme peut detecter les signes cliniques d'une pneumonie, pathologie associee a la maladie Covid-19.</p>
          <div class="project-actions"><a class="btn btn-secondary" href="https://www.usine-digitale.fr/article/en-chine-des-medecins-utilisent-la-vision-par-ordinateur-pour-depister-le-coronavirus.N936199" target="_blank" rel="noopener">Voir le site</a></div>
        </article>
        <article class="project-card">
          <img src="img/site4.JPG" alt="Reconnaissance faciale">
          <div class="project-meta"><span class="project-badge project-badge-accent">23 octobre 2019</span></div>
          <h3>La reconnaissance faciale</h3>
          <p>La reconnaissance faciale est egalement une branche de la computer vision. Elle est presente dans pleins de choses comme nos smartphones, les cameras de surveillances, ou meme dans des robots. Cette technologie analyse un visage pour verifier l'identite.</p>
          <div class="project-actions"><a class="btn btn-secondary" href="https://www.lebigdata.fr/reconnaissance-faciale-tout-savoir" target="_blank" rel="noopener">Voir le site</a></div>
        </article>
        <article class="project-card">
          <img src="img/site2.JPG" alt="Definition computer vision">
          <div class="project-meta"><span class="project-badge project-badge-accent">28 juin 2019</span></div>
          <h3>Tout savoir sur cette technologie</h3>
          <p>Comme cite dans l'article precedent, la computer vision est une branche de l'intelligence artificielle. L'etre humain obtient la vision des sa naissance. Mais cela n'est pas si simple pour les ordinateurs car elle ne fonctionne pas de la meme maniere.</p>
          <div class="project-actions"><a class="btn btn-secondary" href="https://www.lebigdata.fr/computer-vision-definition" target="_blank" rel="noopener">Voir le site</a></div>
        </article>
        <article class="project-card">
          <img src="img/site1.JPG" alt="Qu'est-ce que la computer vision">
          <div class="project-meta"><span class="project-badge project-badge-accent">1 mars 2019</span></div>
          <h3>Qu'est ce que la computer vision ?</h3>
          <p>La computer vision signifie vision par ordinateur. C'est la capacite pour l'intelligence artificielle de voir comme l'etre humain. Elle est utilisee dans pleins de domaines : la voiture autonome, camera de surveillance, les drones...</p>
          <div class="project-actions"><a class="btn btn-secondary" href="https://blog.deloitte.fr/computer-vision-une-revolution-qui-ne-fait-que-commencer/" target="_blank" rel="noopener">Voir le site</a></div>
        </article>
        <article class="project-card">
          <img src="img/site3.JPG" alt="Voiture autonome">
          <div class="project-meta"><span class="project-badge project-badge-accent">10 mars 2017</span></div>
          <h3>La voiture autonome</h3>
          <p>Une des branches de la computer vision est la voiture autonome. Les constructeurs y sont nombreux : Tesla, Nissan, Google... Les voitures utilisent des cameras et des capteurs afin de se diriger et de prevoir les dangers.</p>
          <div class="project-actions"><a class="btn btn-secondary" href="https://www.lebigdata.fr/vehicules-autonomes-big-data" target="_blank" rel="noopener">Voir le site</a></div>
        </article>
      </div>
    </section>
  </main>

  <?php portfolio_render_end(['copyright' => 'Portfolio Bastien Leuwers 2026']); ?>
