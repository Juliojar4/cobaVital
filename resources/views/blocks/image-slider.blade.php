@php
    $images = $images ?? []; 
@endphp

<div class="container my-20">
    <h2 class="uppercase text-center text-orange text-lg lg:text-2xl">onde comprar <span class="font-bold"> cobavital® </span> Sem sair de casa?</h2>
    @if (!empty($images))
        <!-- Desktop Grid: 3x2 -->
        <div class="hidden md:grid">
            @foreach (array_chunk($images, 3) as $row)
                <div class="grid grid-cols-3 gap-4">
                    @foreach ($row as $image)
                        <div class="flex justify-center">
                            <img src="{{ wp_get_attachment_image_url($image, 'large') }}" alt="Imagem" class="">
                        </div>
                    @endforeach
                </div>
            @endforeach
        </div>

        <!-- Mobile Slider -->
        <div class="md:hidden splide" id="image-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach (array_chunk($images, 3) as $row)
                        <li class="splide__slide grid grid-cols-1 gap-4">
                            @foreach ($row as $image)
                                <div class="flex justify-center">
                                    <img src="{{ wp_get_attachment_image_url($image, 'large') }}" alt="Imagem" class="">
                                </div>
                            @endforeach
                        </li>
                    @endforeach
                </ul>
            </div>
            <button id="custom-prev" class="custom-arrow custom-prev">
                <img class="absolute w-9 top-[43%]" src="@asset('images/arrow-left.svg')" alt="Anterior">
            </button>
        
            <button id="custom-next" class="custom-arrow custom-next">
                <img class="absolute w-9 top-[43%] right-0" src="@asset('images/arrow-rigth.svg')" alt="Próximo">
            </button>
        </div>
    @endif
</div>