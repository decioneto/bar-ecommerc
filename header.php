<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
    <nav class="menu-nav-web">
        <div class="container d-flex">
            <div class="menu-left">
                <ul>
                    <li <?php if(is_page('home')) echo 'class="active"' ?> >
                        <a href="<?php echo site_url() ?>">Home</a>
                    </li>
                    <li>
                        <a href="#">About</a>
                    </li>
                    <li>
                        <a href="#">Products</a>
                    </li>
                    <li>
                        <a href="#">Blog</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
                </ul>
            </div>
            <div class="logo">
                <a href="<?php echo site_url() ?>">
                    <img src="<?php echo get_theme_file_uri("images/logo.svg") ?>" alt="Logo">
                </a>
            </div>
            <div class="menu-right">
                <div class="user-menu">
                    <button>
                        <i data-feather="user"></i>
                    </button>
                </div>

                <div class="floating favs">
                    <a href="#">
                        <span class="floating-number">0</span>
                        <i data-feather="heart"></i>
                    </a>
                </div>

                <div class="floating shopping">
                    <a href="#">
                        <span class="floating-number">0</span>
                        <i data-feather="shopping-bag"></i>
                        <span class="price">$ 0.00</span>
                    </a>
                </div>

                <div class="our-stores">
                    <a href="#">
                        <i data-feather="map-pin"></i>
                        Our Stores
                    </a>
                </div>
            </div>
        </div>
    </nav>