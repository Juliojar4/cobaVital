<article class="large-icon-box inline-block">
    <div class="flex flex-col items-center pb-2.5">
        @if($field_icon_box_image)
            {!! wp_get_attachment_image($field_icon_box_image["ID"], 'full') !!}
        @endif
    </div>
    <div class="flex flex-col items-center">
        <h3 class="text-xl font-semibold leading-[1.25em] text-black">{!! $field_icon_box_text !!}</h3>
    </div>
</article>