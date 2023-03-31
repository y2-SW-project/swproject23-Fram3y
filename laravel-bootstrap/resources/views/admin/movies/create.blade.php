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

    {{-- Create Form --}}
    <form action="{{ route('admin.movies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="container my-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input 
            type="text"
            name = "title"
            field = "title"
            class="form-control mt-1" 
            autocomplete= "off"
            :value = "@old('title')"
            >
        </div>

        @error('title')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="container mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Synopsis</label>
            <textarea 
            class="form-control" 
            type = "text"
            name = "synopsis"
            field = "synopsis"
            :value = "@old('synopsis')"
            rows="3"></textarea>
        </div>

        @error('synopsis')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="container my-3">
            <label for="exampleFormControlInput1" class="form-label">Director</label>
            <input 
            type="text"
            name = "director"
            field = "director"
            class="form-control mt-1" 
            autocomplete= "off"
            :value = "@old('director')"
            >
        </div>

        @error('director')
            <div class="text-danger">{{ $message }}</div>
        @enderror

        <div class="container my-3">
            <label for="exampleFormControlInput1" class="form-label">Starring</label>
            <input 
            type="text"
            name = "starring"
            field = "starring"
            class="form-control mt-1" 
            autocomplete= "off"
            :value = "@old('starring')"
            >
        </div>

        @error('starring')
            <div class="text-danger">{{ $message }}</div>
        @enderror

    </form>
    {{-- End of Create Form --}}

    {{-- Footer --}}
    <div class="bg-secondary">
        <div class="container d-flex justify-content-evenly p-0 pt-5">
            <ul class="text-light">
                <h5>Cookie Policy</h5>
                <h5>Privacy and Legal</h5>
                <h5>Corporate Responsibility</h5>
                <h5>Professional Rizzemé</h5>
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
