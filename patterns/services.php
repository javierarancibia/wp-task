<?php
/**
 * Title: Services Section
 * Slug: bespokerx/services
 */
?>

<section class="wp-block-group services-section" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/abstract-curves.jpg');">
    

    <div class="services-container">
        
        <div class="services-visuals">
            <div class="image-stack">
                <div class="main-image-wrapper">
                    <img id="service-main-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/service-1.png" alt="Services">
                    
                    <div class="floating-action-button">
                        <span class="arrow">→</span>
                    </div>
                </div>

                <div class="services-text-overlay">
                    <span class="eyebrow">Our Services</span>
                    <h2 class="services-main-title">Enhance Your <br> Confidence <br> The Bespoke <br> Way</h2>
                </div>
            </div>
        </div>

        <div class="services-nav">
            <ul class="services-list">
                <li class="service-item" data-image="service-1.png">
                    <span class="radio-dot"></span>
                    <span class="label">Botox</span>
                    <a href="#" class="inline-learn">Learn More →</a>
                </li>
                <li class="service-item" data-image="service-2.png">
                    <span class="radio-dot"></span>
                    <span class="label">Chemical Peels</span>
                    <a href="#" class="inline-learn">Learn More →</a>
                </li>
                <li class="service-item active" data-image="service-1.png">
                    <span class="radio-dot"></span>
                    <span class="label">Dermal Fillers</span>
                    <a href="#" class="inline-learn">Learn More →</a>
                </li>
                <li class="service-item" data-image="service-2.png">
                    <span class="radio-dot"></span>
                    <span class="label">Dysport</span>
                    <a href="#" class="inline-learn">Learn More →</a>
                </li>
                <li class="service-item" data-image="service-1.png">
                    <span class="radio-dot"></span>
                    <span class="label">Hair Restoration with PRF</span>
                    <a href="#" class="inline-learn">Learn More →</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="pattern-bg services-pattern-bottom"></div>

    <div class="services-footer">
        <div class="progress-track">
            <div class="progress-fill" style="width: 40%;"></div>
        </div>
        <div class="nav-arrows">
            <span>‹</span> <span>›</span>
        </div>
    </div>

</section>

<script>
(function() {
    const initServices = () => {
        const items = document.querySelectorAll('.service-item');
        const imgElement = document.getElementById('service-main-image');
        const imageWrapper = document.querySelector('.main-image-wrapper');

        if (!items.length || !imgElement) return;

        // Add transition styles to image
        imgElement.style.transition = 'opacity 0.4s ease-in-out, transform 0.4s ease-in-out';

        items.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();

                // 1. Active classes
                items.forEach(i => i.classList.remove('active'));
                this.classList.add('active');

                // 2. Change image with smooth carousel animation
                const imgName = this.getAttribute('data-image');

                // Fade out and slide left
                imgElement.style.opacity = '0';
                imgElement.style.transform = 'translateX(-30px) scale(0.95)';

                setTimeout(() => {
                    // Important: Verify that the base path matches your assets folder
                    const themePath = '<?php echo get_template_directory_uri(); ?>/assets/images/';
                    imgElement.src = themePath + imgName;

                    // Reset position for slide in from right
                    imgElement.style.transform = 'translateX(30px) scale(0.95)';

                    // Trigger reflow
                    void imgElement.offsetWidth;

                    // Fade in and slide to center
                    requestAnimationFrame(() => {
                        imgElement.style.opacity = '1';
                        imgElement.style.transform = 'translateX(0) scale(1)';
                    });
                }, 400);
            });
        });
    };

    // Execute on load and if user navigates in block editor
    if (document.readyState === 'complete') {
        initServices();
    } else {
        window.addEventListener('load', initServices);
    }
})();
</script>