<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>Posty</title>
    </head>
    <body class="bg-gray-100">
        <header class="text-gray-600 body-font bg-white">
            <div class="container mx-auto flex flex-wrap p-2 flex-col md:flex-row items-center">
                <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-indigo-500 rounded-full" viewBox="0 0 24 24">
                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
                </svg>
                <span class="ml-3 text-xl">Tailblocks</span>
                </a>
                <nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
                    <a href="{{ route('home')}}" class="p-3">Home</a>
                    <a href="{{ route('dashboard')}}" class="p-3">Dashboard</a>
                    <a href="{{ route('posts') }}" class="p-3">Posts</a>
                    </nav>
                    @auth
                    <div class="inline-flex items-center">
                        <a href="" class="p-3">{{auth()->user()->name}}</a>
                        <form action="{{ route('logout')}}" method="post" class="p-3 inline">
                            @csrf
                            <button class="focus:outline-none hover:bg-gray-200 " type="submit">Logout</button>
                        </form>
                    </div>
                    @endauth

                    @guest
                
                    <button class="inline-flex items-center bg-gray-100 border-0 focus:outline-none hover:bg-gray-200 rounded text-base mt-2 md:mt-0">
                        <a href="{{ route('register')}}" class="p-3">Register</a>
                    </button>
                    <button class="inline-flex items-center bg-gray-100 border-0 ml-3 focus:outline-none hover:bg-gray-200 rounded text-base mt-2 md:mt-0">
                        <a href="{{ route('login')}}" class="p-3">Login</a>
                    </button>
            
                @endguest
            </div>
        </header>

        @yield('content')
    </body>
</html>