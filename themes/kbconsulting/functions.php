<?php 

function kbc_register_styles() {
wp_enqueue_style('kbc-themestyle', get_stylesheet_uri());
    wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/5f5b94fae0.js', array(), null, true);
   
    wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('kbc-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js',array('jquery'), null, true);
    
}

function kbc_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');
  add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'kbc_features');

add_action('wp_enqueue_scripts', 'kbc_register_styles');



function themename_custom_header_setup() {
	$args = array(
	
           
            // Display the header text along with the image.
            'header-text'            => true,
            // Header text color default.
            'default-text-color'     => 'black',
            // Header image width (in pixels).
            'width'                  => 1000,
            // Header image height (in pixels).
            'height'                 => 75,
            // Header image random rotation default.
            'flex-width'         => true,
		'flex-height'        => true,
            'random-default'         => false,
            // Enable upload of image file in admin.
            'uploads'                => true,
            // Function to be called in theme head section.
            
        );
        add_theme_support( 'custom-header', $args );
    }
    add_action( 'after_setup_theme', 'themename_custom_header_setup' );