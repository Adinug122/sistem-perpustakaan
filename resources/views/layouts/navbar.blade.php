<header class="relative">
  <nav class="bg-transparent fixed top-0 left-0 w-full z-50">
    <div class="max-w-screen-xl mx-auto flex items-center justify-between p-4">
      <a href="#" class="flex items-center space-x-2">
        <img src="{{ asset('img/logo.png') }}" 
             alt="Logo" 
             class="h-16 w-auto object-contain" />
      </a>

      <ul class="hidden md:flex space-x-10 font-medium text-gray-900">
        <li><a href="{{ route('landing') }}" class="hover:text-primary transition-colors">Home</a></li>
        <li><a href="{{ route('buku') }}" class="hover:text-primary transition-colors">Buku</a></li>
        <li><a href="{{ route('pengumuman') }}" class="hover:text-primary transition-colors">Pengumuman</a></li>
        <li><a href="{{ route('landing') }}#tentang-kami" class="hover:text-primary transition-colors">Tentang kami</a></li>
        @auth
          <li><a href="{{ route('user.dashboard') }}" class="hover:text-primary transition-colors">Dashboard</a></li>
        @endauth
      </ul>

      <div class="hidden md:block">
        @auth
            <form action="{{ route('logout') }}" method="POST" class="inline">
          @csrf
          <button type="submit" class="bg-red-500 text-white px-3 py-1 rounded-md hover:bg-red-400">
            Logout
          </button>
        </form>
      </a>
        @endauth
        @guest
          <a
          href="{{ route('register') }}"
          class="text-white bg-primary hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2">
          Register
      </a>
        @endguest
        
      </div>
    
      <button id="menu-btn" type="button" class="md:hidden focus:outline-none ">
        <svg class="w-7 h-7 text-gray-900" fill="none" stroke="currentColor" stroke-width="2"
             viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round"
                d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>

  <div id="mobile-menu" class="flex flex-col bg-white shadow-lg md:hidden pb-5">
    <a href="{{ route('landing') }}" class="px-6 py-3 hover:bg-gray-100">Home</a>
    <a href="{{ route('buku') }}" class="px-6 py-3 hover:bg-gray-100">Buku</a>
    <a href="{{ route('pengumuman') }}" class="px-6 py-3 hover:bg-gray-100">Pengumuman</a>
    <a href="{{ route('landing') }}#tentang-kami" class="px-6 py-3 hover:bg-gray-100">Tentang Kami</a>

    @auth
        <a href="{{ route('user.dashboard') }}" class="px-6 py-3 hover:bg-gray-100">
            Dashboard
        </a>
    @endauth

    <div class="w-full px-6 mt-2">
        @auth
            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit"
                    class="bg-red-500 text-white w-full px-3 py-2 rounded-md hover:bg-red-400">
                    Logout
                </button>
            </form>
        @endauth

        @guest
            <a href="{{ route('register') }}"
                class="text-white bg-primary block text-center hover:bg-blue-800 font-medium rounded-lg text-sm px-5 py-2">
                Register
            </a>
        @endguest
    </div>
</div>

  </nav>
</header>

<script>

  // Toggle mobile menu
  const menuBtn = document.getElementById('menu-btn');
  const mobileMenu = document.getElementById('mobile-menu');
  


  menuBtn.addEventListener('click', (e) => {
    e.preventDefault();
    mobileMenu.classList.toggle('hidden');
    
  });
</script>
