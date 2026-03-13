document.querySelectorAll('.questions__toggle').forEach(toggle => {
    toggle.addEventListener('click', () => {
        const questionItem = toggle.closest('.questions__drop');
        questionItem.classList.toggle('active');
    });
});

console.log('applied')