
<?php 
get_header(); 


  while(have_posts()) {
    the_post(); 
      $theParent = wp_get_post_parent_id(get_the_ID());
    $testArray = get_pages(array(
      'child_of' => get_the_ID()));
      ?>

   <?php if ($theParent || $testArray) { ?>
    <div class="page-links">
      <h2 class="m-3 page-links__title"><a href="<?php  the_permalink($theParent); ?>"><?php echo get_the_title($theParent); ?></a></h2>
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
    

    <div class="m-3 generic-content">
      <?php the_content(); ?>
    </div>

  <?php }?>

 <?php get_footer(); ?>

