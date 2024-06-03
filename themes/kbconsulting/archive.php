<!-- archive index of blog posts
-->
<?php 
get_header(); 
?>

<div class="bg-teal-700 border border-black page-banner">
    <div class="page-banner__content container t-center c-white">
      <h1 class=" text-center no-underline"><?php the_archive_title(); ?> 
        </h1>
        <p class='text-center'><?php the_archive_description(); ?></p>
      <hr/>
    </div>
  </div>
  </div>
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
        <a href="<?php the_permalink(); ?>"> <button class="bg-blue-500 hover:bg-blue-700 text-white py-3 px-4 rounded">Continue Reading</a></button>
    </div>
</div>
<?php }
echo paginate_links();
?>

</div>
<?php 
get_footer(); 
?>
