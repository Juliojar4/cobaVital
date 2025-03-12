<header class="container banner">
  <div class="relative">
    <div class="flex justify-between p-4 lg:py-12">
      <img class="h-10 lg:h-auto" src="@asset('images/instante-saude.png')" alt="">
      <img class="h-10 lg:h-auto" src="@asset('images/abbott.png')" alt="">
    </div>

    <div class="full-container hidden lg:flex bg-orange w-auto py-5">
      <nav class="container block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
    </div>

    <!-- Mobile Menu -->
    <div id="mobileMenu" class="full-container lg:hidden bg-orange py-4">
      <div class="container flex items-center justify-between">
        <h2 class="text-white text-2xl font-bold uppercase">cobalvital®</h2>
        <!-- Hamburger Icon -->
        <button id="hamburgerIcon" class="text-white">
          <span class="block w-6 h-0.5 bg-white mb-2"></span>
          <span class="block w-6 h-0.5 bg-white mb-2"></span>
          <span class="block w-6 h-0.5 bg-white"></span>
        </button>
      </div>
    </div>

    <!-- Mobile Menu Items -->
    <div id="mobileNavMenu" class="z-50 lg:absolute lg:hidden right-0 bg-orange w-64 overflow-hidden max-h-0 transition-max-height duration-500 ease-in-out">
      <nav aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu([
            'theme_location' => 'primary_navigation',
            'menu_class' => 'header-mobile',
            'echo' => false,
          ]) !!}
        @endif
      </nav>
    </div>
  </div>
</header>
