import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('#image-slider');

    if (slider) {
        const splide = new Splide(slider, {
            type: 'loop',
            perPage: 1,
            perMove: 1,
            pagination: false,
            arrows: false, 
        }).mount();

        document.querySelector('#custom-prev').addEventListener('click', () => splide.go('<'));
        document.querySelector('#custom-next').addEventListener('click', () => splide.go('>'));
    }  
});
