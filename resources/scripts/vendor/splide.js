import Splide from '@splidejs/splide';

document.addEventListener('DOMContentLoaded', function () {
    const slider = document.querySelector('#image-slider');

    if (slider) {
        const splide = new Splide(slider, {
            type: 'loop',
            perPage: 3,
            perMove: 3,
            pagination: false,
            arrows: false,
            autoplay: true, 
            interval:3000,
            breakpoints: {
                1024: {
                    perPage: 3,
                    perMove: 3,
                },
                768: {
                    perPage:2,
                    perMove:2,
                }
            }
        }).mount();

        document.querySelector('#custom-prev').addEventListener('click', () => splide.go('<'));
        document.querySelector('#custom-next').addEventListener('click', () => splide.go('>'));
    }  
});
