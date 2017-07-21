<html lang="en">
  <head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">

    <title><?php echo $site->title()->html() ?> | <?php echo $page->title()->html() ?></title>
    <meta name="description" content="<?php echo $site->description()->html() ?>">
    <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

    <?php echo css('assets/css/main.css') ?>

    <!-- removed jquery script and snipcart css call here - now called in footer from snipcart snippet -->

  </head>
  <body>
    <div class="main-section">

    <header class="header cf" role="banner">
      <a class="logo" href="<?php echo url() ?>">
        <img width="200" src="<?php echo url('assets/images/snipcart-logo.png') ?>" alt="<?php echo $site->title()->html() ?>" />
      </a>

      <?php snippet('menu') ?>
    </header>
