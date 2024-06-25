<?php
/**
 * Custom shortcode: [custom]
 */
function custom_shortcode() {
    return '<p>This is a custom shortcode!</p>';
}
add_shortcode('custom', 'custom_shortcode');
