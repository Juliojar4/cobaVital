<header class="fixed h-[100px] fluid-container banner pb-24 z-50">
  @if (has_nav_menu('primary_navigation'))
    <div class="header-container bg-white w-auto flex py-3 lg:py-0 items-center justify-between">
      {{ the_custom_logo() }}
      <nav class="nav-primary hidden lg:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
      <img class="abbott-header-hero-logo" src="@asset('images/logo-abbott-color.png')" alt="">
    </div>
  @endif
</header>
