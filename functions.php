<?php

function bar_ecommerce_files() {
    wp_enqueue_script('bar-ecommerce-js', get_theme_file_uri('/build/index.js'), NULL, '1.0', true);
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Big+Shoulders+Display:wght@400;700&display=swap');
    wp_enqueue_style('bar_ecommerce_styles', get_theme_file_uri('/build/index.css'));

    wp_localize_script('bar-ecommerce-js', 'barEcommerceData', array(
        'root_url' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts', 'bar_ecommerce_files');

?>