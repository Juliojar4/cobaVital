<footer class="fluid-container bg-black mx-auto lg:py-[50px] md:px-3 pt-[25px] pb-[20px] px-3">
  <div class="container md:flex-row  gap-4 flex flex-col">
    <div class="md:w-1/5 flex md:items-start justify-between items-center">
      <a class="block h-auto" href="https://www.abbottbrasil.com.br/" target="_blank">
        <img class="object-contain" src="@asset('images/Abbott2.png')" alt="Abbot Logo">
      </a>
      <div class="md:w-1/5 md:my-0 md:hidden flex flex-row gap-6 my-3">
        <a href="https://web.facebook.com/AbbottBrasil/" target="_blank">
          <img class="max-h-[25px]" src="@asset('images/facebook-white-logo.png')" alt="Facebook Logo">
        </a>
        <a href="https://www.instagram.com/abbottglobal/" target="_blank">
          <img class="max-h-[25px]" src="@asset('images/instagram-white-logo.png')" alt="Instagram Logo">
        </a>
      </div>
    </div>
    <div class="md:my-0 md:w-1/5 my-3 flex">
      @if (has_nav_menu('footer_menu_1'))
        {!! wp_nav_menu([
          'theme_location' => 'footer_menu_1',
          'menu_class' => 'footer-menu',
          'echo' => false,
        ]) !!}
      @endif
    </div>
    <div class="md:my-0 md:w-1/5 my-3 flex">
      @if (has_nav_menu('footer_menu_2'))
        {!! wp_nav_menu([
          'theme_location' => 'footer_menu_2',
          'menu_class' => 'footer-menu',
          'echo' => false,
        ]) !!}
      @endif
    </div>
    <div class="md:w-1/5 md:my-0 flex my-3">
      @if (has_nav_menu('footer_menu_3'))
        {!! wp_nav_menu([
          'theme_location' => 'footer_menu_3',
          'menu_class' => 'footer-menu',
          'echo' => false,
        ]) !!}
      @endif</div>
    <div class="md:w-1/5 md:my-0 md:flex hidden flex-row gap-6 my-3">
      <a href="https://web.facebook.com/AbbottBrasil/" target="_blank">
        <img class="max-h-[35px]" src="@asset('images/facebook-white-logo.png')" alt="Facebook Logo">
      </a>
      <a href="https://www.instagram.com/abbottglobal/" target="_blank">
        <img class="max-h-[35px]" src="@asset('images/instagram-white-logo.png')" alt="Instagram Logo">
      </a>
    </div>
  </div>
  <div class="container mt-8">
    <div class="mb-4">
      <h4 class="text-white font-bold text-sm">Abbott Center</h4>
      <p class="text-white text-sm">Central de relacionamento com o cliente: 0800 703 1050</p>
      <p class="text-white text-sm">abbottcenter@abbott.com</p>
    </div>

    <div>
      <h4 class="text-white font-bold text-sm">Cobavital</h4>
      <p class="text-white text-sm">Aprovado em: Março/25 – BRZ2246385-2 Material destinado ao público em geral</p>
    </div>
  </div>
</footer>


