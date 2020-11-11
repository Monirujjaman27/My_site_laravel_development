<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
    <a class="navbar-brand" href="{{ route('website.index') }}">
            <img class="brand" height="50px" width="50px" src="@if(isset($logo->logo )) {{ asset('public/storage/logo') }}{{ '/'.$logo->logo }}
                @else {{ asset('public/storage/default/logo.png') }}
                @endif" alt="@if(isset($logo->logo)) {{ $logo->logo }} @endif">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
            aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="{{ route('website.index') }}" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="{{ route('website.about') }}" class="nav-link">About</a></li>
                <li class="nav-item"><a href="{{ route('website.packages') }}" class="nav-link">Packages</a></li>
                <li class="nav-item"><a href="{{ route('website.projects') }}" class="nav-link">Works</a></li>
                <li class="nav-item"><a href="{{ route('website.contact') }}" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->