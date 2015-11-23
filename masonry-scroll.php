<?php

/*
  Template Name: Masonry Grid Scroll
*/

/*
 * @author  Frank Schrijvers
 * @link    https://www.wpstud.io
 */


// Enqueue scripts for masonry and infinite scroll
add_action('wp_enqueue_scripts', 'wpstudio_load_scripts_frontpage');
function wpstudio_load_scripts_frontpage() {
    wp_enqueue_script( 'infinite_scroll',  get_stylesheet_directory_uri() . '/js/jquery.infinitescroll.min.js', array( ),null,true );
    wp_enqueue_script( 'mansonry-isotope',  get_stylesheet_directory_uri() . '/js/masonry-isotope.min.js', array('infinite_scroll'),null, true );
    wp_enqueue_script( 'mansonry-init',  get_stylesheet_directory_uri() . '/js/init-masonry.min.js', array('jquery'),null, true );
    wp_enqueue_script( 'jquery-masonry', array( 'jquery' ), true );
}

// Add custom post class to posts
add_filter('post_class', 'wpstudio_custom_post_class');
function wpstudio_custom_post_class($classes) {
  $new_class = 'brick';
  $classes[] = esc_attr(sanitize_html_class($new_class));

  return $classes;
}

// Masonry loop
remove_action( 'genesis_loop', 'genesis_do_loop' );
add_action( 'wpstudio_content_area', 'wpstudio_masonry', 30 );

function wpstudio_masonry() { 
  
  $paged   = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1;

  $args = ( array(
      'post_type'         => 'post',
      'order'             => 'desc',
      'order_by'          => 'date',
      'paged'             => $paged,
      'posts_per_page'    => 6,
    )
  );

  echo '<section class="blog" id="container">';
  genesis_custom_loop( $args );
  echo '</section>';

  do_action( 'genesis_after_endwhile' );

}

// Add init infinite scroll
add_action( 'wp_footer', 'custom_infinite_scroll_js',100);
function custom_infinite_scroll_js() {
    ?>
    <script>
    var infinite_scroll = {
        loading: {
            msgText: "<?php _e( 'Loading the next set of posts...', 'plastic' ); ?>",
            finishedMsg: "<?php _e( 'All posts loaded.', 'plastic' ); ?>"
        },
        "nextSelector":".pagination-next a",
        "navSelector":".pagination",
        "itemSelector":".brick",
        "contentSelector":"#container",
        "behavior": "masonry"
    };

    jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll );

    </script>
    <?php
}

// Build the page
get_header();
do_action( 'wpstudio_content_area' );
get_footer();