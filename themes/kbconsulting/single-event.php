<?php
  
  get_header();

  while(have_posts()) {
    the_post(); ?>
    
    <div class="m-3">
      <h1 class=><?php the_title(); ?></h1>   
    <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
      <?php }
    ?>
    <div class="text-wrap">
    <?php the_content(); ?>
      </div>
    </div>
  <?php }

  get_footer();

?>