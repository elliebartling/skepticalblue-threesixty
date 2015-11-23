<?php
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