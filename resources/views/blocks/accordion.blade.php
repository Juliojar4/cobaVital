<section> 
    <div class="accordion p-0">
        <div class="relative bg-[#D4D4D0] fluid-container faq-container overflow-hidden">
            <div class="container">
                <div class="accordion-question flex justify-between items-center p-4 cursor-pointer transition duration-200">
                    <h3 class="text-[#4D4D4D] text-[1.3125rem] font-bold w-[90%] leading-none">{{ $accordion_title }}</h3>
                    <svg class="w-4 h-4 transform transition-transform duration-200 e-font-icon-svg e-fas-angle-right" fill="#4D4D4D" viewBox="0 0 256 512" xmlns="http://www.w3.org/2000/svg">
                        <path d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
                    </svg>
                </div>
                <div class="faq-content overflow-hidden max-h-0 transition-all duration-300">
                    <div class="accordion-answer-faq accordion-answer px-4 pb-4">
                        <p class="text-gray font-georgia">{!! $accordion_subtitle !!}</p>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</section>
 