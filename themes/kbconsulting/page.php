<!-- static single post page -->
<?php get_header() ?>

<?php

  while(have_posts()) :
    the_post(); ?>
   
    <div class="page-banner__content container container--narrow">
      <h1 class="font-bold"><?php the_title(); ?></h1>
  </div>

  <div class="container container--narrow page-section">
    <?php 
    $parent_id = wp_get_post_parent_id(get_the_ID());
    if ($parent_id) :
      ?>
    <div class="page-links">
      <h2 class="page-links__title">
      <a href="<?php echo ecs_url(get_permalink($parent_id)); ?>"><?php echo esc_html(get_the_title($parent_id)); ?></a></h2>
      <ul class="min-list">
        <?php
         
          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $parent_id,
            'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>
    <?php endif; ?>
    

    <div class="generic-content">
      <?php the_content(); ?>
    </div>
  </div>
    
  <?php endwhile; ?> 

  <?php get_footer(); ?>

