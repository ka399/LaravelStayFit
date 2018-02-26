@extends('layouts.default')
@section('content')
    <div class="container mt-3">
        <p style="font-size: large; "> Maintain your daily workout routine at our extensive fitness center. StayFit Gym
            is equipped with brand-new cardio machines,
            each with personalized features including entertainment centers, as well as Life Fitness strength training
            machines
            to make your workouts more efficient and effective.
            Use treadmills, bikes, free weights, resistance bands, and more to match your usual routine or to change it
            up.
            A wall of windows beams bright natural light into our state-of-the-art fitness center, equipped with Life
            Fitness treadmills, elliptical, cross trainers, and exercise bikes. Complete your workout with our selection
            of free weights, circuit weights, ropes, and mats.</p>
    </div>

    <br/>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <h2><a name="hours">Staffed Hours</a></h2>
                <p>Monday-Friday : 7 A.M. to 10 P.M.</p>
                <p>Saturday : 7 A.M. to 5 P.M.</p>
                <p>Sunday : 7 A.M. to 1 P.M. </p>
            </div>
            <div class="col-md-6">
                <h2><a name="pricing">Pricing</a></h2>
                <p>STAYFIT is now proud to offer $10.00 a month memberships.
                    Come in to STAYFIT today and let us show you how you can SAVE HUNDREDS of DOLLARS a YEAR on
                    Gym Membership FEES and still get in great shape. Come in for a tour today. </p>
            </div>
            <div class="col-md-3">
                <h2><a name="contact">Located At</a></h2>
                <p>STAYFIT FITNESS GYM <br/> 259 Riverside Station, <br/>Secaucus, NJ, 07094<br/>
                    (519) 763-4422 <br/>stayfitfitness@gmail.com</p>
            </div>
            <br/>
        </div>
    </div> <!-- /container -->

    <br/>
    <div class="container" mb-10>
        <div class="carouselsize">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <h3>StayFit Photo Gallery</h3>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100"
                             src="https://greenville.regency.hyatt.com/content/dam/PropertyWebsites/regency/gsprg/Media/All/Hyatt-Regency-Greenville-Stay-Fit-Gym.jpg"
                             alt="First slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="https://jacksonville.regency.hyatt.com/content/dam/PropertyWebsites/regency/jaxrj/Media/All/Hyatt-Regency-Jacksonville-Riverfront-P042-Fitness-Center.masthead-feature-panel-medium.jpg"
                             alt="Second slide">
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100"
                             src="https://denvertechcenter.regency.hyatt.com/content/dam/PropertyWebsites/regency/denve/Media/All/Hyatt-Regency-Denver-Tech-Center-Hotel-Fitness-Room.jpg"
                             alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            @include('includes.footer')
        </div>
    </div>


@endsection