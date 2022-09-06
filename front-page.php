<?php get_header() ?>

<div class="hero-header">
    <div class="bg-image" style="background-image: url(<?php echo get_theme_file_uri('images/hero.jpg') ?>)"></div>
    
    <div class="hero-header__info container">
        <div class="info__left">
            <h1 class="h1">Black Bottle</h1>
            <div class="subtitle">700ml | Scotland</div>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Facilisi est, facilisis ipsum est. Scelerisque massa.
            </p>

            <div class="info__action">
                <div>$25.00</div>
                <button class="button primary outlined">Buy Now</button>
            </div>
        </div>
        <div class="info__right">
            <img src="<?php echo get_theme_file_uri('images/black-bottle.png') ?>" alt="">
        </div>
    </div>
</div>


<section id="tradition" class="container">
    <?php title(array(
        "title" => "100 years of tradition",
        "logo" => true,
        "subtitle" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Tortor mauris eu vulputate porttitor morbi arcu. Id nisl fermentum nunc amet pellentesque enim mattis mi cursus."
    )) ?>

</section>

<?php get_footer() ?>
