<nav class="navbar navbar-expand-lg navbar-dark bg-success sticky-top">
    <div class="container">
        <a class="navbar-brand" href="{{route('/')}}" title="Donate Blood Save Life">BloodDonate</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="{{route('/')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('donor-register')}}">Be A Donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('post-register')}}">Post</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('see-donor')}}">See Donor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about-us')}}">About Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
