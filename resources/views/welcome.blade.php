@extends('layouts.app')
@section('content')



<!-- //owl caurosel of the -->
<div class="home-slider owl-carousel js-fullheight position-relative">

    <!-- Single Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/Animes/Popular_Anime/22128.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->

        <!-- Navbar Inside Each Carousel Slide -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute top-0 start-0 w-100"
            style="z-index: 10;">
            <div class="container-fluid">
                <a class="navbar-brand" href="/">
                    <img src="{{ asset('images/logo3.png') }}" alt="Logo" class="img-fluid" style="max-height: 80px;">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent1" style="margin-right:5pc;">

                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        @auth
                            <li class="nav-item">
                                <div class="search-box">
                                    <form action="#" method="post">
                                        @csrf
                                        <button type="button" class="btn-search"><i class="bi bi-search"></i></button>
                                        <input type="text" class="input-search" name="search_query"
                                            placeholder="Type to Search...">
                                    </form>
                                </div>
                            </li>

                        @endauth
                        <li class="nav-item">
                            <a class="nav-link text-light fs-5" aria-current="page" href="/">Home</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Movies
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">All Movies</a></li>
                                <li><a class="dropdown-item" href="#">World Popular
                                        Movies</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Top Rated Movies</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Telugu Popular
                                        Movies</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Tv Series
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">All Tv Series</a></li>
                                <li><a class="dropdown-item" href="#">Top Rated Series</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Airing Today
                                        Series</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Popular
                                        Series</a></li>
                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Anime
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">All Anime</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Top Anime</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Popular Anime</a>
                                </li>
                                <li><a class="dropdown-item" href="#">Upcoming
                                        Anime</a>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- Show Profile, Username, and Logout links if the user is authenticated -->
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle fs-5" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <!-- Display the username here -->
                                    <i class="bi bi-person-circle"></i>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Test</a></li>

                                    <li><a class="dropdown-item" href="#">WatchList</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="#"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="#" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endauth

                        <!-- Show Login and Signup links if the user is a guest -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link text-light fs-5" href="/register">Sign In/Up</a>
                            </li>

                        @endguest


                    </ul>
                </div>
            </div>
        </nav>

        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Test Ttile</h2>
                        <div class="d-flex">
                            <p class="me-3">Test</p>

                            <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2021</p>

                        </div>
                        <div class="star-rating">
                            @for ($i = 0; $i < 5; $i++)
                                @if ($i < 5)
                                    <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                                @else
                                    <i class="bi bi-star text-warning"></i> <!-- Empty star -->
                                @endif
                            @endfor
                            <span class="border p-1 ml-2">PG-13</span>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </div>
</div>





@endsection