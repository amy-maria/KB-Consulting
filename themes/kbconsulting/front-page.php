<!-- home page  -->
<?php get_header(); ?>

  
  <div class="container">
 <div class=" grid grid-cols-1 gap-4 grid-rows-1">
 
        <h2 class="text-center columns-1 m-2">Upcoming Events</h2>
  
          <?php 
          $today = date('Ymd');
          $homepageEvents = new WP_Query(array(
            'posts_per_page' => 3,
            'post_type' => 'event',
            'order_by' => 'meta_value_num',
            'meta_key' => 'event_date',
            'meta_query' => array(
              array(
                'key' => 'event_date',
                'compare' => '>=',
                'value' => $today,
                'type' => 'numeric'
              )
            )
          ));
          if ($homepageEvents ->have_posts()) {
          while($homepageEvents-> have_posts()) {$homepageEvents->the_post();
          ?>


            <a class="bg-yellow-100 rounded-full h-16 w-16 flex items-center justify-center" href="<?php the_permalink();?>">
            <span class="event-summary__month"><?php 
            $eventDate = new DateTime(get_field('event_date'));
             echo $eventDate -> format('m/')
            ?></span>
            <span class="event-summary__day"><?php 
            $eventDate = new DateTime(get_field('event_date'));
             echo $eventDate -> format('d/')
            ?></span>  
            <span class="event-summary__day"><?php 
            $eventDate = new DateTime(get_field('event_date'));
             echo $eventDate -> format('y')
            ?></span>  
          </a>
  
            <h5><a href="<?php the_permalink();?>"><?php the_title() ?></a></h5>
            <p><?php if(has_excerpt()) {
              echo get_the_excerpt();
            } else {
              echo wp_trim_words(get_the_content(), 18); } ?> 
              <a href="<?php the_permalink();?>" class="text-blue-600">Learn more</a></p>

      
  
          <?php
          }
        } else {
          echo '<p> No upcoming events found. </p>';
          }
          ?>
      
        <h2 class="text-center columns-1 m-4">From Our Blogs</h2>
        <?php 
        $homepagePosts = new WP_Query(array( 
          'posts_per_page' => 3,
        ));
        if ($homepagePosts->have_posts()) {
        while($homepagePosts->have_posts()) {
         $homepagePosts->the_post(); 
         ?>
          
          <a class="bg-yellow-100 rounded-full h-16 w-16 flex items-center justify-center" href="<?php the_permalink();?>">
            <span class="blog__month"><?php the_time('m/ ')?></span>
            <span class="blog__day"><?php the_time('d/')?></span>  
            <span class="blog__day"><?php the_time('y')?></span>  

          </a>
          <div class="blog-summary__content">
            <h5 class="blog-summary__title headline headline--tiny"><a href="<?php the_permalink();?>"><?php the_title();?></a></h5>
            <p><?php echo wp_trim_words(get_the_content(), 18); ?><a href="<?php the_permalink();?>" class="text-blue-600">Read more</a></p>
          </div>
    

        <?php
        }
      } else {
        echo '<p>No blog posts found.</p>';
      }
       wp_reset_postdata();
      ?>
     
  
  </div>
</div>
       

 
  
 
  <?php get_footer();

?>