<?php
require_once __DIR__ . '/includes/layout.php';
portfolio_redirect_to_app('experience');
header('Location: index.php?view=experience', true, 301);
exit;
?>