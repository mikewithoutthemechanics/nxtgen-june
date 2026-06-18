<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/styles/tokens.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/styles/base.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/styles/layout.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/styles/components/button.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/styles/components/card.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/styles/components/badge.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/styles/components/input.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/src/styles/components/rating.css">
  <?php wp_head(); ?>
</head>
<body>
  <header class="site-header" role="banner">
    <div class="container site-header__inner">
      <a href="<?php echo home_url('/'); ?>" class="site-logo" aria-label="NxtGen Home">
        <strong>NxtGen</strong> Tutors
      </a>

      <nav class="site-nav site-nav--desktop" aria-label="Primary">
        <ul class="site-nav__list">
          <li><a href="<?php echo home_url('/find-tutor'); ?>">Find Tutor</a></li>
          <li><a href="<?php echo home_url('/subjects'); ?>">Subjects</a></li>
          <li><a href="<?php echo home_url('/pricing'); ?>">Pricing</a></li>
          <li><a href="<?php echo home_url('/become-a-tutor'); ?>">Become Tutor</a></li>
          <li><a href="<?php echo home_url('/blog'); ?>">Blog</a></li>
        </ul>
      </nav>

      <div class="site-header__actions site-header__actions--desktop">
        <a href="<?php echo home_url('/login'); ?>" class="btn btn--ghost">Login</a>
        <a href="<?php echo home_url('/find-tutor'); ?>" class="btn btn--primary">Book a Tutor</a>
      </div>

      <button class="site-header__menu-toggle" aria-label="Open menu" aria-expanded="false">
        <span class="hamburger"></span>
      </button>
    </div>
  </header>

  <main id="main" role="main">
    <!-- Page content inserted here -->