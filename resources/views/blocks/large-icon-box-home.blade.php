<article class="grid grid-cols-2 sm:grid-cols-1 justify-between items-center w-full">
    <div class="flex items-center justify-center large-icon-box min-w-[120px]">
        @if($field_icon_box_image)
            {!! wp_get_attachment_image($field_icon_box_image["ID"], 'full') !!}
        @endif
    </div>
    <div class="flex flex-col sm:items-center justify-center sm:pt-2">
        <h3 class="text-xl font-semibold leading-[1.25em] text-black sm:text-center">{!! $field_icon_box_text !!}</h3>
    </div>
</article>