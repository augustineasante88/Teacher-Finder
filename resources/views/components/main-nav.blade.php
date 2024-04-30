<nav x-data="{openMobile: false}" class="relative h-20 w-full rounded-sm bg-red-800">
    <div class="mx-auto flex h-full max-w-7xl justify-between">
      <div class="h-full px-3 flex items-center gap-2 md:gap-4">
        <img src='{{asset("my-assets/img/akenten.jpg")}}' class=' w-24 md:w-32 h-12' />
        <a href={{route('welcome')}} class="flex h-full items-center text-sm sm:text-base text-yellow-400 md:text-xl hover:text-yellow-200">AAMUSTED student Teacher Finder</a>
      </div>

      <div class="flex items-center space-x-2 px-3">
        <a href="{{route('welcome')}}" class="{{ request()->routeIs('welcome') ? 'bg-red-600' : '' }} hidden hover:text-yellow-200 font-semibold h-10 rounded-md py-2 px-2 text-base text-yellow-400 lg:block">Home</a>
        @if(Auth::check())
        <a href="{{route('dashboard')}}" class="hidden hover:text-yellow-200 font-semibold h-10 rounded-md py-2 px-2 text-base text-yellow-400 lg:block">Dashboard</a>
        
        @else 
        <a href="{{route('login')}}" class="{{ request()->routeIs('login') ? 'bg-red-600' : '' }} hidden hover:text-yellow-200 font-semibold h-10 rounded-md py-2 px-2 text-base text-yellow-400 lg:block">Sign In</a>
        @endif
        
        <a href="{{route('all-teachers')}}" class="{{ request()->routeIs('all-teachers') ? 'bg-red-600' : '' }} hidden hover:text-yellow-200 font-semibold h-10 rounded-md py-2 px-2 text-base text-yellow-400 lg:block">All Teachers</a>
        <a href="#about" class="hidden hover:text-yellow-200 font-semibold h-10 rounded-md py-2 px-2 text-base text-yellow-400 lg:block">About</a>

        @if(Auth::check()) 
        @else
        <a href="{{route('register')}}" class="hidden hover:font-bold h-10 rounded-md bg-white py-2 px-2 text-base text-red-800 lg:block">
          Create An Account
        </a>
        @endif
        <span @click="openMobile = true" class="block text-yellow-400 lg:hidden">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-10" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </span>
      </div>
    </div>

    <!-- Mobile menu -->
    <div 
    x-cloak
    @click.away="openMobile = false"
    x-transition:enter="transition ease-out duration-300"
    x-transition:enter-start="opacity-0 scale-90"
    x-transition:enter-end="opacity-100 scale-100"
    x-transition:leave="transition ease-in duration-300"
    x-transition:leave-start="opacity-100 scale-100"
    x-transition:leave-end="opacity-0 scale-90"
    x-show="openMobile" class="bg-white m-[6.5px] border-1 absolute shadow-md overflow-hidden h-fit inset-0 z-30 rounded-lg border-red-800">
      <div class="h-20 w-full bg-red-800">
        <div class="flex h-full items-center justify-between px-4 text-xl text-white">
          <div class="flex h-full items-center gap-2">
            <img src='{{asset("my-assets/img/akenten.jpg")}}' class=' w-24 h-12' />
            <h1 class=' text-yellow-400 text-sm sm:text-base md:text-xl hover:text-yellow-300'>AAMUSTED student Teacher Finder</h1>
          </div>
          <span @click="openMobile = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-10" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </span>
        </div>
      </div>

      <div class="flex h-full bg-gray-100 w-full flex-col justify-between">
        <div class="space-y-4 p-4 flex flex-col">
          <a href="{{route('welcome')}}" class="{{ request()->routeIs('welcome') ? 'bg-yellow-300' : '' }} p-3 rounded-md text-sm font-semibold text-yellow-700 hover:font-bold hover:text-yellow-600 ">Home</a>
          @if(Auth::check())
          <a href="{{route('dashboard')}}" class="p-3 text-sm font-semibold text-yellow-700 hover:font-bold hover:text-yellow-600 ">Dashboard</a>
          
          @else
          <a href="{{route('login')}}" class="{{ request()->routeIs('login') ? 'bg-yellow-300' : '' }} p-3 rounded-md text-sm font-semibold text-yellow-700 sm:block hover:font-bold hover:text-yellow-600 ">Sign In</a>
          @endif
          <a href="{{route('all-teachers')}}" class="{{ request()->routeIs('all-teachers') ? 'bg-yellow-300' : '' }} p-3 rounded-md text-sm font-semibold text-yellow-700 hover:font-bold hover:text-yellow-600 ">All Teacher</a>
          <a href="{{route('welcome')}}" class="{{ request()->routeIs('about') ? 'bg-yellow-300' : '' }} p-3 rounded-md text-sm font-semibold text-yellow-700 hover:font-bold hover:text-yellow-600 ">About Us</a>
          @if(Auth::check())
          @else
          <hr />
          <a href="{{route('register')}}" class="flex h-10 rounded-md bg-red-800 justify-center items-center text-base text-yellow-300 sm:block">
            Create An Account
          </a>
          @endif
        </div>
      </div>
    </div>
  </nav>