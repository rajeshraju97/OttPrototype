@extends('layouts.app')
@section('content')

@include('layouts.navbar')

<!-- //owl caurosel of the -->
<div class="home-slider owl-carousel js-fullheight position-relative">
    <!-- 1 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/avengers.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
<<<<<<< HEAD

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
                                <li><a class="dropdown-item" href="/movies">All Movies</a></li>
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
                                <li><a class="dropdown-item" href="/tvseries">All Tv Series</a></li>
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
                                <li><a class="dropdown-item" href="/animes">All Anime</a>
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

=======
>>>>>>> 4afdee6225f7019fbb17bdaef9a5f95cbdbd1d0f
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Avengers</h2>
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


    <!-- 2 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/alienromolus.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Alien Romolus</h2>
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

    <!-- 3 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/deadpool_wolverine.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Deadpool & Wolverine</h2>
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


    <!-- 4 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/ironman.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Ironman</h2>
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


    <!-- 5 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/kalki.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Kalki</h2>
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

    <!-- 6 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/pushpa.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Pushpa</h2>
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

    <!-- 7 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/RRR.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>RRR</h2>
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

    <!-- 8 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/schinder_list.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Schinder List</h2>
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

    <!--9 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/twisters.jpg') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Twisters</h2>
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

    <!-- 10 Slider Item -->
    <div class="slider-item js-fullheight"
        style="background-image: url('{{ asset('prototype_images/corosel/your_name.png') }}');backround-size:cover;">
        <div class="overlay"></div>
        <!-- #region -->
        <!-- Slider Text -->
        <div class="container">
            <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                <div class="col-md-12 ftco-animate">
                    <div class="text w-100 text-left">
                        <h2>Your Name</h2>
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

<!-- Upcoming Movies Section -->
<h1 class="text-left my-5 text-light">Upcoming Movies</h1>
<div class="now-playing owl-carousel">
    @php
        use Illuminate\Support\Facades\File;

        // Specify the folder containing the images
        $imageFolder = public_path('prototype_images/Movies/Upcoming_Movies');

        // Get all image files in the folder (assuming they are .jpg, .png, etc.)
        $images = File::files($imageFolder);
    @endphp

    @foreach ($images as $image)
        <div class="item">
            <div class="text-center text-light">
                <img src="{{ asset('prototype_images/Movies/Upcoming_Movies/' . basename($image)) }}"
                    class="img-fluid w-60 p-2"
                    style="border-radius: 17px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2000</p>
                    <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
<!-- end of the Upcoming Movies section -->


<!-- World Popular Movies Section -->
<h1 class="text-left my-5 text-light">World Popular Movies</h1>
<div class="now-playing owl-carousel">

    @php


        // Specify the folder containing the images
        $imageFolder = public_path('prototype_images/Movies/World_Popular_Movies');

        // Get all image files in the folder (assuming they are .jpg, .png, etc.)
        $images = File::files($imageFolder);
    @endphp

    @foreach ($images as $image)
        <div class="item">
            <div class="text-center text-light">
                <img src="{{ asset('prototype_images/Movies/World_Popular_Movies/' . basename($image)) }}"
                    class="img-fluid w-60 p-2"
                    style="border-radius: 17px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2000</p>
                    <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endforeach

</div>
<!-- end of the World Popular Movies section -->


<!-- Top Rated Movies Section -->
<h1 class="text-left my-5 text-light">Top Rated Movies</h1>
<div class="now-playing owl-carousel">

    @php


        // Specify the folder containing the images
        $imageFolder = public_path('prototype_images/Movies/Top_Rated_Movies');

        // Get all image files in the folder (assuming they are .jpg, .png, etc.)
        $images = File::files($imageFolder);
    @endphp

    @foreach ($images as $image)
        <div class="item">
            <div class="text-center text-light">
                <img src="{{ asset('prototype_images/Movies/Top_Rated_Movies/' . basename($image)) }}"
                    class="img-fluid w-60 p-2"
                    style="border-radius: 17px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2000</p>
                    <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
<!-- end of the Top Rated Movies section -->



<!-- Telugu Popular Movies Section -->
<h1 class="text-left my-5 text-light">Telugu Popular Movies</h1>
<div class="now-playing owl-carousel">

    @php


        // Specify the folder containing the images
        $imageFolder = public_path('prototype_images/Movies/Telugu_Popular_Movies');

        // Get all image files in the folder (assuming they are .jpg, .png, etc.)
        $images = File::files($imageFolder);
       @endphp

    @foreach ($images as $image)
        <div class="item">
            <div class="text-center text-light">
                <img src="{{ asset('prototype_images/Movies/Telugu_Popular_Movies/' . basename($image)) }}"
                    class="img-fluid w-60 p-2"
                    style="border-radius: 17px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                    <!-- Display filename or dynamic title -->
                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2000</p>
                    <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
<!-- end of the Telugu Popular Movies section -->



<!-- Popular Tv Series Section -->
<h1 class="text-left my-5 text-light">Popular Tv Series</h1>
<div class="now-playing owl-carousel">

    @php


        // Specify the folder containing the images
        $imageFolder = public_path('prototype_images/TVseries/Popular_Tv_Series');

        // Get all image files in the folder (assuming they are .jpg, .png, etc.)
        $images = File::files($imageFolder);
       @endphp

    @foreach ($images as $image)
        <div class="item">
            <div class="text-center text-light">
                <img src="{{ asset('prototype_images/TVseries/Popular_Tv_Series/' . basename($image)) }}"
                    class="img-fluid w-60 p-2"
                    style="border-radius: 17px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                    <!-- Display filename or dynamic title -->
                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2000</p>
                    <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
<!-- end of the Popular Tv Series section -->



<!-- Top Rated Tv Series Section -->
<h1 class="text-left my-5 text-light">Top Rated Tv Series</h1>
<div class="now-playing owl-carousel">

    @php


        // Specify the folder containing the images
        $imageFolder = public_path('prototype_images/TVseries/Top_Rated_Tv_Series');

        // Get all image files in the folder (assuming they are .jpg, .png, etc.)
        $images = File::files($imageFolder);
       @endphp

    @foreach ($images as $image)
        <div class="item">
            <div class="text-center text-light">
                <img src="{{ asset('prototype_images/TVseries/Top_Rated_Tv_Series/' . basename($image)) }}"
                    class="img-fluid w-60 p-2"
                    style="border-radius: 17px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                    <!-- Display filename or dynamic title -->
                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2000</p>
                    <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
<!-- end of the Top Rated Tv Series section -->


<!-- Airing Today Tv Series Section -->
<h1 class="text-left my-5 text-light">Airing Today Tv Series</h1>
<div class="now-playing owl-carousel">

    @php


        // Specify the folder containing the images
        $imageFolder = public_path('prototype_images/TVseries/Tv_Series_Airing_Today');

        // Get all image files in the folder (assuming they are .jpg, .png, etc.)
        $images = File::files($imageFolder);
       @endphp

    @foreach ($images as $image)
        <div class="item">
            <div class="text-center text-light">
                <img src="{{ asset('prototype_images/TVseries/Tv_Series_Airing_Today/' . basename($image)) }}"
                    class="img-fluid w-60 p-2"
                    style="border-radius: 17px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                    <!-- Display filename or dynamic title -->
                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2000</p>
                    <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
<!-- end of the Airing Today Tv Series section -->



<!-- Popular Anime Section -->
<h1 class="text-left my-5 text-light">Popular Anime</h1>
<div class="now-playing owl-carousel">

    @php


        // Specify the folder containing the images
        $imageFolder = public_path('prototype_images/Animes/Popular_Anime');

        // Get all image files in the folder (assuming they are .jpg, .png, etc.)
        $images = File::files($imageFolder);
       @endphp

    @foreach ($images as $image)
        <div class="item">
            <div class="text-center text-light">
                <img src="{{ asset('prototype_images/Animes/Popular_Anime/' . basename($image)) }}"
                    class="img-fluid w-60 p-2"
                    style="border-radius: 17px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                    <!-- Display filename or dynamic title -->
                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2000</p>
                    <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
<!-- end of the Popular Anime section -->


<!-- Upcoming Anime Section -->
<h1 class="text-left my-5 text-light">Upcoming Anime</h1>
<div class="now-playing owl-carousel">

    @php


        // Specify the folder containing the images
        $imageFolder = public_path('prototype_images/Animes/Upcoming_Anime');

        // Get all image files in the folder (assuming they are .jpg, .png, etc.)
        $images = File::files($imageFolder);
       @endphp

    @foreach ($images as $image)
        <div class="item">
            <div class="text-center text-light">
                <img src="{{ asset('prototype_images/Animes/Upcoming_Anime/' . basename($image)) }}"
                    class="img-fluid w-60 p-2"
                    style="border-radius: 17px;box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;">
                <div class="card-body text-center">
                    <h5 class="card-title">{{ pathinfo($image, PATHINFO_FILENAME) }}</h5>
                    <!-- Display filename or dynamic title -->
                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-05-2000</p>
                    <div class="star-rating">
                        @for ($i = 0; $i < 5; $i++)
                            <i class="bi bi-star-fill text-warning"></i> <!-- Filled star -->
                        @endfor
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
<!-- end of the Upcoming Anime section -->







@endsection