<?php
/**
 * The template for displaying Comments.
 *
 * The area of the page that contains comments and the comment form.
 *
 * @package WordPress
 * @subpackage KB Consulting
 * @since KB Consulting 1.0
 */
/*
 * If the current post is protected by a password and the visitor has not yet
 * entered the password we will return early without loading the comments.
 */
if ( post_password_required() )
return;
?>
<div id="comments" class=" mt-2 comments-area">
	<?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
	<?php
	printf(
		_nx(
			'Comment on "%2$s"',
			'%1$s thoughts on "%2$s"',
			get_comments_number(),
			'comments title',
			'kbconsulting'
		),
		number_format_i18n( get_comments_number() ),
		'<span>' . get_the_title() . '</span>'
	);
	?>
</h2>
<ol class="comment-list">
	<?php
	wp_list_comments( array(
		'style'       => 'ol',
		'short_ping'  => true,
		'avatar_size' => 54,
	) );
	?>
</ol><!-- .comment-list -->
<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>

<nav class="navigation comment-navigation" role="navigation">

    <h3 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'kbconsulting' ); ?></h3>
    <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'kbconsulting' ) ); ?></div>
    <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'kbconsulting' ) ); ?></div>

</nav><!-- .comment-navigation -->

<?php endif; // Check for comment navigation ?>
<?php if ( ! comments_open() && get_comments_number() ) : ?>
	<p class="no-comments"><?php _e( 'Comments are closed.', 'kbconsulting' ); ?></p>
<?php endif; ?>
<?php endif; // have_comments() ?>

<?php comment_form(); ?>

</div><!-- #comments -->
<div class="pagination">
	<?php paginate_comments_links(); ?>
</div>
