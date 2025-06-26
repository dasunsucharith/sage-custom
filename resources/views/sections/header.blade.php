<header class="banner bg-yellow-50 py-4">
  <div class="container mx-auto flex items-center justify-between px-4">
    <a class="brand" href="{{ home_url('/') }}">
      <img src="https://via.placeholder.com/150x50?text=Jordan+%26+Brooke" alt="Jordan & Brooke Logo" class="h-12">
    </a>

    <nav class="nav-primary flex items-center space-x-6" aria-label="{{ wp_get_nav_menu_name('primary_navigation') }}">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'flex space-x-6 text-blue-800 font-semibold', 'echo' => false]) !!}
      @endif
      <a href="#" class="bg-gradient-to-r from-orange-400 to-pink-500 text-white font-bold py-2 px-6 rounded-md shadow-lg hover:shadow-xl transition duration-300">
        Contact Us
      </a>
    </nav>
  </div>
</header>
