<!--Nav-->
<nav id="header" class="w-full z-30 top-0 sticky bg-accent">
  <div class="w-full container mx-auto flex flex-wrap items-center justify-between mt-0 px-8 py-2">
    {{-- logo section --}}
    <div class="">
      <a class="flex items-center tracking-wide no-underline hover:no-underline font-bold text-gray-800 text-xl "
        href="{{ route('home') }}">
        <img src="{{ Vite::asset('resources/images/logo.png') }}" alt="logo img" class="border-5 w-28 md:w-36">
      </a>
    </div>

    {{-- menu --}}
    <label for="menu-toggle" class="cursor-pointer md:hidden block">
      <svg class="fill-current text-gray-900" xmlns="http://www.w3.org/2000/svg" width="20" height="20"
        viewBox="0 0 20 20">
        <title>menu</title>
        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
      </svg>
    </label>
    <input class="hidden" type="checkbox" id="menu-toggle" />

    {{-- list items --}}
    <div class="hidden md:flex md:items-center md:w-auto w-full" id="menu">
      <nav>
        <ul class="md:flex items-center justify-between text-base text-gray-700 pt-4 md:pt-0">
          <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
              href="{{ route('shop') }}">Shop</a>
          </li>
          <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
              href="{{ route('about') }}">About</a>
          </li>

          <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
              href="{{ route('contact') }}">Contact</a>
          </li>
          <li><a class="inline-block no-underline hover:text-black hover:underline py-2 px-4"
              href="{{ route('become-seller') }}">Become a
              Seller</a>
          </li>

          <li>
            <a class="inline-block no-underline hover:text-black hover:underline py-2 px-4" href="{{ route('cart') }}">
              <svg class="fill-current hover:text-black" xmlns="http://www.w3.org/2000/svg" width="24"
                height="24" viewBox="0 0 24 24">
                <path
                  d="M21,7H7.462L5.91,3.586C5.748,3.229,5.392,3,5,3H2v2h2.356L9.09,15.414C9.252,15.771,9.608,16,10,16h8 c0.4,0,0.762-0.238,0.919-0.606l3-7c0.133-0.309,0.101-0.663-0.084-0.944C21.649,7.169,21.336,7,21,7z M17.341,14h-6.697L8.371,9 h11.112L17.341,14z" />
                <circle cx="10.5" cy="18.5" r="1.5" />
                <circle cx="17.5" cy="18.5" r="1.5" />
              </svg>
            </a>
          </li>
        </ul>
      </nav>
    </div>


    @auth
      {{-- user account --}}
      <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName"
        class="flex items-center text-sm pe-1 font-medium text-gray-900 rounded-full hover:text-blue-600 dark:hover:text-blue-500 md:me-0 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:text-white"
        type="button">
        <span class="sr-only">Open user menu</span>
        <img class="w-8 h-8 me-2 rounded-full" src="{{ Vite::asset('resources/images/avatar1.jpg') }}" alt="user photo">
        Bonnie Green
        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
          viewBox="0 0 10 6">
          <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
        </svg>
      </button>

      <!-- Dropdown menu -->
      <div id="dropdownAvatarName"
        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
        <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
          <div class="font-medium ">{{ auth()->user()->name }}</div>
          <div class="truncate">{{ auth()->user()->email }}</div>
        </div>
        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200"
          aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
          @if (auth()->user()->hasRole('super-admin') ||
                  auth()->user()->hasRole('admin') ||
                  auth()->user()->hasRole('staff') ||
                  auth()->user()->hasRole('seller'))
            <li>
              <a href="{{ route('dashboard') }}"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
            </li>
          @endif

          <li>
            <a href="{{ route('profile.edit') }}"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Profile</a>
          </li>

          @if (auth()->user()->hasRole('seller'))
            <li>
              <a href="#"
                class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
            </li>
          @endif

        </ul>
        <div class="py-2">
          <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit"
              class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white w-full text-start">Sign
              Out</button>
          </form>
        </div>
      </div>
    @else
      <div>
        <a href="{{ route('register') }}" class="px-3 py-2 bg-primary text-secondary-300 rounded-lg">Register</a>
        <a href="{{ route('login') }}" class="px-3 py-2 bg-primary text-secondary-300 rounded-lg">Login</a>
      </div>
    @endauth


  </div>
</nav>
