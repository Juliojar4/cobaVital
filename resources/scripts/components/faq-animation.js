
const faqItems = document.querySelectorAll('.faq-container');
if (faqItems) {
    faqItems.forEach((item) => {
        const title = item.querySelector('.cursor-pointer');
        const content = item.querySelector('.faq-content');
        const icon = item.querySelector('svg');
        title.addEventListener('click', () => {
            toggleFAQ(content, icon);
        });
    });
}

function toggleFAQ(content, icon) {
    const isOpen = content.classList.contains('open');
    if (isOpen) {
        content.classList.remove('open', 'mt-5', 'mb-5');
        content.style.maxHeight = '0';
        content.style.opacity = '0';
        icon.classList.remove('rotate-90');
    } else {
        content.classList.add('open', 'mt-5', 'mb-5');
        content.setAttribute("style", `max-height: ${content.scrollHeight + 20}px !important;`);
        content.style.opacity = '1';
        icon.classList.add('rotate-90');
    }
}