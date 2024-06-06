<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage KB Consulting
 * @since KB Consulting 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<header class="page-header">
				<h1 class="page-title text-center m-2"><?php _e( 'Page Not Found', 'kbconsulting' ); ?></h1>
			</header>

			<div class="page-wrapper">
				<div class="page-content text-center">
					<h2><?php _e( 'This is embarrassing.', 'kbconsulting' ); ?></h2>
					<p?><?php _e('It looks like nothing was found at this location. Go to ')?><a href="<?php echo site_url("#")?>">Home page</a></p>

		
				</div><!-- .page-content -->
			</div><!-- .page-wrapper -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>