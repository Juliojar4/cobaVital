 

<section id="blog" class="fluid-container relative py-12">
    <div class="container flex flex-col gap-5">
        <h2 class="text-2xl font-bold text-orange uppercase">{{ get_field("post_list_title") }}</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-5 lg:gap-16 max-w-[500px] md:max-w-full w-full pb-5 m-0 m-auto">
            @foreach ($posts as $index => $post)
                <div class="flex flex-row-reverse md:block items-center gap-5 md:gap-10  {{ $index == 2 ? "border-none" : ''}} border-b md:border-none border-[#212529]">
                    <a class="w-1/2 md:w-full" target="_blank" href="{{ get_field('post_fields_link_post', $post->ID) }}">
                        <img class="mb-5" src="{{ get_the_post_thumbnail_url( $post->ID, 'full' ) }}" 
                             alt="{{ get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt', true) ?: '' }}">
                    </a>
                    <a class="w-1/2 md:w-full" target="_blank" href="{{ get_field('post_fields_link_post', $post->ID) }}">
                        <h4 class="text-base text-black uppercase font-medium leading-[1.2em]">{{ get_the_title( $post->ID ) }}</h4>
                    </a>
                </div>
            @endforeach
        </div>
        <div class="flex justify-center">
            <a class="flex items-center" target="_blank" href="{{ get_field('link_all_post') }}">
                <span class="uppercase font-bold">veja todos os conteúdos</span>
                <svg aria-hidden="true" class="w-[10px] ml-[13px] mb-[3px] e-font-icon-svg e-fas-caret-right" viewBox="0 0 192 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z"></path></svg>
            </a>   
        </div>  
    </div>
</section>
