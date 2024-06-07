
<?php 
get_header(); 

?>

<div>
<?php 
while (have_posts()) {
    the_post(); ?>
    <div class="font-bold m-3">
        <h2><a href="<?php the_permalink(); ?>" ><?php the_title(); ?></a></h2>
    </div>
    <div class="m-2 font-lg'">
        <p>Posted by <?php the_author_posts_link(); ?> on <?php the_time('F j, Y'); ?> in <?php echo get_the_category_list(', '); ?></p>
    </div>
    <div class="m-3 leading-4">
        <?php the_excerpt(); ?>
        <a href="<?php the_permalink(); ?>" class='text-blue-600 m-3 '>Continue Reading</a>
    </div>
</div>
<?php }
echo paginate_links();
?>

</div>
<?php 
get_footer(); 
?>
