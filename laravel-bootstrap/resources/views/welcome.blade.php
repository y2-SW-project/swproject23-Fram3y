<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome Icons -->
        <script
        src="https://kit.fontawesome.com/8c4bde81e2.js"
        crossorigin="anonymous"
        ></script>

        <!-- BootStrap Icons -->
        <link
        rel="stylesheet"
        href="/node_modules/bootstrap-icons/font/bootstrap-icons.css"
        />

        <title>test</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/sass/app.scss', 'resources/js/app.js'])
        </head>

    <body>
        {{-- Log in / Register / Nav Section --}}
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Presto Films</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
          
                    @if (Route::has('login'))
                        
                            @auth
                                <a href="{{ url('/home') }}" class="">Home</a>
                            @else
                            <li>
                                <a href="{{ route('login') }}" class="nav-link active">Log in</a>
                            </li>
                                @if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}" class="nav-link active">Register</a>
                                </li>
                                @endif
                            @endauth
        
                    @endif
                <div>
                    
                </div>

                </ul>
              </div>
            </div>
          </nav>









        {{-- End of Log in / Register / Nav Section --}}

        {{-- Welcome to Presto Films Section --}}

        {{-- End of Welcome to Presto Films Section --}}
    </body>
</html>
