<section id="duvidas-frequentes" class="container pt-5 pb-12"> 
    <h2 class="text-center leading-none text-[2.5rem] lg:text-[3.315rem] text-pink">{{ $faq_title }}</h2>
    @if ($faq_items)
        <h2 class="mb-3">{{ get_field('title_accordion') }}</h2>
        <div class="accordion p-0">
            @foreach ($faq_items as $index => $faq)
                <div class="faq-container overflow-hidden">
                    <div class="accordion-question bg-orange flex justify-between items-center mb-3 p-4 cursor-pointer transition duration-200">
                        <h3 class="text-white font-bold w-[90%] text-[1.375rem] leading-none">{{ $faq['question'] }}</h3>
                        <svg class="w-4 h-4 transform transition-transform duration-200 e-font-icon-svg e-fas-angle-right" fill="#FFFFFF" viewBox="0 0 256 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                        </svg>
                    </div>
                    <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                        <div class="accordion-answer-faq accordion-answer px-4 pb-4">
                            <p class="text-gray font-georgia !text-base">{!! $faq['answer'] !!}</p>
                        </div>
                        <div class="bg-[#4d4d4d6b] h-[1px]"></div>
                    </div>
                </div>  
            @endforeach
        </div>
    @endif
</section>