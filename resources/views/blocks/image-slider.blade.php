<div class="container my-10 lg:my-16">
    <h2 class="uppercase text-center text-orange text-lg lg:text-2xl">
        onde comprar <span class="font-bold"> cobavital® </span> Sem sair de casa?
    </h2>
    
    @if (!empty($images))
        <div class="splide" id="image-slider">
            <div class="splide__track">
                <ul class="splide__list">
                    @foreach ($images as $row)
                        @php
                            $image_url = wp_get_attachment_image_url($row['slider_image'], 'large');
                            $link = $row['slider_link'] ?: '#'; 
                        @endphp
                        <li class="splide__slide grid grid-cols-1 gap-4">
                            <div class="flex justify-center">
                                <img src="{{ $image_url }}" alt="Imagem do slider" class="w-40 lg:w-auto">
                            </div>
                            <div class="flex justify-center">
                                <a class="bg-orange text-white px-8 py-2 text-sm lg:text-base font-bold uppercase rounded-xl" href="{{ $link }}" target="_blank" rel="noopener noreferrer">
                                    Compre Aqui
                                </a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            <button id="custom-prev" class="custom-arrow custom-prev">
                <img class="absolute w-7 lg:w-9 top-[43%]" src="@asset('images/arrow-left.svg')" alt="Anterior">
            </button>

            <button id="custom-next" class="custom-arrow custom-next">
                <img class="absolute w-7 lg:w-9 top-[43%] right-0" src="@asset('images/arrow-rigth.svg')" alt="Próximo">
            </button>
        </div>
    @endif
</div>
