<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')
        <title>Laravel Auth</title>
    </head>
    <body class="bg-gray-600">
        <header>
            <nav class=" p-4 bg-white flex justify-between">
                <ul class="flex items-center">
                    <li class="px-3-3"><a href="{{route('home')}}">Home</a></li>
                    <li class="px-3"><a href="{{route('dashboard')}}">Dashboard</a></li>
                </ul>

                <ul class="flex items-center">
                    @auth
                        <li class="px-3"><a href="#">{{auth()->user()->name}}</a></li>
                        <li class="px-3">
                            <form action="{{route('logout')}}" method="post" class="p-3 inline">
                                @csrf
                                <button type="submit">Logout</button>
                            </form>
                        </li>
                    @endauth

                    @guest
                        <li class="px-3"><a href="{{route('login')}}">Login</a></li>
                        <li class="px-3"><a href="{{route('register')}}">Register</a></li>
                    @endguest
                </ul>
            </nav>
        </header>
        <main class="container mx-auto mt-6">
            @yield('content')
        </main>
    </body>
</html>




