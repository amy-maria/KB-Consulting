<!-- static single post page -->
<?php get_header() ?>

<?php

  while(have_posts()) {
    the_post(); ?>
   
    <div class="page-banner__content container container--narrow">
      <h1 class="font-bold"><?php the_title(); ?></h1>
      <div class="page-banner__intro">
    
    
    </div>  
  </div>

  <div class="container container--narrow page-section">
    
    <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
        <div>
      <p><a href="<?php echo get_permalink($theParent); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent); ?></a> <span><?php the_title(); ?></span></p>
    </div>
      <?php }
    ?>

    
    
    <?php 
    $testArray = get_pages(array(
      'child_of' => get_the_ID()
    ));

    if ($theParent or $testArray) { ?>
    <div class="page-links">
      <h2 class="page-links__title"><a href="<?php echo get_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
      <ul class="min-list">
        <?php
          if ($theParent) {
            $findChildrenOf = $theParent;
          } else {
            $findChildrenOf = get_the_ID();
          }

          wp_list_pages(array(
            'title_li' => NULL,
            'child_of' => $findChildrenOf,
            'sort_column' => 'menu_order'
          ));
        ?>
      </ul>
    </div>
    <?php } ?>
    

    <div class="generic-content">
      <?php the_content(); ?>
    </div>

  </div>
    
  <?php }

  get_footer();

?>