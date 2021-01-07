<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head() ?>
  
</head>
<body>
  <!--div class="preloader d-flex justify-content-center align-items-center">
    <div class="spinner-border text-info" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div-->

  <button id="scrollToTop" class="scroll-to-top"><i class="fas fa-angle-up"></i></button>

  <header class="main-header" <?= bluerex_get_background('header_bg') ?>>
    <nav class="navbar navbar-expand-lg">
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

    <div class="main-header-text">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <?php
                bluerex_show_field('h3', 'header1');
                bluerex_show_field('h4', 'header2');
                bluerex_show_field('p', 'header_text');
            ?>
            <div class="main-header-buttons">
                <?php
                    $link = get_field( 'header_btn_1' );
                    if ( $link ) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a 
                        class="btn btn-pink rounded-pill" 
                        href="<?= esc_url( $link_url ); ?>" 
                        target="<?= esc_attr( $link_target ); ?>"
                    >
                        <?= esc_html( $link_title ); ?>
                    </a>
                <?php endif; ?>
                <?php
                    $link = get_field( 'header_btn_2' );
                    if ( $link ) :
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                    ?>
                    <a 
                        class="btn btn-violet rounded-pill" 
                        href="<?= esc_url( $link_url ); ?>" 
                        target="<?= esc_attr( $link_target ); ?>"
                    >
                        <?= esc_html( $link_title ); ?>
                    </a>
                <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
