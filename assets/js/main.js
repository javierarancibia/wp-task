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