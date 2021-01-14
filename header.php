<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Hello, world!</title>
  
  <?php wp_head() ?>
  
</head>
<body>

  <!--div class="preloader d-flex justify-content-center align-items-center">
    <div class="spinner-border text-info" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div-->

  <button id="scrollToTop" class="scroll-to-top"><i class="fas fa-angle-up"></i></button>

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="<?= home_url() ?>">
            <?php $custom_logo = wp_get_attachment_image_src( get_theme_mod( 'custom_logo' ) ); ?>
            <?php if ($custom_logo): ?>
                <img 
                    src="<?= $custom_logo[0] ?>"
                    alt="<?php bloginfo( 'name' ) ?>"
                >
            <?php endif ?>
            <?php bloginfo( 'name' ) ?>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <?php wp_nav_menu([
                'theme_location' => 'header_menu',
                'container'      => false,
                'menu_class'     => 'navbar-nav',
            ]) ?>
        </div>
      </div>
    </nav>
  </header>
