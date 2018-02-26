<header>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark" style="font-size: large;
    font-stretch: semi-expanded;
    color:white;">

        <!-- Brand/logo -->
        <a class="navbar-brand" href="/"><img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSNYXen5wwn-TLuH-QyL2Jx6nKC_QlJka8jxZBCr2AXr4w22rrM"
                    alt="STAYFIT" style="width:90px;"></a>

        <!-- Links -->
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="{{route('home')}}">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About STAYFIT</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('classes')}}">Class Schedule</a></li>
            <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact Us</a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto">

            <li class="nav-item">
                <a class="nav-link" href="{{route('viewmsgs')}}">View Messages</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="{{route('login')}}">Sign in</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('register')}}">Sign up</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('logout')}}">Logout</a>
            </li>
        </ul>

    </nav>
</header>