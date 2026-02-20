<?php
/**
 * Title: Hero Section
 * Slug: bespokerx/hero
 * Categories: featured
 */
?>

<!-- wp:group {"tagName":"section","className":"hero","layout":{"type":"constrained","wideSize":"100%"}} -->
<section class="wp-block-group hero">

    <!-- Video background -->
    <div class="hero__video-wrapper">
        <video class="hero__video" autoplay muted loop playsinline>
            <source src="" type="video/mp4" data-src="<?php echo get_template_directory_uri(); ?>/assets/images/hero-video.mp4">
        </video>
        <!-- Fallback image mientras llega el video -->
        <div class="hero__overlay"></div>
        <img class="hero__fallback" 
             src="<?php echo get_template_directory_uri(); ?>/assets/images/menu-bg.jpg" 
             alt="">
    </div>

    <!-- Contenido centrado -->
    <!-- wp:group {"className":"hero__content","layout":{"type":"constrained"}} -->
    <div class="wp-block-group hero__content">

        <!-- wp:heading {"level":1,"className":"hero__title"} -->
        <h1 class="hero__title">Aesthetic Treatments</h1>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"hero__subtitle"} -->
        <p class="hero__subtitle">Customized for you</p>
        <!-- /wp:paragraph -->

        <!-- wp:buttons {"className":"hero__buttons","layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons hero__buttons">
            <!-- wp:button {"className":"hero__cta"} -->
            <div class="wp-block-button hero__cta">
                <a class="wp-block-button__link" href="https://bespokerx.myaestheticrecord.com/book/appointments/bBQyDNe8pm7oPzox9jGXORxW6aK54J/clinics">
                    Get Started
                </a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->

        <!-- Scroll indicator -->
        <!-- wp:paragraph {"className":"hero__scroll"} -->
        <p class="hero__scroll">Explore</p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

</section>
<!-- /wp:group -->