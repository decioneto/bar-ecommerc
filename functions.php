<?php

function bar_ecommerce_files() {
    wp_enqueue_style('google-fonts', '//fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&family=Big+Shoulders+Display:wght@400;700&display=swap');
    wp_enqueue_style('bar_ecommerce_styles', get_theme_file_uri('/build/index.css'));
}

add_action('wp_enqueue_scripts', 'bar_ecommerce_files');

?>