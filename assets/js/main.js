// Bespoke Rx - Main JS


// ─── PROCEDURES FILTER ──────────────────────────────
const catItems = document.querySelectorAll('.procedures__cat-item');
const procedureCards = document.querySelectorAll('.procedure-card');

catItems.forEach(item => {
    item.addEventListener('click', function() {
        catItems.forEach(i => i.classList.remove('active'));
        this.classList.add('active');

        const selected = this.dataset.category;

        procedureCards.forEach(card => {
            if(selected === 'all' || card.dataset.category.includes(selected)) {
                card.classList.remove('hidden');
            } else {
                card.classList.add('hidden');
            }
        });
    });
});