
<?php 
function kbc_register_styles() {
wp_enqueue_style('kbc-themestyle', get_stylesheet_uri());
    wp_enqueue_script('font_awesome', 'https://kit.fontawesome.com/5f5b94fae0.js', array(), null, true);
    wp_enqueue_style('google_fonts', 'https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap', array(), null, 'all');
    wp_enqueue_style('bootstrap-css','https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('kbc-bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js',array(), null, true);
    
}




function kbc_features() {
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  add_image_size('pageBanner', 1500, 350, true);
}

add_action('after_setup_theme', 'kbc_features');

add_action( 'after_setup_theme', 'themename_custom_header_setup' );
add_action('wp_enqueue_scripts', 'kbc_register_styles');



function themename_custom_header_setup() {
	$args = array(
			// Default Header Image to display.
            'default-image'          => get_template_directory_uri() . './assets/images/pexels-thecoachspace-29776565-1500x350.jpg',
            // Display the header text along with the image.
            'header-text'            => true,
            // Header text color default.
            'default-text-color'     => '000',
            // Header image width (in pixels).
            'width'                  => 1000,
            // Header image height (in pixels).
            'height'                 => 75,
            // Header image random rotation default.
            'flex-width'         => true,
		'flex-height'        => true,
            'random-default'         => false,
            // Enable upload of image file in admin.
            'uploads'                => false,
            // Function to be called in theme head section.
            
        );
        add_theme_support( 'custom-header', $args );
    }