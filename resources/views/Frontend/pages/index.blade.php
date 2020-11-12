@extends('Layouts.website')
@section('content')
<!-- slider -->
@include('Frontend.inc.slider')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center mb-5">
                <h2 data-aos="fade-up" class="mb-2">About Dev MJ</h2>
            </div>
        </div>
        <div class="row" data-aos="slide-left">
            <div class="col-md d-flex align-items-stretch ftco-animate">
                <div class="media block-6 w-100 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-vector"></span></div>
                    <div class="media-body py-md-4">
                        <h3>UI/UX Design</h3>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-items-stretch ftco-animate">
                <div class="media block-6 w-100 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-web-programming"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Web Development</h3>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-items-stretch ftco-animate">
                <div class="media block-6 w-100 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-layer"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Product Design</h3>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-items-stretch ftco-animate">
                <div class="media block-6 w-100 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-coding"></span></div>
                    <div class="media-body py-md-4">
                        <h3>Mobile Apps</h3>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-items-stretch ftco-animate">
                <div class="media block-6 w-100 services d-block text-center">
                    <div class="icon d-flex justify-content-center align-items-center"><span
                            class="flaticon-zoom"></span></div>
                    <div class="media-body py-md-4">
                        <h3>SEO</h3>
                    </div>
                </div>
            </div>
        </div>


        <div class="row wrap-about my-5">
            <div class="col-md-12">
                <div class="row">
                    @foreach($about as $about)
                    <div class="col-md-5 order-md-last d-flex" data-aos="slide-left">
                        <div class="img w-100 h-100 ftco-animate animated fadeInRight "
                            style="background-image: url({{ asset('public/storage/about') }}/{{ $about->image}}); min-height:380px;">
                        </div>
                    </div>
                    <div class="col-md-7" data-aos="slide-right">
                        <div class="text text-md-right">
                            <h3>{{ $about->name }}</h3>
                            <p class="text-justify">{{ $about->description }}.</p>
                            <a href="{{ route('website.about') }}" class="btn btn-info rounded-pill btn_shadow">View Details</a>

                            @foreach($resume as $resume)
                            @if($resume->resume)
                            <a href="{{route('downloadResume', ['file'=>$resume->resume]) }}"
                                class="btn btn-success rounded-pill btn_shadow">Download Resume</a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mt-5" data-aos="slide-left">
            <div class="col-md-4">
                <div class="services-2 d-flex ftco-animate">
                    <span>01</span>
                    <div class="text">
                        <h3>Search Engine Optimization</h3>
                        <p>Far far away, behind the word mountains</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-2 d-flex ftco-animate">
                    <span>02</span>
                    <div class="text">
                        <h3>Search Engine Optimization</h3>
                        <p>Far far away, behind the word mountains</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="services-2 d-flex ftco-animate">
                    <span>03</span>
                    <div class="text">
                        <h3>Search Engine Optimization</h3>
                        <p>Far far away, behind the word mountains</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- progress-bar -->
        <div class="row mt-5">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="" data-aos="fade-up">Professional Skill</h2>
            </div>
            <div class="col-md-6 col-sm-12">
                <img data-aos="fade-up-right" class="img-fluid" src="{{ asset('public/storage/slider') }}/08.png"
                    alt="">
            </div>
            <div class="col-md-6 col-sm-12 m-auto" data-aos="fade-up-left">
                @foreach($skill as $skill)
                <div class="m-1">
                    <strong>{{ $skill->name }}</strong>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped bg-{{ $skill->color }} progress-bar-animated"
                            role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"
                            style="width: {{ $skill->skillrange}}%">{{ $skill->skillrange}}%</div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
        <!-- progress-bar -->
    </div>
</section>

<section class="ftco-section ftco-portfolio bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 data-aos="fade-up">Works</h2>
            </div>
        </div>
        <!-- Tabs  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="slide-right">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">All</a>
            </li>


            @foreach($category as $category)
            <!-- @if($category->name) -->
            <li class="nav-item" role="presentation">
                <span id="category-tab">
                    <a class="nav-link categoryItems" data-toggle="tab" data-id="{{ $category->id }}"
                        href="#catByPortfolio" role="tab" aria-controls="profile"
                        aria-selected="false">{{ $category->name }}</a>
                </span>
            </li>
            <!-- @endif -->
            @endforeach
        </ul>
        <!-- Tabs end -->



        <!-- TabContent -->
        <div class="tab-content mt-2" id="myTabContent">
            <!-- all portfolio content  -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"
                data-aos="slide-left">
                <div class="row d-flex">
                    @foreach($portfolio as $portfolio)
                    <div class="col-md-3 d-flex ftco-animate">
                        <div class="blog-entry justify-content-end">
                            <div class="text">
                                <div class="block-20 img imgoverlay"
                                    style="background-image:url({{ asset('public/storage/portfolio') }}/{{ $portfolio->image }});">
                                    <div class="d-flex justify-content-center">
                                        <a href="#" class="btn btn-success previewBtn"><i class="fa fa-eye"></i> Preview
                                            Portfolio</a>
                                    </div>
                                </div>
                                <h3 class="heading mb-3"><a href="#">{{ $portfolio->title }}</a></h3>
                                <div class="meta mb-3">
                                    <div><a href="#">June 01, 2020</a></div>
                                </div>
                                <p>{{ $portfolio->description }} <a href="#">Read
                                        More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>


            <!-- categorywais portfolios  -->
            <div class="tab-pane fade" id="catByPortfolio" role="tabpanel" aria-labelledby="category-tab">
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <div class="block-20 img imgoverlay"
                                style="background-image:url({{ asset('public/storage/portfolio') }});">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-success previewBtn"><i class="fa fa-eye"></i> Preview
                                        Portfolio</a>
                                </div>
                            </div>
                            <h3 class="heading mb-3"><a href="#"></a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">June 01, 2020</a></div>
                            </div>
                            <p> <a href="#">Read More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- all portfolio content  -->

        <div class="row">
            <div class="col-md">
                <div class="text-center">
                    <a href="{{ route('website.projects') }}" class="btn btn-success rounded-pill btn_shadow">Viwe all works</a>
                </div>
            </div>
        </div>

    </div>
    <!-- TabContent end -->

    </div>
    <div class="degree-left"></div>
</section>

<!-- Clients Says About Us section   -->
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 data-aos="fade-up" class="mb-3">Clients Says About Us?</h2>
            </div>
        </div>
        <div class="row ftco-animate mb-4">
            <div class="col-md-12" data-aos="slide-right">
                <div class="carousel-testimony owl-carousel">
                    @foreach($testemonial as $testemonial)
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">{{ Str::limit($testemonial->description, 120) }} <a class="text-danger"
                                        href="#">Read More</a></p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('public/storage/testimonial') }}/{{ $testemonial->image }})">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">{{ $testemonial->clientName }}</p>
                                        <span class="position">{{ $testemonial->label }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <!-- Clients Says About Us section end  -->


        <!-- packeges section  -->
        <div class="row justify-content-center my-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2 data-aos="fade-up">Packages</h2>
            </div>
        </div>
        <div class="row packege-slider owl-carousel">
            <div class="slider-item packege-slider-item">
                <div class="d-flex" data-aos="slide-left">
                    <div class="w-100 card shadow-sm">
                        <div class="card-header bg-info border border-info">
                            <h4 class="my-0 font-weight-normal text-center">Web Design</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-center">10$ <small class="text-muted">/
                                    Hour</small></h1>
                            <ul class="list-unstyled mt-3 mb-4 ">
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> 10 users included
                                </li>
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> 2 GB of storage
                                </li>
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> Email support
                                </li>
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> Help center
                                    access</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-success rounded-pill">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item packege-slider-item">
                <div class="d-flex" data-aos="slide-left">
                    <div class="w-100 card shadow-sm">
                        <div class="card-header bg-info border border-info">
                            <h4 class="my-0 font-weight-normal text-center">Web Design</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-center">10$ <small class="text-muted">/
                                    Hour</small></h1>
                            <ul class="list-unstyled mt-3 mb-4 ">
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> 10 users included
                                </li>
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> 2 GB of storage
                                </li>
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> Email support
                                </li>
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> Help center
                                    access</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-success rounded-pill">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-item packege-slider-item">
                <div class="d-flex" data-aos="slide-left">
                    <div class="w-100 card shadow-sm">
                        <div class="card-header bg-info border border-info">
                            <h4 class="my-0 font-weight-normal text-center">Web Design</h4>
                        </div>
                        <div class="card-body">
                            <h1 class="card-title pricing-card-title text-center">10$ <small class="text-muted">/
                                    Hour</small></h1>
                            <ul class="list-unstyled mt-3 mb-4 ">
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> 10 users included
                                </li>
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> 2 GB of storage
                                </li>
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> Email support
                                </li>
                                <li class="text-center m-3 border-bottom"> <i class="fa fa-check"></i> Help center
                                    access</li>
                            </ul>
                            <button type="button" class="btn btn-lg btn-block btn-success rounded-pill">Order Now</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-12 text-center mt-5">
                <div class="btn btn-md btn-success rounded-pill text-center btn_shadow">
                    <a class="text-white" href="{{ route('website.packages') }}">Veiw All packeges</a>
                </div>
            </div>
        </div>


    </div>
    <!-- packeges section  -->

    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <!-- Get Started -->
        <div class="row mt-5">
            <div class="col-md-12" data-aos="slide-left">
                <div class="intro p-md-4 py-md-5 p-2 rounded img"
                    style="background-image: url({{ asset('public/Assets/Frontend') }}/images/bg_1.jpg);">
                    <div class="col-md-6 ftco-animate">
                        <span data-aos="fade-up-left">Get Started</span>
                        <h2>Fill in the brief and get the project estimate</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="#" class="btn btn-primary">Get started</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="degree-left-footer"></div>
</section>
@endsection