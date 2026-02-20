<?php
/**
 * Title: Gallery Section
 * Slug: bespokerx/gallery
 */
?>

<section class="wp-block-group gallery-section">
    <div class="pattern-bg gallery-pattern-top"></div>
        <div class="gallery-container">
            
            <div class="gallery-image-wrapper">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gallery.png" 
                    alt="Bespoke Rx Doctor"
                >
                
                <div class="gallery-content">
                    <span class="gallery-eyebrow">Before &amp; After</span>
                    <h2 class="gallery-title">Gallery</h2>
                    <p class="gallery-subtext">Real Patients. Bespoke Results.</p>
                </div>

                <div class="enter-gallery-button">
                    <div class="circle-text">
                        <svg viewBox="0 0 100 100">
                            <path id="galleryPath" d="M 50, 50 m -35, 0 a 35,35 0 1,1 70,0 a 35,35 0 1,1 -70,0" fill="transparent"/>
                            <text><textPath xlink:href="#galleryPath">ENTER GALLERY • ENTER GALLERY • </textPath></text>
                        </svg>
                    </div>
                    <div class="gallery-arrow">→</div>
                </div>
            </div>
        </div>
    <div class="pattern-bg gallery-pattern-bottom"></div>
</section>