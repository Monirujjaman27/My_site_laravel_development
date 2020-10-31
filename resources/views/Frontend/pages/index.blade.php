@extends('Layouts.website')
@section('content')
<!-- slider -->
@include('Frontend.inc.slider')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center no-gutters">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <h2 class="mb-2">About Dev MJ</h2>
            </div>
        </div>
        <div class="row">
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
                    <div class="col-md-5 order-md-last ftco-animate d-flex">
                        <div class="img w-100 h-100"
                            style="background-image: url({{ asset('public/storage/about') }}/{{ $about->image}}); min-height:380px;">
                        </div>
                    </div>
                    <div class="col-md-7 ftco-animate fadeInRight ">
                        <div class="text text-md-right">
                            <h3>{{ $about->name }}</h3>
                            <p class="text-justify">{{ $about->description }}.</p>
                            <a href="#" class="btn btn-info">View Details</a>

                            @foreach($resume as $resume)
                            @if($resume->resume)
                            <a href="{{route('downloadResume', ['file'=>$resume->resume]) }}"
                                class="btn btn-success">Download Resume</a>
                            @endif
                            @endforeach
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row mt-5">
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
                <h2 class="">Professional Skill</h2>
            </div>
            <div class="col-md-8 col-sm-12 m-auto ftco-animate">
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
                <h2>Our Works</h2>
            </div>
        </div>
        <!-- Tabs  -->
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">All</a>
            </li>
            @foreach($category as $category)
            @if($category->name)
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile{{ $category->id }}" role="tab"
                    aria-controls="profile" aria-selected="false">{{ $category->name }}</a>
            </li>
            @endif
            @endforeach
        </ul>
        <!-- Tabs end -->
        <!-- TabContent -->
        <div class="tab-content mt-2" id="myTabContent">
            <!-- all portfolio content  -->
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
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
            <!-- all portfolio content  -->
            <!-- categorywais portfolios  -->
            @foreach($catId1 as $catId1)
            if($)
            <div class="tab-pane fade" id='profile1' role="tabpanel" aria-labelledby="profile-tab">
                <div class="col-md-3 d-flex ftco-animate">
                    <div class="blog-entry justify-content-end">
                        <div class="text">
                            <div class="block-20 img imgoverlay"
                                style="background-image:url({{ asset('public/storage/portfolio') }}/{{ $catId1->image }});">
                                <div class="d-flex justify-content-center">
                                    <a href="#" class="btn btn-success previewBtn"><i class="fa fa-eye"></i> Preview
                                        Portfolio</a>
                                </div>
                            </div>
                            <h3 class="heading mb-3"><a href="#">{{ $catId1->title }}</a></h3>
                            <div class="meta mb-3">
                                <div><a href="#">June 01, 2020</a></div>
                            </div>
                            <p>{{ $catId1->description }} <a href="#">Read
                                    More</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <!-- TabContent end -->

    </div>
    <div class="degree-left"></div>
</section>

<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-3">Clients Says About Us?</h2>
            </div>
        </div>
        <div class="row ftco-animate mb-4">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('public/Assets/Frontend') }}/images/person_1.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('public/Assets/Frontend') }}/images/person_2.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('public/Assets/Frontend') }}/images/person_3.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('public/Assets/Frontend') }}/images/person_1.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimony-wrap py-4">
                            <div class="text">
                                <span class="fa fa-quote-left"></span>
                                <p class="mb-4">Far far away, behind the word mountains, far from the countries
                                    Vokalia and Consonantia, there live the blind texts.</p>
                                <div class="d-flex align-items-center">
                                    <div class="user-img"
                                        style="background-image: url({{ asset('public/Assets/Frontend') }}/images/person_2.jpg)">
                                    </div>
                                    <div class="pl-3">
                                        <p class="name">Roger Scott</p>
                                        <span class="position">Marketing Manager</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-12">
                <div class="intro p-md-4 py-md-5 p-2 rounded img"
                    style="background-image: url({{ asset('public/Assets/Frontend') }}/images/bg_1.jpg);">
                    <div class="col-md-6 ftco-animate">
                        <span>Get Started</span>
                        <h2>Fill in the brief and get the project estimate</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                            there live the blind texts.</p>
                        <p><a href="#" class="btn btn-primary">Get started</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <h3 class="heading mb-3"><a href="#">Amplify your blockchain team</a></h3>
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url({{ asset('public/Assets/Frontend') }}/'images/image_1.jpg');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <h3 class="heading mb-3"><a href="#">Amplify your blockchain team</a></h3>
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url({{ asset('public/Assets/Frontend') }}/'images/image_2.jpg');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <h3 class="heading mb-3"><a href="#">Amplify your blockchain team</a></h3>
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url({{ asset('public/Assets/Frontend') }}/'images/image_3.jpg');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <div class="text">
                        <h3 class="heading mb-3"><a href="#">Amplify your blockchain team</a></h3>
                        <a href="blog-single.html" class="block-20 img"
                            style="background-image: url({{ asset('public/Assets/Frontend') }}/'images/image_4.jpg');">
                        </a>
                        <div class="meta mb-3">
                            <div><a href="#">June 01, 2020</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="fa fa-comment"></span> 3</a></div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="degree-left-footer"></div>
</section>
@endsection