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
                <li class="service-item" data-image="/assets/images/service-1.png">
                    <span class="radio-dot"></span> 
                    <span class="label">Botox</span> 
                    <a href="#" class="inline-learn">Learn More →</a>
                </li>
                <li class="service-item" data-image="/assets/images/service-1.png">
                    <span class="radio-dot"></span> 
                    <span class="label">Chemical Peels</span> 
                    <a href="#" class="inline-learn">Learn More →</a>
                </li>
                <li class="service-item active" data-image="/assets/images/service-1.png">
                    <span class="radio-dot"></span> 
                    <span class="label">Dermal Fillers</span> 
                    <a href="#" class="inline-learn">Learn More →</a>
                </li>
                <li class="service-item" data-image="/assets/images/service-1.png">
                    <span class="radio-dot"></span> 
                    <span class="label">Dysport</span> 
                    <a href="#" class="inline-learn">Learn More →</a>
                </li>
                <li class="service-item" data-image="hair-restoration.jpg">
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

        if (!items.length || !imgElement) return;

        items.forEach(item => {
            item.addEventListener('click', function(e) {
                e.preventDefault();
                
                // 1. Clases activas
                items.forEach(i => i.classList.remove('active'));
                this.classList.add('active');
                
                // 2. Cambio de imagen con fade
                const imgName = this.getAttribute('data-image');
                imgElement.style.opacity = '0';
                
                setTimeout(() => {
                    // Importante: Verifica que la ruta base coincida con tu carpeta de assets
                    const themePath = '<?php echo get_template_directory_uri(); ?>/assets/images/';
                    imgElement.src = themePath + imgName;
                    imgElement.style.opacity = '1';
                }, 300);
            });
        });
    };

    // Ejecutar al cargar y si el usuario navega en el editor de bloques
    if (document.readyState === 'complete') {
        initServices();
    } else {
        window.addEventListener('load', initServices);
    }
})();
</script>