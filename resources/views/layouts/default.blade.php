<!DOCTYPE html>
<html lang="en">

@include('includes.head')

<body>
@include('includes.menu')
@include('includes.header')

<main role="main">
    @yield('content')
</main>
<footer class="row">
    @include('includes.footer')
</footer>
@include('includes.jsfooter')
</body>
</html>