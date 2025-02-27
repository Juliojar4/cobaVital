<header class="container banner pb-24">
  @if (has_nav_menu('primary_navigation'))
    <div class="flex justify-between py-12">
      <img src="@asset('images/instante-saude.png')" alt="">
      <img src="@asset('images/abbott.png')" alt="">
    </div>
    <div class="full-container bg-orange w-auto flex py-5">
      {{ the_custom_logo() }}
      <nav class="container nav-primary hidden lg:block" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]) !!}
      </nav>
      <img class="abbott-header-hero-logo" src="@asset('images/logo-abbott-color.png')" alt="">
    </div>
  @endif
</header>