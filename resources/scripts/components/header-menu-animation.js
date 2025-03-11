 
const hamburgerIcon = document.getElementById('hamburgerIcon');
const mobileNavMenu = document.getElementById('mobileNavMenu');

hamburgerIcon.addEventListener('click', () => {

if (mobileNavMenu.classList.contains('max-h-0')) {
    mobileNavMenu.classList.remove('max-h-0');
    mobileNavMenu.classList.add('max-h-screen');  
} else {
    mobileNavMenu.classList.remove('max-h-screen');
    mobileNavMenu.classList.add('max-h-0');
}
});
