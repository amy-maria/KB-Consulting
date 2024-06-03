<!-- single post page -->
<?php
  
  get_header();


  while(have_posts()) {
    the_post(); ?>
    <div class="m-3">
    <h2><?php the_title(); ?></h2>
    <?php
      $theParent = wp_get_post_parent_id(get_the_ID());
      if ($theParent) { ?>
        <div>
      <p><a href="<?php echo get_permalink($theParent); ?>"><i class="fa-solid fa-house" aria-hidden="true"></i> Back to Blog<?php echo site_url('/blog'); ?></a> <span>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></span></p>
    </div>
      <?php }
    ?>
    
    <?php the_content(); ?>
    <!-- If comments are open or we have at least one comment, load up the comment template -->
    <div class=" border border-slate-700">
    <?php if ( comments_open() || get_comments_number() ) : 
	comments_template();
  endif; ?>
    </div>
</div>
  <?php }

  get_footer();

?>