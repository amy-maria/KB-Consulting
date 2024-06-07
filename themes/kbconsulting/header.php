<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?>>
  
 
  <nav class="navbar navbar-expand-lg navbar-dark bg-teal-700">
  <div class="container-fluid">
  <a class="navbar-brand" href="<?php echo home_url()?>">KB Consulting</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
  data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo home_url()?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/about-us') ?>">About Us</a>
        </li><li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/blog'); ?>">Blog</a>
        </li><li class="nav-item">
          <a class="nav-link" href="<?php echo site_url('/events'); ?>">Events</a>
        </li>
        </ul>
        </div>
  </div>
</nav>
  
<div class="bg-teal-700 border border-black page-banner">
<img src="<?php echo esc_url( get_theme_file_uri( './assets/images/pexels-thecoachspace-2977565-1500x350.jpg')); ?>" alt="coaching picture"> 

  <div class="position: absolute  text-center ">
  <h1>KB Consulting</h1>
  <h2>Contact us for all of your business needs</h2>
  </div>
</div>
  </header>
