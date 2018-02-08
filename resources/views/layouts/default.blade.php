<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>

<header>
    @include('includes.header')
</header>

<div class="jumbotron">
    <div class="container">
        <h1>STAYFIT Fitness Center</h1>
        <p><strong><i>Come One, Come All - The best rate guaranteed!</i></strong></p>
        <br/>
        <br/>
        <br/>

        <p style="font-size: x-large"><strong> Join Now!! Call us @ (519) 763-4422 for enquiries. We are always ready to help!</strong></p>
    </div>
</div>


<main role="main">
    @yield('content')

    <div class="container">
        <br/>
        <div class="row">
            <div class="col-md-3">
                <h3><a name="hours">Staffed Hours</a></h3>
                <p>Monday-Friday : 7 A.M. to 10 P.M.</p>
                <p>Saturday : 7 A.M. to 5 P.M.</p>
                <p>Sunday : 7 A.M. to 1 P.M. </p>
            </div>
            <div class="col-md-6">
                <h3><a name="pricing">Pricing</a></h3>
                <p>STAYFIT is now proud to offer $10.00 a month memberships.
                    Come in to STAYFIT today and let us show you how you can SAVE HUNDREDS of DOLLARS a YEAR on
                    Gym Membership FEES and still get in great shape. Come in for a tour today. </p>
            </div>
            <div class="col-md-3">
                <h3><a name="contact">Contact Us</a></h3>
                <p>STAYFIT FITNESS GYM <br/> 259 Riverside Station, <br/>Secaucus, NJ, 07094<br/>
                    (519) 763-4422 <br/>stayfitfitness@gmail.com</p>
            </div>
            <br/>
        </div>


        <footer class="row">
        @include('includes.footer')
    </footer>

</main>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>