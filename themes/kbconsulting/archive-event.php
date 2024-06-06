<!-- archived events -->
<?php 
get_header(); 
?>


      <h1 class=" text-center"><?php the_archive_title(); ?> 
        </h1>
        <p class='text-center'><?php the_archive_description(); ?></p>
      <hr/>
    
<?php 
while (have_posts()) {
    the_post(); ?>
    <div class="font-bold no-underline">
        <h2 class='no-underline'><a  href="<?php the_permalink(); ?>"  ><?php the_title(); ?></a></h2>
    </div>
    <div class="m-2 font-lg'">
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
    </div>
    <div class="m-2 leading-4">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>"class=" text-blue-500 m-2">Continue Reading</a>
    </div>
</div>
<?php }
echo paginate_links();
?>

</div>
<?php 
get_footer(); 
?>
