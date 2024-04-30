
<aside class="fixed inset-y-0 flex-wrap items-center justify-between w-full p-0 m-4 antialiased transition-transform duration-200 bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0">
    <div class="h-19">
      <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 "></i>
      <a href="{{route('welcome')}}" class="block px-8 py-6 m-0 text-size-sm whitespace-nowrap dark:text-white text-slate-700">
        <img src="{{asset('my-assets/img/logo-ct-dark.png')}}" class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8" alt="main_logo" />
        <img src="{{asset('my-assets/img/logo-ct.png')}}" class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8" alt="main_logo" />
        <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Back To Home Page</span>
      </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
      <ul class="flex flex-col pl-0 mb-0">
        <li class="mt-0.5 w-full">
          <a class="py-2.7  dark:text-white dark:opacity-80 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold  transition-colors {{ request()->routeIs('dashboard') ? 'text-slate-700 bg-blue-500/30' : '' }}" href="{{route('dashboard')}}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-blue-500 ni ni-tv-2 text-size-sm"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Dashboard</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('appointments') ? 'text-slate-700 bg-blue-500/30 rounded-md' : '' }}" href="{{route('appointments')}}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-orange-500 ni ni-calendar-grid-58 text-size-sm"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Appointments</span>
          </a>
        </li>
        

        @can('is_admin')
        <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('locations') ? 'text-slate-700 bg-blue-500/30 rounded-md' : '' }}" href="{{route('locations')}}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-gray-500 fa fa-map-marker text-size-sm"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Campus Locations</span>
          </a>
        </li>
        <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('users') ? 'text-slate-700 bg-blue-500/30 rounded-md' : '' }}" href="{{route('users')}}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center fill-current stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-emerald-500 text-size-sm fa fa-users"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Users</span>
          </a>
        </li>
        @endcan
        <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('comments') ? 'text-slate-700 bg-blue-500/30 rounded-md' : '' }}" href="{{route('comments')}}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-red-500 text-size-sm fa fa-comments"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Comments</span>
          </a>
        </li>
        <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors {{ request()->routeIs('profile') ? 'text-slate-700 bg-blue-500/30 rounded-md' : '' }}" href="{{route('profile')}}">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-cyan-500 text-size-sm fa fa-user"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
          </a>
        </li>
        {{-- <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/rtl.html">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-red-600 text-size-sm ni ni-settings-gear-65"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Settings</span>
          </a>
        </li> --}}
        <li class="mt-0.5 w-full">
          <form method="POST" action="{{route('logout')}}">
            @csrf
          <button type='submit' class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/virtual-reality.html">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-cyan-500 text-size-sm fa fa-sign-out"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Logout</span>
          </button>
          </form>
        </li>


        {{-- <li class="w-full mt-4">
          <h6 class="pl-6 ml-2 font-bold leading-tight uppercase dark:text-white text-size-xs opacity-60">Account pages</h6>
        </li>

        <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/profile.html">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-slate-700 text-size-sm ni ni-single-02"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
          </a>
        </li>

        <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/sign-in.html">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-orange-500 text-size-sm ni ni-single-copy-04"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sign In</span>
          </a>
        </li> --}}

        {{-- <li class="mt-0.5 w-full">
          <a class=" dark:text-white dark:opacity-80 py-2.7 text-size-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors" href="../pages/sign-up.html">
            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
              <i class="relative top-0 leading-normal text-cyan-500 text-size-sm ni ni-collection"></i>
            </div>
            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Sign Up</span>
          </a>
        </li> --}}
      </ul>
    </div>

    {{-- <div class="mx-4"> --}}
      <!-- load phantom colors for card after: -->
      {{-- <p class="invisible hidden text-gray-800 text-red-500 text-red-600 text-blue-500 dark:bg-white bg-slate-500 bg-gray-500/30 bg-cyan-500/30 bg-emerald-500/30 bg-orange-500/30 bg-red-500/30 after:bg-gradient-to-tl after:from-zinc-800 after:to-zinc-700 dark:bg-gradient-to-tl dark:from-slate-750 dark:to-gray-850 after:bg-gradient-to-tl after:from-blue-700 after:to-cyan-500 after:bg-gradient-to-tl after:from-orange-500 after:to-yellow-500 after:bg-gradient-to-tl after:from-green-600 after:to-lime-400 after:bg-gradient-to-tl after:from-red-600 after:to-orange-600 after:bg-gradient-to-tl after:from-slate-600 after:to-slate-300 text-emerald-500 text-cyan-500 text-slate-400"></p>
      <div class="relative flex flex-col min-w-0 break-words bg-transparent border-0 shadow-none rounded-2xl bg-clip-border" sidenav-card>
        <img class="w-1/2 mx-auto" src="{{asset('my-assets/img/illustrations/icon-documentation.svg')}}" alt="sidebar illustrations" />
        <div class="flex-auto w-full p-4 pt-0 text-center">
          <div class="transition-all duration-200 ease-nav-brand">
            <h6 class="mb-0 dark:text-white text-slate-700">Need help?</h6>
            <p class="mb-0 font-semibold leading-tight dark:text-white dark:opacity-60 text-size-xs">Please check our docs</p>
          </div>
        </div>
      </div>
      <a href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/argon-dashboard/" target="_blank" class="inline-block w-full px-8 py-2 mb-4 font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-slate-700 bg-150 text-size-xs hover:shadow-xs hover:-translate-y-px">Documentation</a> --}}
      <!-- pro btn  -->
      <!-- <a class="inline-block w-full px-8 py-2 font-bold leading-normal text-center text-white align-middle transition-all ease-in bg-blue-500 border-0 rounded-lg shadow-md select-none bg-150 bg-x-25 text-size-xs hover:shadow-xs hover:-translate-y-px" href="javascript:;">Upgrade to pro</a> -->
    {{-- </div> --}}
  </aside>
