// Bespoke Rx - Main JS


// ─── PROCEDURES FILTER ──────────────────────────────
const catItems = document.querySelectorAll('.procedures__cat-item');
const procedureCards = document.querySelectorAll('.procedure-card');
const subtitle = document.querySelector('.contact-title-sub');
const originalSubtitle = subtitle ? subtitle.textContent : '';

catItems.forEach(item => {
    item.addEventListener('click', function() {
        catItems.forEach(i => i.classList.remove('active'));
        this.classList.add('active');

        const selected = this.dataset.category;

        // Filter cards 
        procedureCards.forEach(card => {
            if(selected === 'all' || card.dataset.category.includes(selected)) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });

        // Update subtitle dynamically according to category
        if(subtitle) {
            subtitle.textContent = selected === 'all'
                ? originalSubtitle
                : this.textContent.trim();
        }
    });
});

// Function for updating the Discover slider
document.addEventListener('DOMContentLoaded', function() {
    const card = document.querySelector('.discover-card');
    if (!card) return; 

    const slides = card.querySelectorAll('.slide');
    const prevBtn = card.querySelector('.prev');
    const nextBtn = card.querySelector('.next');
    const counterText = card.querySelector('.counter');
    const progressBar = card.querySelector('.progress-bar-fill');
    
    let currentSlide = 0;
    const totalSlides = slides.length;

    function updateSlider() {
        slides.forEach((slide, index) => {
            if (index === currentSlide) {
                slide.classList.add('active');
            } else {
                slide.classList.remove('active');
            }
        });

        counterText.textContent = (currentSlide + 1) + ' OF ' + totalSlides;

        const progressPercentage = ((currentSlide + 1) / totalSlides) * 100;
        progressBar.style.width = progressPercentage + '%';
    }

    nextBtn.addEventListener('click', () => {
        currentSlide = (currentSlide + 1) % totalSlides;
        updateSlider();
    });

    prevBtn.addEventListener('click', () => {
        currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
        updateSlider();
    });
    
    updateSlider();
});