<footer class="fluid-container bg-blue">
  <div class="lg:max-w-[1000px] lg:px-0 lg:py-[50px] mx-auto pt-[25px] pb-[20px] px-[10px] flex">
    <div class="w-1/5 flex items-start">
      <a class="block h-auto" href="https://www.abbottbrasil.com.br/" target="_blank">
        <img class="object-contain" src="@asset('images/Abbott2.png')" alt="Abbot Logo">
      </a>
    </div>
    <div class="w-1/5 flex">
      @if (has_nav_menu('footer_menu_1'))
        {!! wp_nav_menu([
          'theme_location' => 'footer_menu_1',
          'menu_class' => 'footer-menu',
          'echo' => false,
        ]) !!}
      @endif
    </div>
    <div class="w-1/5 flex">
      @if (has_nav_menu('footer_menu_2'))
        {!! wp_nav_menu([
          'theme_location' => 'footer_menu_2',
          'menu_class' => 'footer-menu',
          'echo' => false,
        ]) !!}
      @endif
    </div>
    <div class="w-1/5 flex">
      @if (has_nav_menu('footer_menu_3'))
        {!! wp_nav_menu([
          'theme_location' => 'footer_menu_3',
          'menu_class' => 'footer-menu',
          'echo' => false,
        ]) !!}
      @endif</div>
    <div class="w-1/5 flex flex-row gap-6">
      <a href="https://web.facebook.com/AbbottBrasil/" target="_blank">
        <img class="max-h-[35px]" src="@asset('images/facebook-white-logo.png')" alt="Facebook Logo">
      </a>
      <a href="https://www.instagram.com/abbottglobal/" target="_blank">
        <img class="max-h-[35px]" src="@asset('images/instagram-white-logo.png')" alt="Instagram Logo">
      </a>
    </div>
  </div>
  <div class="mx-auto max-w-[1000px] pb-[60px]">
    <p class="text-xs text-white">Preferências de Cookies</p>
  </div>
</footer>


