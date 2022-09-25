<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?php bloginfo('description' ); ?>">
  <link rel="icon" href="img/favicon.ico">

  <title>YURI's_portfolio</title>

  <!-- OGP -->
  <head prefix="og: http://ogp.me/ns#">
  <meta property="og:url" content="	http://yurippe-design.pinoko.jp/myportfolio/">
  <meta property="og:type" content="website">
  <meta property="og:title" content="YURI's_portfolio">
  <meta property="og:site_name" content="YURI's Portfolio">
  <meta property="og:description" content="Webデザイン&グラフィックデザインをフリーランスデザイナーです。">
  <meta property="og:image" content="/">
  <?php wp_head(); ?>
</head>

<html>
<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

  <!-- ヘッダー -->


  <div class="wrapper">

<!-- header -->
<header class="header">
  <div class="header-inner">
    <h1 class="header-logo">
    <a href="<?php echo esc_url( home_url() ); ?>">Yuri's Portfolio</a>
    </h1>
    <nav class="header-nav">
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'main-menu',
          'container' => false,
        )
        );
        ?>
    </nav>
  </div>
</header>
<!-- /header -->






  <!-- ヘッダー終わりー -->