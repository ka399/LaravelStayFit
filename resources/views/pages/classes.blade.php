@extends('layouts.default')
@section('content')

    <div class="container">
        <H3>Class Schedule</H3>
        <table class="table table-striped table-dark">
            <thead class="thead-dark">
            <tr>
                <th scope="col">Class Name</th>
                <th scope="col">Type</th>
                <th scope="col">Day</th>
                <th scope="col">Hours</th>
                <th scope="col">Trainer</th>
                <th scope="col">Spots</th>
                <th scope="col">Sample Video</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Zumba Dance</td>
                <td>Dance</td>
                <td>Monday, Thursday</td>
                <td>9 A.M.-10 A.M.</td>
                <td>Julia Roberts</td>
                <td>25</td>
                <td><a href="https://youtu.be/j6L-jRcvcU8" target="_blank"> Zumba </a></td>
            </tr>
            <tr>
                <td>Like a butterfly</td>
                <td>Boxing</td>
                <td>Tuesday</td>
                <td>7 A.M.-8 A.M.</td>
                <td>Aaron Chapman</td>
                <td>10</td>
                <td><a href="https://www.youtube.com/watch?v=WXGVFTvIhQY" target="_blank"> Women Boxing </a></td>
            </tr>
            <tr>
                <td>Hatha Yoga</td>
                <td>Yoga</td>
                <td>Monday, Friday</td>
                <td>10 A.M.-11 A.M.</td>
                <td>Jenny Louis</td>
                <td>25</td>
                <td><a href="https://www.youtube.com/watch?v=XSQn4-lO0Vk" target="_blank"> Hatha Yoga </a></td>
            </tr>
            <tr>
                <td>Aerobics</td>
                <td>Dance</td>
                <td>Tuesday, Wednesday</td>
                <td>2 P.M.-3 P.M.</td>
                <td>Angela Nyman</td>
                <td>18</td>
                <td><a href="https://www.youtube.com/watch?v=uRSHkbRO_jY" target="_blank"> Aerobics </a></td>
            </tr>
            <tr>
                <td>Cardio Blast</td>
                <td>Gym</td>
                <td>Saturday</td>
                <td>3 P.M.-4 P.M.</td>
                <td>Samantha Sellers</td>
                <td>10</td>
                <td><a href="https://www.youtube.com/watch?v=OwlhRjJ9DOM" target="_blank"> Cardio Blast </a></td>
            </tr>
            <tr>
                <td>Meditation</td>
                <td>Yoga</td>
                <td>Sunday</td>
                <td>8 A.M.-10 A.M.</td>
                <td>Kamran Amin</td>
                <td>30</td>
                <td><a href="https://www.youtube.com/watch?v=n4fRZU5oEMI" target="_blank"> Meditation </a></td>
            </tr>

            </tbody>
        </table>

    </div>

@endsection
