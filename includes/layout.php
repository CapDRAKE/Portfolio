<?php
declare(strict_types=1);

if (!function_exists('portfolio_escape')) {
    function portfolio_escape(string $value): string
    {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('portfolio_navigation_items')) {
    function portfolio_navigation_items(): array
    {
        return [
            ['key' => 'home', 'href' => 'index.php', 'label' => 'Accueil'],
            ['key' => 'about', 'href' => 'index.php?view=about', 'label' => 'À propos'],
            ['key' => 'projects', 'href' => 'index.php?view=projects', 'label' => 'Mes projets'],
            ['key' => 'experience', 'href' => 'index.php?view=experience', 'label' => 'Expériences'],
            ['key' => 'contact', 'href' => 'index.php?view=contact', 'label' => 'Contact'],
        ];
    }
}

if (!function_exists('portfolio_footer_links')) {
    function portfolio_footer_links(): array
    {
        return [
            ['href' => 'https://majestychallenge.fr/', 'label' => 'MajestyChallenge'],
            ['href' => 'https://majestylauncher.com/', 'label' => 'MajestyLauncher'],
            ['href' => 'https://majestycraft.com/', 'label' => 'MajestyCraft'],
        ];
    }
}

if (!function_exists('portfolio_render_start')) {
    function portfolio_render_start(array $options = []): void
    {
        $title = $options['title'] ?? 'Bastien Leuwers | Développeur Full Stack';
        $description = $options['description'] ?? 'Portfolio de Bastien Leuwers.';
        $author = $options['author'] ?? 'Bastien Leuwers';
        $active = $options['active'] ?? '';

        ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?= portfolio_escape($description) ?>">
  <meta name="author" content="<?= portfolio_escape($author) ?>">
  <title><?= portfolio_escape($title) ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="stylesheet" media="screen" href="css/style.css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
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
<?php foreach (portfolio_navigation_items() as $item): ?>
<?php $isActive = $active === $item['key']; ?>
          <li class="nav-item">
            <a class="nav-link<?= $isActive ? ' active' : '' ?>" href="<?= portfolio_escape($item['href']) ?>"<?= $isActive ? ' aria-current="page"' : '' ?>><?= portfolio_escape($item['label']) ?></a>
          </li>
<?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>
<?php
    }
}

if (!function_exists('portfolio_is_app_request')) {
    function portfolio_is_app_request(): bool
    {
        return strtolower((string) ($_SERVER['HTTP_X_REQUESTED_WITH'] ?? '')) === 'portfolio-app';
    }
}

if (!function_exists('portfolio_redirect_to_app')) {
    function portfolio_redirect_to_app(string $route): void
    {
        if (portfolio_is_app_request()) {
            return;
        }

        $target = $route === 'home' ? 'index.php' : 'index.php?view=' . rawurlencode($route);
        header('Location: ' . $target, true, 302);
        exit;
    }
}

if (!function_exists('portfolio_render_end')) {
    function portfolio_render_end(array $options = []): void
    {
        $copyright = $options['copyright'] ?? 'Portfolio Bastien Leuwers 2026';
        $extraScripts = $options['extra_scripts'] ?? [];

        ?>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <ul class="list-inline text-center">
            <li class="list-inline-item"><a href="https://github.com/CapDRAKE"><span class="fa-stack fa-lg"><i class="fas fa-circle fa-stack-2x"></i><i class="fab fa-github fa-stack-1x fa-inverse"></i></span></a></li>
          </ul>
          <p class="footer-links">
<?php foreach (portfolio_footer_links() as $link): ?>
            <a href="<?= portfolio_escape($link['href']) ?>" target="_blank" rel="noopener"><?= portfolio_escape($link['label']) ?></a>
<?php endforeach; ?>
          </p>
          <p class="copyright text-muted">Copyright &copy; <?= portfolio_escape($copyright) ?></p>
        </div>
      </div>
    </div>
  </footer>

  <script defer src="vendor/jquery/jquery.min.js"></script>
  <script defer src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<?php foreach ($extraScripts as $script): ?>
  <script defer src="<?= portfolio_escape((string) $script) ?>"></script>
<?php endforeach; ?>
  <script defer src="js/clean-blog.min.js"></script>
</body>
</html>
<?php
    }
}

