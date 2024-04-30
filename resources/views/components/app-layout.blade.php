<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('my-assets/img/akenten.jpg')}}" />
    <link rel="icon" type="image/png" href="{{asset('my-assets/img/akenten.jpg')}}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="{{asset('my-assets/css/nucleo-icons.css')}}" rel="stylesheet" />
    <link href="{{asset('my-assets/css/nucleo-svg.css')}}" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    {{-- <link href="{{asset('my-assets/css/argon-dashboard-tailwind.css?v=1.0.0')}}" rel="stylesheet" /> --}}
    
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    @wireUiScripts
    @vite([
    'resources/auth/assets/css/argon-dashboard-tailwind.min.css',
    'resources/auth/assets/css/argon-dashboard-tailwind.css',
    'resources/css/app.css',
    'resources/js/app.js',
    'resources/auth/assets/css/nucleo-icons.css',
    'resources/auth/assets/css/nucleo-svg.css',
    'resources/auth/assets/css/perfect-scrollbar.css',
    'resources/auth/assets/css/tooltips.css',
    ])
    @livewireStyles
    
    <style>
      [x-cloak] { display: none !important; }
    </style>
    @laravelPWA
    <script src="//unpkg.com/alpinejs" defer></script>
</head>
<body class="m-0 font-sans antialiased font-normal dark:bg-slate-900 text-size-base leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full dark:hidden min-h-75" style="
    background: linear-gradient(
      to right,
      #ee7724,
      #d8363a,
      #dd3675,
      #b44593
    );
  "></div>
    
    
    <x-notifications z-index="z-50" />
    <x-dialog />
    <div class='hidden xl:block'>
    <x-navigation  />
    </div>
   

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
      
      <div class='h-5 w-full z-50' x-data="{open: false}">
        <div class='flex justify-end space-x-4 p-4'>
          <div class='text-lg text-white'><span class='text-sm'>Welcome,</span> {{Auth::user()->name}}</div>
          <div @click.away="open = false">
           
            <span class='block xl:hidden text-white' @click='open = !open' >
            <p x-show="!open">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
              <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 5.25h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5m-16.5 4.5h16.5" />
            </svg> 
            </p>            
            <p x-show="open">
              <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 19.5l15-15m-15 0l15 15" />
              </svg>
            </p>            
            </span>
            
        </div>
        </div>

        <!-- sidenav  -->
        <div x-cloak x-show='open'
        >
        <x-navigation  />
        </div>
        <!-- end sidenav -->

      </div>
        {{ $slot }}
    
    </main>

      @livewireScripts
      @vite([
    'resources/auth/assets/js/argon-dashboard-tailwind.js',
    'resources/auth/assets/js/charts.js',
    'resources/auth/assets/js/perfect-scrollbar.js'
    ])
    </body>

    

{{-- <!-- plugin for charts  -->
<script src="{{asset('my-assets/js/plugins/chartjs.min.js')}}" async></script>
<!-- plugin for scrollbar  -->
<script src="{{asset('my-assets/js/plugins/perfect-scrollbar.min.js')}}" async></script>
<!-- main script file  -->
<script src="{{asset('my-assets/js/argon-dashboard-tailwind.js?v=1.0.0')}}" async></script> --}}
</html>