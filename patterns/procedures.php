<?php
/**
 * Title: Procedures Page
 * Slug: bespokerx/procedures
 * Categories: featured
 */

// GEt all categories
$categories = get_terms([
    'taxonomy'   => 'treatment_category',
    'hide_empty' => true,
]);

// Get all treatments
$treatments = new WP_Query([
    'post_type'      => 'treatment',
    'posts_per_page' => -1,
    'orderby'        => 'title',
    'order'          => 'ASC',
]);
?>

<!-- wp:group {"tagName":"section","className":"procedures","layout":{"type":"constrained","wideSize":"100%"}} -->
<section class="wp-block-group procedures">

     <div class="contact-hero-titles">
        <h1 class="contact-title-massive">GALLERY</h1>
        <h2 class="contact-title-sub">Our Procedures</h2>
    </div>

    <div class="procedures__wrapper">

        <aside class="procedures__sidebar">
            <h3 class="procedures__sidebar-title">Categories</h3>
            <ul class="procedures__categories">
                <li class="procedures__cat-item active" data-category="all">
                    All
                </li>
                <?php foreach( $categories as $cat ) : ?>
                <li class="procedures__cat-item" data-category="<?php echo esc_attr( $cat->slug ); ?>">
                    <?php echo esc_html( $cat->name ); ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </aside>

        <div class="procedures__grid">
            <?php if( $treatments->have_posts() ) : ?>
                <?php while( $treatments->have_posts() ) : $treatments->the_post(); ?>
                    <?php
                    $cats = get_the_terms( get_the_ID(), 'treatment_category' );
                    $cat_slugs = $cats ? implode( ' ', wp_list_pluck( $cats, 'slug' ) ) : '';
                    ?>
                    <div class="procedure-card" data-category="<?php echo esc_attr( $cat_slugs ); ?>">
                        <?php if( has_post_thumbnail() ) : ?>
                            <div class="procedure-card__image">
                                <?php the_post_thumbnail( 'large' ); ?>
                                <div class="procedure-card__overlay">
                                    <span class="procedure-card__zoom">&#128269;</span>
                                </div>
                            </div>
                        <?php endif; ?>
                        <div class="procedure-card__content">
                            <h3 class="procedure-card__title"><?php the_title(); ?></h3>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>

    </div>

</section>
<!-- /wp:group -->