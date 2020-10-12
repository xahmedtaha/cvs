<header class="text-gray-700 body-font">
    <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
        <nav class="flex lg:w-2/5 flex-wrap items-center text-base md:ml-auto">
            <a href="{{route('home')}}" class="mr-5 hover:text-gray-900 {{url()->current() !== route('home') ?: 'text-orange-500 border-b-2 border-orange-500'}}">Home</a>
            <a href="{{route('articles.index')}}" class="mr-5 hover:text-gray-900 {{url()->current() !== route('articles.index') ?: 'text-orange-500 border-b-2 border-orange-500'}}">Blog</a>
            <a href="{{route('playlists.index')}}" class="mr-5 hover:text-gray-900 {{url()->current() !== route('playlists.index') ?: 'text-orange-500 border-b-2 border-orange-500'}}">Playlists</a>
        </nav>
        <a href="{{route('home')}}" class="flex order-first lg:order-none lg:w-1/5 title-font font-medium items-center text-gray-900 lg:items-center lg:justify-center mb-4 md:mb-0">
            <img src="{{asset('img/logo.png')}}" class="object-cover object-center rounded h-13 w-13">
            {{--            <span class="ml-3 text-xl text-orange-500 font-bold leading-relaxed">CVS</span>--}}
        </a>
        <div class="lg:w-2/5 inline-flex lg:justify-end ml-5 lg:ml-0">
            <a href="{{route('home').'#contact'}}" class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Contact
                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                </svg>
            </a>
        </div>
    </div>
</header>
