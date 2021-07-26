<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head prefix="og: http://ogp.me/ns# fb: http://ogp.me/ns/fb# website: http://ogp.me/ns/website#">
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="google-site-verification" content="m8L-A_Cvobrl8NzCUBGq0a4MbH36sZhOM6FKDPNF4LI" />
  <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
  <?php wp_head(); ?>
</head>

<body>
  <!-- header -->
  <header class="header">
    <div class="inner header-inner">
      <nav class="header-nav">
        <ul class="nav-list">
          <li class="nav-item"><a href="#works">WORKS</a></li>
          <li class="nav-item"><a href="#skill">SKILL</a></li>
          <li class="nav-item"><a href="#about">ABOUT</a></li>
          <li class="nav-item"><a href="#contact">CONTACT</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <!-- /.header -->

  <!-- drawer icon -->
  <button class="drawer-icon">
    <span class="drawer-bars">
      <span class="drawer-bar1"></span>
      <span class="drawer-bar2"></span>
      <span class="drawer-bar3"></span>
    </span>
  </button>

  <!-- drawer item -->
  <div class="drawer-content">
    <div class="drawer-items">
      <div class="drawer-item"><a href="#works">WORKS</a></div>
      <div class="drawer-item"><a href="#skill">SKILL</a></div>
      <div class="drawer-item"><a href="#about">ABOUT</a></div>
      <div class="drawer-item"><a href="#contact">CONTACT</a></div>
    </div>
  </div>

  <!-- drawer bg -->
  <div class="drawer-bg"></div>