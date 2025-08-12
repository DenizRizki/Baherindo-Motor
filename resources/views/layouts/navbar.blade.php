<nav class="fixed top-0 left-0 w-full z-50 bg-black text-white shadow-md">
  <ul class="flex items-center space-x-10 px-6 py-4">
    <!-- Logo -->
    <li class="flex-shrink-0">
      <img src="{{ asset('asset/motorcycle-classic-biker-helmet-logo-600nw-2482496613.jpg') }}" alt="Motor" class="h-10 w-auto">
    </li>

    <!-- Menu -->
    <li>
      <a href="/" class="relative hover:text-gray-300 transition duration-300 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[2px] after:bg-white hover:after:w-full after:transition-all after:duration-300">
        Daftar Motor
      </a>
    </li>
    <li>
      <a href="/car" class="relative hover:text-gray-300 transition duration-300 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[2px] after:bg-white hover:after:w-full after:transition-all after:duration-300">
        Daftar Mobil
      </a>
    </li>
    <li>
      <a href="/about" class="relative hover:text-gray-300 transition duration-300 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[2px] after:bg-white hover:after:w-full after:transition-all after:duration-300">
        About
      </a>
    </li>
    <li>
      <a href="/contact" class="relative hover:text-gray-300 transition duration-300 after:absolute after:bottom-0 after:left-0 after:w-0 after:h-[2px] after:bg-white hover:after:w-full after:transition-all after:duration-300">
        Contact
      </a>
    </li>

    <!-- Dropdown -->
    <li class="relative group">
      <button class="flex items-center gap-1 hover:text-gray-300 transition duration-300">
        Form
        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <ul class="absolute left-0 mt-2 w-40 bg-black text-white rounded-md shadow-lg opacity-0 group-hover:opacity-100 invisible group-hover:visible transition duration-200">
        <li>
          <a href="/motor" class="block px-4 py-2 hover:bg-gray-800">Form Motor</a>
        </li>
        <li>
          <a href="/mobil" class="block px-4 py-2 hover:bg-gray-800">Form Mobil</a>
        </li>
      </ul>
    </li>

  </ul>
</nav>
