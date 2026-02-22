<?php
/**
 * Title: Bespoke Experience Section
 * Slug: bespokerx/experience
 * Categories: featured
 */
?>

<!-- wp:group {"tagName":"section","className":"experience","layout":{"type":"constrained"}} -->
<section class="wp-block-group experience">

    <div class="experience__bg-pattern"></div>

    <div class="experience__frame-top" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/frame-2.svg');"></div>

    <div class="experience__ghosted-flower" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/ghosted-logo.svg');"></div>

    <!-- THE BESPOKE EXPERIENCE -->
    <!-- wp:group {"className":"experience__intro","layout":{"type":"constrained","contentSize":"700px"}} -->
    <div class="wp-block-group experience__intro">

        <!-- wp:heading {"level":2,"className":"experience__title"} -->
        <h2 class="experience__title">The Bespoke Experience</h2>
        <!-- /wp:heading -->

        <!-- wp:paragraph {"className":"experience__text"} -->
        <p class="experience__text">Our mission at Bespoke RX is to help patients tap into their true potential by transforming their appearance through aesthetic medicine. We want to improve your life by increasing your confidence in your skin’s quality. With compassion and empathy, your treatment plan will be tailored to suit your unique needs. Amanda Conti NP, founder of Bespoke RX, will work with you from day one - from your initial consultation to follow-up appointments - to ensure that you reach the aesthetic goals you desire and allow a lasting relationship to form.</p>
        <!-- /wp:paragraph -->

    </div>
    <!-- /wp:group -->

    <!-- BESPOKE MEANS TAILORED -->
    <!-- wp:group {"className":"experience__tailored","layout":{"type":"flex","flexWrap":"wrap","alignItems":"center"}} -->
    <div class="wp-block-group experience__tailored">

        <div class="experience__pattern__image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/frame.svg');"></div>
        <!-- wp:image {"className":"experience__image"} -->
        <figure class="wp-block-image experience__image">
            <img 
                src="<?php echo get_template_directory_uri(); ?>/assets/images/doctor-patient.jpg" 
                alt="Bespoke Rx Doctor"
            >
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"className":"experience__tailored-content","layout":{"type":"constrained"}} -->
        <div class="wp-block-group experience__tailored-content">

            <!-- wp:heading {"level":3,"className":"experience__tailored-title"} -->
            <h3 class="experience__tailored-title">Bespoke Means Tailored</h3>
            <!-- /wp:heading -->

            <!-- wp:paragraph {"className":"experience__tailored-text"} -->
            <p class="experience__tailored-text">At Bespoke RX, we provide patients with an aesthetic boosting experience tailored to their unique needs. You can feel comfortable and confident in your skin as Amanda Conti helps guide you through each treatment offered at Bespoke RX. Your imperfections will not be highlighted when you visit Bespoke RX, but you will realize how beautiful you can truly be.</p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"className":"experience__tailored-text"} -->
            <p class="experience__tailored-text">There is no one size fits all solution to aesthetic concerns. An aesthetics practice should individualize its approach from patient to patient. A visit to Bespoke RX is an opportunity to transform yourself while retaining natural-looking results - tailored to you.</p>
            <!-- /wp:paragraph -->

            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"btn-learn-more"} -->
                <div class="wp-block-button btn-learn-more">
                    <a class="wp-block-button__link" href="/the-bespoke-experience">
                        Learn More
                    </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

        </div>
        <!-- /wp:group -->

    </div>
    <!-- /wp:group -->

</section>
<!-- /wp:group -->