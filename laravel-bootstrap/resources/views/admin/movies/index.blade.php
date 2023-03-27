@extends('layouts.app')

@section('content')
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

    {{-- Advert Carousel --}}
    <div id="AdvertCarousel" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.pinimg.com/originals/bf/82/f6/bf82f6956a32819af48c2572243e8286.jpg"
                    class="d-block w-100 max-carousel-height" alt="advert-1">
            </div>
            <div class="carousel-item">
                <img src="https://free4kwallpapers.com/uploads/originals/2019/11/20/bladerunner--movie-scene-wallpaper.jpg"
                    class="d-block w-100 max-carousel-height" alt="advert-2">
            </div>
            <div class="carousel-item">
                <img src="https://wallpaper.dog/large/20493504.jpg" class="d-block w-100 max-carousel-height"
                    alt="advert-3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- End of Advert Carousel --}}

    {{-- Screening in your area --}}
    <div class="container-fluid p-0 bg-primary">
        <div class="bg-primary">
            <h2 class="d-flex justify-content-center text-light py-4">Screening in your area</h2>
        </div>

        <div class="d-flex justify-content-evenly">
            @forelse ($movies as $movie)
                <a href="{{ route('admin.movies.show', $movie) }}">
                    <div>
                        <img src="{{ asset('storage/images/' . $movie->movie_image) }}" width="200" height="300"
                            alt="movieImage">
                        <p class="d-flex justify-content-center text-light">{{ $movie->title }}</p>
                    </div>
                </a>
            @empty
        </div>
        <div class="carousel-item">
            <a href="{{ route('admin.movies.show', $movie) }}">
                <div>
                    <img src="{{ asset('storage/images/' . $movie->movie_image) }}" width="200" height="300"
                        alt="movieImage">
                    <p class="d-flex justify-content-center text-light">{{ $movie->title }}</p>
                </div>
            </a>
        </div>
        @endforelse
    </div>
    {{-- End of Screening in your area --}}

    {{-- 2nd Advert Carousel --}}
    <div id="AdvertCarousel" class="carousel slide pt-4">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://i.pinimg.com/originals/bf/82/f6/bf82f6956a32819af48c2572243e8286.jpg"
                    class="d-block w-100 max-carousel-height" alt="advert-1">
            </div>
            <div class="carousel-item">
                <img src="https://free4kwallpapers.com/uploads/originals/2019/11/20/bladerunner--movie-scene-wallpaper.jpg"
                    class="d-block w-100 max-carousel-height" alt="advert-2">
            </div>
            <div class="carousel-item">
                <img src="https://wallpaper.dog/large/20493504.jpg" class="d-block w-100 max-carousel-height"
                    alt="advert-3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- End of 2nd Advert Carousel --}}

    {{-- Special Offers --}}
    <div class="container pt-4">
        <div class="bg-primary">
            <h2 class="d-flex justify-content-center text-light py-4">Special Offers</h2>
        </div>

        <div class="d-flex justify-content-evenly">
            <div class="bg-light offer-width">
                <img src="https://drogheda.arccinema.ie/articleimages/rsz_sweet_cinema_sunday_original_artwork.jpg"
                    alt="special-offer-image" width="300">
                <h4 class="ps-1 pt-3">Special Offer</h4>
                <p class="ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestias voluptatibus
                    temporibus
                    non modi cupiditate omnis aperiam, ad provident nisi maxime hic, excepturi dolore ipsa incidunt debitis
                    reprehenderit, quibusdam harum.
                </p>
            </div>

            <div class="bg-light offer-width">
                <img src="https://drogheda.arccinema.ie/articleimages/rsz_sweet_cinema_sunday_original_artwork.jpg"
                    alt="special-offer-image" width="300">
                <h4 class="ps-1 pt-3">Special Offer</h4>
                <p class="ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestias voluptatibus
                    temporibus
                    non modi cupiditate omnis aperiam, ad provident nisi maxime hic, excepturi dolore ipsa incidunt debitis
                    reprehenderit, quibusdam harum.
                </p>
            </div>

            <div class="bg-light offer-width">
                <img src="https://drogheda.arccinema.ie/articleimages/rsz_sweet_cinema_sunday_original_artwork.jpg"
                    alt="special-offer-image" width="300">
                <h4 class="ps-1 pt-3">Special Offer</h4>
                <p class="ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestias voluptatibus
                    temporibus
                    non modi cupiditate omnis aperiam, ad provident nisi maxime hic, excepturi dolore ipsa incidunt debitis
                    reprehenderit, quibusdam harum.
                </p>
            </div>

            <div class="bg-light offer-width">
                <img src="https://drogheda.arccinema.ie/articleimages/rsz_sweet_cinema_sunday_original_artwork.jpg"
                    alt="special-offer-image" width="300">
                <h4 class="ps-1 pt-3">Special Offer</h4>
                <p class="ps-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea molestias voluptatibus
                    temporibus
                    non modi cupiditate omnis aperiam, ad provident nisi maxime hic, excepturi dolore ipsa incidunt debitis
                    reprehenderit, quibusdam harum.
                </p>
            </div>
        </div>
    </div>
    {{-- End of Special Offers --}}

    {{-- Footer --}}

    {{-- End of Footer --}}
@endsection
