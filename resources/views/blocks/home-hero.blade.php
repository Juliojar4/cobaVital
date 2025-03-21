<section id="home-hero" class="relative bg-home-hero">
    <div class="w-full aspect-[16/5.1] bg-no-repeat bg-center bg-contain"
        style="background-image: url('{{ $hero_background_image['url'] }}');">
    </div>

    <style>
        @media (max-width: 768px) {
            .bg-home-hero div {
                background-image: url('{{ $hero_background_image_mobile['url'] }}') !important;
                aspect-ratio: 12 / 6.9;
            }
        }
    </style>
</section>
