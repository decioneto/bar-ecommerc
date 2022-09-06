<?php

function title($args) { ?>

    <div class="title <?php if($args['logo']) echo "with-logo" ?>">
        <div class="img-logo" style="background-image: url(<?php echo get_theme_file_uri("images/title-logo.svg") ?>)"></div>
        <h3 class="h3"><?php echo $args['title'] ?></h3>
        <div class="ornament" style="background-image: url(<?php echo get_theme_file_uri("images/title-ornament.svg") ?>)"></div>
    </div>

    <?php if($args['subtitle']) { ?>
        <div class="subtitle">
            <?php echo $args['subtitle'] ?>
        </div>
    <?php }
}

function bar_ecommerce_files() {
    wp_enqueue_script('bar-ecommerce-js', get_theme_file_uri('/build/index.js'), NULL, '1.0', true);
    wp_enqueue_style('body-fonts', 'https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@400;700&display=swap');
    wp_enqueue_style('title-fonts', 'https://fonts.googleapis.com/css2?family=Big+Shoulders+Display:wght@400;700&display=swap');
    wp_enqueue_style('bar_ecommerce_styles', get_theme_file_uri('/build/index.css'));

    wp_localize_script('bar-ecommerce-js', 'barEcommerceData', array(
        'root_url' => get_site_url()
    ));
}

add_action('wp_enqueue_scripts', 'bar_ecommerce_files');

?>