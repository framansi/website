<!DOCTYPE html>
<html class="scroll-smoot font-sans" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{$meta}}
    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <script src="{{ mix('js/app.js') }}" defer></script>
    <script src="/js/pace.js" defer></script>

</head>

<body class="overflow-x-hidden antialiased" x-cloak x-data='{isOpenNavigation: false}'>

<div id="top-menu" class="w-full h-24 px-8 pt-2 bg-white sticky z-30 top-0 shadow md:shadow-none border-none">
    <div class="container flex items-center justify-between h-full max-w-6xl mx-auto">
        <a href="{{route('index')}}" class="relative flex items-center inline-block h-5 h-full font-black">
            <svg class="h-16"  viewBox="0 0 337.2 563.52" xml:space="preserve">
                <g>
                    <path d="M237.73,82.22c0.37,1.87,0.82,3.74,1.1,5.62c0.53,3.54,0.99,7.09,1.43,10.65c0.36,2.89,0.55,5.81,1.01,8.69
                        c0.74,4.65,1.75,9.25,3.6,13.61c0.98,2.32,1.97,4.64,3.78,6.5c2.97,3.05,6.71,3.57,10.49,1.77c3.55-1.69,6.45-4.17,8.97-7.2
                        c5.1-6.13,9.45-12.77,13.49-19.61c2.44-4.13,4.79-8.34,6.79-12.7c2.82-6.13,5.44-12.36,7.85-18.66c3.38-8.87,6.1-17.97,8.29-27.21
                        c0.94-3.96,1.54-8.01,2.27-12.01c1.02-5.53,1.07-11.13,0.94-16.73c-0.04-1.64-0.37-3.28-0.57-4.92c-0.05-0.42-0.07-0.84,0.1-1.32
                        c0.31,0.7,0.66,1.39,0.91,2.11c3.62,10.41,7.11,20.86,9.63,31.6c1.78,7.59,3.58,15.18,5.21,22.81c0.85,3.99,1.36,8.06,1.99,12.09
                        c0.58,3.77,1.17,7.54,1.65,11.32c0.34,2.7,0.52,5.43,0.75,8.14c0.33,3.78,0.63,7.56,0.95,11.34c0.01,0.12,0.01,0.24,0.01,0.36
                        c0.08,8.27,0.19,16.53,0.23,24.8c0.01,2.74-0.04,5.5-0.25,8.23c-0.41,5.46-1.13,10.87-2.29,16.23
                        c-1.75,8.12-4.62,15.83-8.51,23.15c-2.46,4.62-5.35,8.97-8.57,13.12c-3.34,4.29-7.02,8.25-11.04,11.86
                        c-3.83,3.45-7.92,6.64-12.08,9.69c-6.53,4.78-13.61,8.69-20.95,12.04c-5.6,2.55-11.35,4.79-17.1,7.01
                        c-4.02,1.55-8.11,2.97-12.25,4.19c-8.38,2.47-16.78,4.88-25.24,7.08c-5.46,1.42-11.01,2.52-16.54,3.61
                        c-4.74,0.93-9.51,1.68-14.28,2.45c-4.66,0.75-9.31,1.49-13.99,2.14c-3.01,0.42-6.04,0.66-9.06,0.99
                        c-3.61,0.39-7.21,0.82-10.82,1.18c-2.17,0.22-4.34,0.32-6.51,0.51c-3.42,0.3-6.84,0.64-10.26,0.94c-2.17,0.19-4.34,0.31-6.51,0.51
                        c-3.26,0.29-6.52,0.63-9.78,0.93c-1.93,0.18-3.86,0.32-5.79,0.5c-3.02,0.3-6.04,0.63-9.06,0.93c-1.73,0.18-3.46,0.32-5.19,0.51
                        c-2.74,0.3-5.48,0.62-8.22,0.93c-1.49,0.17-2.99,0.29-4.47,0.51c-4.12,0.62-8.28,1.05-12.33,1.97c-4.81,1.09-9.56,2.49-14.25,3.99
                        c-6.11,1.96-11.79,4.87-16.87,8.78c-5.44,4.19-9.83,9.33-13.14,15.4c-3.53,6.45-5.7,13.34-6.85,20.55
                        c-0.65,4.04-1.04,8.13-1.45,12.2c-0.29,2.84-0.41,5.69-0.63,8.82c-0.32-0.37-0.68-0.58-0.73-0.85c-0.91-4.94-1.86-9.88-2.65-14.83
                        c-0.46-2.84-0.82-5.71-0.94-8.58c-0.27-6.37-0.53-12.74-0.45-19.11c0.05-3.97,0.71-7.93,1.13-11.9c0.61-5.72,1.88-11.3,3.47-16.81
                        c1.89-6.55,4.4-12.87,7.63-18.87c2.77-5.17,5.9-10.14,9.73-14.6c2.25-2.62,4.44-5.33,6.98-7.64c3.7-3.36,7.62-6.52,11.6-9.56
                        c4.7-3.59,9.89-6.45,15.24-8.95c4.66-2.18,9.45-4.09,14.1-6.29c2.3-1.09,4.49-2.45,6.59-3.9c4.62-3.2,9.2-6.46,13.68-9.86
                        c2.33-1.77,4.41-3.86,6.6-5.82c0.89-0.79,1.8-1.56,2.64-2.41c5.32-5.43,10.31-11.13,14.63-17.42c5.07-7.37,9.28-15.16,12.13-23.63
                        c2.07-6.15,4.02-12.36,5.64-18.65c1.65-6.43,2.79-12.99,4.21-19.49c1.21-5.57,2.51-11.13,3.75-16.7
                        c1.46-6.56,3.38-12.99,5.61-19.32c0.21-0.59,0.4-1.19,0.68-1.75c0.14-0.28,0.46-0.48,0.94-0.94c0,3.69-0.09,7,0.02,10.31
                        c0.15,4.44,0.41,8.88,0.72,13.31c0.21,2.99,0.55,5.97,0.95,8.94c0.46,3.38,1.1,6.74,1.61,10.12c1.36,8.99,4.09,17.64,6.63,26.33
                        c2.01,6.88,4.47,13.62,7.91,19.95c1.71,3.15,3.7,6.15,6.26,8.66c2.72,2.67,5.79,4.78,9.68,5.53c3.19,0.62,6.2,0.15,9.07-1.15
                        c4.61-2.09,8.08-5.56,11.23-9.45c2.95-3.64,5.46-7.56,7.22-11.87c2.09-5.1,3.94-10.3,5.62-15.55c1.54-4.79,2.6-9.73,4.08-14.54
                        c1.58-5.16,3.26-10.3,5.17-15.35c1.23-3.25,2.96-6.31,4.46-9.46C237.37,82.17,237.55,82.19,237.73,82.22z"/>
                    <path d="M278.12,264.89c1.32,0.2,0.8,1.31,0.78,2.03c-0.05,1.49-0.26,2.98-0.45,4.47c-0.47,3.75-0.78,7.53-1.48,11.24
                        c-0.87,4.62-1.9,9.22-3.14,13.75c-1.51,5.5-3.67,10.77-6.18,15.89c-2.95,6.03-6.45,11.68-10.75,16.87
                        c-4.65,5.61-10.1,10.25-16.31,13.96c-6.34,3.8-13.16,6.55-20.45,7.94c-3.36,0.64-6.76,1.15-10.16,1.43
                        c-4.08,0.33-8.18,0.54-12.27,0.47c-3.99-0.07-7.96-0.56-11.94-0.9c-2.52-0.21-5.03-0.45-7.54-0.74c-3.13-0.36-6.25-0.8-9.38-1.16
                        c-2.39-0.28-4.79-0.48-7.18-0.76c-2.46-0.28-4.92-0.61-7.39-0.9c-1.69-0.2-3.38-0.35-5.06-0.54c-2.74-0.31-5.48-0.64-8.22-0.93
                        c-1.81-0.19-3.62-0.34-5.43-0.51c-3.42-0.32-6.84-0.64-10.26-0.94c-1.42-0.12-2.85-0.22-4.28-0.25c-4.34-0.1-8.7-0.39-13.03-0.19
                        c-4.6,0.21-9.19,0.85-13.77,1.39c-4.64,0.55-8.94,2.12-12.78,4.8c-4.19,2.92-7.36,6.75-9.93,11.15c-2.53,4.32-4.22,8.95-5.3,13.79
                        c-0.6,2.68-1.1,5.4-1.33,8.13c-0.39,4.7-0.71,9.43-0.7,14.14c0.01,3.74,0.54,7.49,0.89,11.22c0.27,2.82,0.54,5.65,0.99,8.45
                        c0.66,4.11,1.34,8.22,2.24,12.28c1.21,5.47,2.56,10.91,3.99,16.33c1.07,4.05,2.32,8.06,3.57,12.06c1.47,4.68,2.9,9.37,4.58,13.97
                        c3.22,8.8,6.45,17.6,9.95,26.3c3.15,7.83,6.59,15.55,10.04,23.25c2.6,5.82,5.41,11.55,8.16,17.3c1.61,3.38,3.28,6.73,4.95,10.08
                        c1.07,2.15,2.22,4.26,3.3,6.41c0.17,0.33,0.18,0.73,0.27,1.1c-0.11,0.06-0.23,0.11-0.34,0.17c-1.26-1.44-2.55-2.85-3.76-4.33
                        c-2.24-2.75-4.47-5.51-6.65-8.31c-3.14-4.04-6.35-8.03-9.32-12.19c-5.82-8.16-11.61-16.35-17.18-24.68
                        c-3.6-5.38-6.85-11.01-10.18-16.57c-5.65-9.44-10.73-19.19-15.38-29.15c-3.42-7.32-6.5-14.81-9.53-22.31
                        c-1.83-4.54-3.36-9.21-4.88-13.87c-2.34-7.16-4.31-14.42-5.71-21.83c-0.93-4.94-1.85-9.88-2.59-14.84
                        c-0.44-2.97-0.61-5.98-0.75-8.98c-0.23-4.97-0.51-9.94-0.44-14.91c0.05-3.94,0.56-7.88,0.9-11.82c0.5-5.71,1.85-11.22,3.81-16.6
                        c1.87-5.14,4.43-9.9,7.8-14.22c6.28-8.03,14.46-13.37,23.86-17.1c6.09-2.42,12.4-3.95,18.79-5.18c3.12-0.6,6.31-0.91,9.48-1.24
                        c3.69-0.39,7.4-0.69,11.1-0.97c2.93-0.22,5.86-0.4,8.79-0.47c5.82-0.13,11.65-0.23,17.48-0.24c5.07,0,10.13,0.17,15.2,0.22
                        c9.58,0.1,19.17,0.19,28.76,0.23c2.66,0.01,5.33-0.1,8-0.24c3.84-0.2,7.68-0.37,11.51-0.74c4.86-0.46,9.74-0.94,14.56-1.7
                        c8.18-1.28,16.27-2.96,24.21-5.37c8.22-2.5,16.23-5.48,23.8-9.54c5.04-2.7,9.86-5.77,13.98-9.81c1.42-1.39,2.91-2.72,4.33-4.11
                        C277.26,266.09,277.64,265.49,278.12,264.89z"/>
                </g>
            </svg>
            <span class="ml-3 text-2xl font-black">Francesco Mansi</span>
        </a>
        <div id="nav" class="absolute top-0 left-0 block w-full mt-20 border-b border-gray-200 sm:border-none sm:px-5 md:block md:relative sm:mt-0 sm:px-0 sm:w-auto hidden">
            <nav class="flex flex-col items-center py-3 bg-white border border-gray-100 sm:flex-row sm:bg-transparent sm:border-none sm:py-0">
                <a href="{{route('index')}}"  class="relative px-1 mb-1 mb-5 mr-0 text-base font-bold sm:mb-0 sm:mr-4 lg:mr-8 group @if(request()->routeIs('index'))  text-orange-400  @else hover:text-orange-400 @endif ">Home @if(request()->routeIs('index'))   <span class="absolute bottom-0 left-0 w-full h-1 -mb-2 bg-orange-300 rounded-full"></span>  @else <span class="absolute bottom-0 left-0 w-full h-0 group-hover:h-1 transition transform -mb-2 -translate-x-6 group-hover:translate-x-0 ease-in-out bg-orange-300 rounded-full"></span> @endif </a>
                <a href="{{route('about')}}" class="relative px-1 mb-1 mb-5 mr-0 text-base font-bold sm:mb-0 sm:mr-4 lg:mr-8 group @if(request()->routeIs('about'))  text-orange-400  @else hover:text-orange-400 @endif ">Chi Sono @if(request()->routeIs('about'))   <span class="absolute bottom-0 left-0 w-full h-1 -mb-2 bg-orange-300 rounded-full"></span>  @else <span class="absolute bottom-0 left-0 w-full h-0 group-hover:h-1 transition transform -mb-2 -translate-x-6 group-hover:translate-x-0 ease-in-out bg-orange-300 rounded-full"></span> @endif </a>
                <a href="{{route('portfolio.index')}}" class="relative px-1 mb-1 mb-5 mr-0 text-base font-bold sm:mb-0 sm:mr-4 lg:mr-8 group @if(request()->routeIs('portfolio.*'))  text-orange-400  @else hover:text-orange-400 @endif ">Servizi @if(request()->routeIs('portfolio.*'))   <span class="absolute bottom-0 left-0 w-full h-1 -mb-2 bg-orange-300 rounded-full"></span>  @else <span class="absolute bottom-0 left-0 w-full h-0 group-hover:h-1 transition transform -mb-2 -translate-x-6 group-hover:translate-x-0 ease-in-out bg-orange-300 rounded-full"></span> @endif</a>

                <!-- Start CTA Button -->
                <a href="{{route('contact')}}" class="relative inline-block px-4 py-2 font-medium group">
                    <span class="absolute rounded inset-0 w-full h-full transition duration-200 ease-out transform translate-x-1 translate-y-1 bg-black group-hover:-translate-x-0 group-hover:-translate-y-0"></span>
                    <span class="absolute rounded inset-0 w-full h-full bg-white border-2 border-black group-hover:bg-orange-400"></span>
                    <span class="relative text-black px-1 py-1 text-base font-bold group-hover:text-white">Contattami</span>
                </a>
                <!-- End CTA Button -->
            </nav>
        </div>
        <button id="mobile-nav-menu" class="text-black w-14 h-14 relative focus:outline-none bg-white md:hidden" @click.outside="isOpenNavigation=false" @click="isOpenNavigation = !isOpenNavigation">
             <div class="block w-5 absolute left-1/2 top-1/2 focus:outline-none  transform  -translate-x-1/2 -translate-y-1/2">
                <span aria-hidden="true" class="block absolute h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'rotate-45': isOpenNavigation,' -translate-y-1.5': !isOpenNavigation }"></span>
                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'opacity-0': isOpenNavigation } "></span>
                <span aria-hidden="true" class="block absolute  h-0.5 w-5 bg-current transform transition duration-500 ease-in-out" :class="{'-rotate-45': isOpenNavigation, ' translate-y-1.5': !isOpenNavigation}"></span>
            </div>
        </button>
    </div>
    <div class="w-full sm:mb-0" x-show="isOpenNavigation">
        <div class="relative ml-0 mr-0 ">
            <span class="absolute top-0 left-0 w-full h-full mt-1 ml-1 bg-black rounded-lg"></span>
            <div class="relative p-5 bg-white border-2 border-black rounded-lg">
                <ul class="flex flex-col items-center list-reset lg:flex">
                    <li class="mr-3">
                        <a class="inline-block py-2 text-4xl font-semibold @if(request()->routeIs('index')) text-gray-900 @else text-gray-500 @endif no-underline px-7 hover:text-gray-900 hover:text-underline"
                           href="{{route('index')}}">Home</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 text-4xl font-semibold @if(request()->routeIs('about')) text-gray-900 @else text-gray-500 @endif  no-underline px-7 hover:text-gray-900 hover:text-underline"
                           href="{{route('about')}}">Chi Sono</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 text-4xl font-semibold @if(request()->routeIs('portfolio.*')) text-gray-900 @else text-gray-500 @endif  no-underline px-7 hover:text-gray-900 hover:text-underline"
                           href="{{route('portfolio.index')}}">Servizi</a>
                    </li>
                    <li class="mr-3">
                        <a class="inline-block py-2 text-4xl font-semibold @if(request()->routeIs('contact')) text-gray-900 @else text-gray-500 @endif  no-underline px-7 hover:text-gray-900 hover:text-underline"
                           href="{{route('contact')}}">Contattami</a>
                    </li>
                </ul>

            </div>
        </div>
    </div>

</div>
<main class="overflow-hidden">
    {{$slot}}
</main>


<footer class="px-4 pt-12 pb-8 text-white bg-black">
  <div class="pt-4 pt-6 mt-5 text-center text-gray-400 ">© 2022 Francesco Mansi - P.IVA: 08654730723</div>

    <div class="flex justify-center space-x-5">
        <a class="inline-block py-2 text-white"
           href="{{route('cookie')}}">Cookie Policy</a>
    </div>
</footer>
<script>
    document.addEventListener('scroll', function(e) {
        if(window.scrollY > 250) {
            document.getElementById('top-menu').classList.add("border-black");
        } else{
            document.getElementById('top-menu').classList.remove("border-black");
        }

    });
</script>
</body>
</html>
