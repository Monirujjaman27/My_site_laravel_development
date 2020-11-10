
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html">a<span>v</span>o</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="{{ route('website.index') }}" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="{{ route('website.about') }}" class="nav-link">About</a></li>
                    <li class="nav-item"><a href="{{ route('website.packages') }}" class="nav-link">Packages</a></li>
                    <li class="nav-item"><a href="{{ route('website.code') }}" class="nav-link">Code</a></li>
                    <li class="nav-item"><a href="{{ route('website.contact') }}" class="nav-link">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- END nav -->