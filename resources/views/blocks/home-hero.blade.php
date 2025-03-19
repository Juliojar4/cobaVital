<section id="home-hero" class="fluid-container bg-home-hero relative py-24 lg:py-64 bg-center bg-cover bg-no-repeat"
    style="background-image: url('{{ $hero_background_image['url'] }}');"
>
    <style>
        @media (max-width: 768px) {
            .bg-home-hero {
                background-image: url('{{ $hero_background_image_mobile['url'] }}') !important;
            }
        }
    </style>
</section>
