@extends('layouts.app')

@section('content')

    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/8c4bde81e2.js" crossorigin="anonymous"></script>

    {{-- Nav Bar --}}
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand text-light" href="#">Presto Films</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Films</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Cinemas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active text-light" aria-current="page" href="#">Offers & Gifts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link active text-light dropdown-toggle" href="#" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Account
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('admin.movies.create') }}">Add Movie</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    {{-- End of Nav Bar --}}

    {{-- Wide Movie Advert --}}
    <div>
        <img src="https://www.pixel4k.com/wp-content/uploads/2019/03/assassins-creed-3-remastered-4k_1553074463.jpg"
            alt="" class="w-100" height="350">
    </div>
    {{-- End of Wide Movie Advert --}}




    <div class="bg-primary">
        <div class="container">
            <div class="d-flex justify-content-evenly postion-relative">
                <img src="{{ asset('storage/images/' . $movie->movie_image) }}" width="200" height="300"
                    class="translate-middle-y" alt="">
                <div class="text-light w-50">
                    <h1 class="pt-3">{{ $movie->title }}</h1>

                    <p>{{ $movie->synopsis }} Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minus debitis
                        esse quaerat voluptatem officiis voluptate quos facilis. Recusandae, reprehenderit rerum? Quis
                        inventore accusantium distinctio, laborum quibusdam aspernatur alias velit modi!
                        Repudiandae architecto voluptatum et sapiente? Reprehenderit, quia doloremque? Laudantium sint
                        facere eius, sunt omnis nisi consectetur odit numquam provident quam possimus excepturi rem
                        eveniet ipsam explicabo quod, dolorem quo cupiditate?
                        Quas officiis ipsa cumque inventore reiciendis suscipit vitae in laboriosam vero, molestiae non
                        unde labore expedita mollitia qui dicta consectetur vel reprehenderit sunt atque ipsum earum
                        neque ea? Illo, corporis.
                        Corrupti, nemo, amet hic aut esse optio voluptatibus excepturi facilis fugiat sit natus nobis.
                        Maxime adipisci magnam excepturi placeat praesentium aliquam ut corporis sequi repellendus
                        obcaecati neque culpa, aspernatur quisquam.
                        Accusantium repudiandae, cupiditate optio illum nobis, perspiciatis sapiente obcaecati commodi
                        mollitia repellat est nesciunt pariatur, facilis dolorum dignissimos! Quis accusantium
                        voluptatem excepturi? A distinctio rerum soluta? Recusandae consectetur cupiditate nemo.</p>

                    <p>Cast: <br>{{ $movie->starring }}</p>
                </div>

                <div class="text-light pt-3">
                    <p>Release Date: <br> {{ $movie->release_date }}</p>
                    <p>Genres: <br> {{ $movie->genre_id }}</p>
                </div>

            </div>
        </div>
    </div>


    {{-- Cinemas Near You --}}
    <div class="bg-primary">
        <div class="container bg-secondary text-light d-flex justify-content-between py-4">
            <div>
                <h3 class="m-0">Cinemas Near You</h3>
            </div>
            <div class="text-center">
                <h3 class="m-0">Filter By <i class="fa-solid fa-list"></i></h3>
            </div>
        </div>
        {{-- Cinema Name Loop --}}
        @forelse ($cinemas as $cinema)
            <div class="bg-priamry">
                <div class="container border-bottom pb-4">
                    <div class="pt-5 text-light">
                        <h1 class="m-0">{{ $cinema->name }}</h1>
                    </div>
                    <div class="container p-0 d-flex text-light">
                        @forelse ($screenings as $screening)
                            <div class="pt-2">
                                <h4 class="m-0 pe-5">{{ $screening->date }}</h4>
                                <h4 class="m-0 pe-5">{{ $screening->time }}</h4>
                            </div>

                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        @empty
        @endforelse
    </div>
    {{-- End of Cinemas Near You --}}


    {{-- Footer --}}
    <div class="bg-secondary">
        <div class="container d-flex justify-content-evenly p-0 pt-5">
            <ul class="text-light">
                <h5>Cookie Policy</h5>
                <h5>Privacy and Legal</h5>
                <h5>Corporate Responsibility</h5>
                <h5>Modern Slavery Statement</h5>
            </ul>
            <ul class="text-light">
                <h5>Contact Us</h5>
                <h5>Help</h5>
                <h5>Accessibility</h5>
                <h5>Allergen Information</h5>
            </ul>
            <ul class="text-light">
                <h5>About Us</h5>
                <h5>Careers</h5>
                <h5>Corporate Events</h5>
                <h5>Presto Scene</h5>
            </ul>
            <ul class="text-light">
                <h5>iOS App</h5>
                <h5>Android App</h5>
                <h5>Employee Applications</h5>
                <h5>Licensing Agreements</h5>
            </ul>
        </div>
    </div>
    {{-- End of Footer --}}
@endsection
