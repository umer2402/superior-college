<?php
require_once __DIR__ . '/theme.php';

$pageTitle = $pageTitle ?? 'Superior College Bhakkar';
$pageDescription = $pageDescription ?? 'Superior College Bhakkar offers a student-focused environment built around academic excellence, interactive learning, and confident growth.';
$currentPage = $currentPage ?? '';
$useSlider = $useSlider ?? false;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="<?php echo htmlspecialchars($pageDescription, ENT_QUOTES, 'UTF-8'); ?>">
    <title><?php echo htmlspecialchars($pageTitle, ENT_QUOTES, 'UTF-8'); ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Spinnaker&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="webImages/logo.png" sizes="32x32">
    <link rel="stylesheet" href="assets/style.css">
    <?php if ($useSlider): ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/slider.css">
    <?php endif; ?>

    <style>
      :root {
        --primary-color: <?php echo htmlspecialchars($sitePrimaryColor, ENT_QUOTES, 'UTF-8'); ?>;
        --primary-dark: <?php echo htmlspecialchars($sitePrimaryDark, ENT_QUOTES, 'UTF-8'); ?>;
        --primary-light: <?php echo htmlspecialchars($sitePrimaryLight, ENT_QUOTES, 'UTF-8'); ?>;
        --primary-surface: <?php echo htmlspecialchars($sitePrimarySurface, ENT_QUOTES, 'UTF-8'); ?>;
        --primary-border: <?php echo htmlspecialchars($sitePrimaryBorder, ENT_QUOTES, 'UTF-8'); ?>;
      }
    </style>
  </head>
  <body>
    <?php include __DIR__ . '/navbar.php'; ?>
