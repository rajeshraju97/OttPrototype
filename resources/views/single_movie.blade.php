@extends('layouts.app')
@section('content')

@include('layouts.navbar')

<div class="container col-md-12" style="margin-top:7rem !important;">


    <div class="movie-container" style="background-image:url({{asset('prototype_images/corosel/avengers.jpg')}});">
        <div class="movie-details">
            <div class="movie-info">
                <h1 class="movie-title">Avengers</h1>
                <p class="movie-description">
                    Movie Overview
                </p>
                <div class="d-flex fs-5">

                    <p class="me-3">Action, Adeventure</p>

                    <p><i class="bi bi-calendar-event" style="color:#ffee00;"></i>&nbsp;19-10-2000</p>

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

        <div class="cast-section">
            <h3>Cast</h3>

            <div class="movie_cast owl-carousel">

                <div class="item">
                    <div class="text-light ">
                        <img src="{{asset('images/blank_profile.png')}}" class="img-fluid w-60 p-2"
                            style="border-radius: 17px;box-shadow: drop-shadow(rgba(100, 100, 111, 0.2) 0px 7px 29px 0px);"
                            title="Character: Character1">
                        <div class="text-center movie_hover">
                            <h5 class="card-title">Original Name</h5>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>



    <!-- #region  crew region-->
    <h3 class="text-light fs-3 fw-bold mt-5">Crew:</h3>
    <div class="crew-section mt-2">

        <div class="sub d-grid" style="grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); gap: 20px;">


            <div class="item ">
                <div class="text-light">
                    <h5 class="card-title">
                        <span style="color:#ffee00;">Director:</span>
                        Name
                    </h5>
                </div>
            </div>
        </div>


        <hr style="color:#ffee00;border:2px solid;">
        <a href="" class="text-light fs-4 fw-bolder">All Cast & Crew Details&nbsp;&nbsp;
            <span class='ion-ios-arrow-forward'></span>
        </a>
    </div>
</div>










@endsection