<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/8c4bde81e2.js" crossorigin="anonymous"></script>

    <!-- BootStrap Icons -->
    <link rel="stylesheet" href="/node_modules/bootstrap-icons/font/bootstrap-icons.css" />

    <title>Presto Films</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

{{-- Log in / Register --}}

<body class="bg-primary">
    <div class="d-flex justify-content-center text-light mt-4">
        <h1>Welcome to Presto</h1>
    </div>
    <div class="d-flex justify-content-center text-light mx-3">

        @guest
            <a href="{{ route('login') }}" class="text-light">Log in</a>
            <a href="{{ route('register') }}" class="text-light">Register</a>

        </div>
        <div class="d-flex justify-content-center text-light mx-3">

        </div>
    @endguest

    @auth
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    @endauth




    <main>
        @yield('content')
    </main>
    {{-- End of Log in / Register / Nav Section --}}

    {{-- Welcome to Presto Films Section --}}

    {{-- End of Welcome to Presto Films Section --}}
</body>

</html>
