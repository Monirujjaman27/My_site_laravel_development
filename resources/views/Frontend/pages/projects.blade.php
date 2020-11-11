@extends('Layouts.website')
@section('content')

<section class="hero-wrap hero-wrap-2"
    style="background-image: url({{ asset('public/Assets/Frontend') }}/images/about.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
            <div class="col-md-9 ftco-animate pb-5 mb-5">
                <div class="pb-5 mb-5">
                    <h1 class="text-center text-white font-weight-bold pb-5 mb-5">Works</h1>
                </div>
                <p class="breadcrumbs"><span class="mr-2">
                        <a href="index.html">Home <i class="fa fa-chevron-right"></i></a>
                    </span> <span>Works<i class="fa fa-chevron-right"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>
<section class="pb-5 mt-5">
    <div class="row justify-content-center no-gutters">
        <div class="col-md-12 heading-section text-center ftco-animate mb-5 fadeInUp ftco-animated">
            <h2 class="mb-2">All Works</h2>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row no-gutters">
            <div class="card pr-3 py-3 card-hover bg-secondary mb-2">
                <div class="col-md-12 portfolio-wrap mt-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5 img"
                            style="background-image: url({{ asset('public/Assets/Frontend') }}/images/work-1.jpg);">
                        </div>
                        <div class="col-md-7">
                            <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate fadeInUp ftco-animated">
                                <div class="px-4 px-lg-4">
                                    <div class="desc">
                                        <div class="top">
                                            <span class="subheading">Web Design</span>
                                            <h2 class="mb-2"><a href="work.html">Cassette tape</a></h2>
                                        </div>
                                        <div class="absolute">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and
                                                Consonantia, there live the blind texts.</p>
                                            <div class="icon d-flex align-items-center mb-4">
                                                <div class="img" style="background-image: url(images/person_1.jpg);">
                                                </div>
                                                <div class="position pl-3">
                                                    <h4 class="mb-0">Jamie Jonson</h4>
                                                    <span>avo.com</span>
                                                </div>
                                            </div>
                                            <p><a href="#" class="custom-btn btn-outline-primary">View Portfolio</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card pr-3 py-3 card-hover bg-secondary mb-2">
                <div class="col-md-12 portfolio-wrap mt-0">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-5 img"
                            style="background-image: url({{ asset('public/Assets/Frontend') }}/images/work-1.jpg);">
                        </div>
                        <div class="col-md-7">
                            <div class="text pt-5 pl-0 pl-lg-5 pl-md-4 ftco-animate fadeInUp ftco-animated">
                                <div class="px-4 px-lg-4">
                                    <div class="desc">
                                        <div class="top">
                                            <span class="subheading">Web Design</span>
                                            <h2 class="mb-2"><a href="work.html">Cassette tape</a></h2>
                                        </div>
                                        <div class="absolute">
                                            <p>Far far away, behind the word mountains, far from the countries Vokalia
                                                and
                                                Consonantia, there live the blind texts.</p>
                                            <div class="icon d-flex align-items-center mb-4">
                                                <div class="img" style="background-image: url(images/person_1.jpg);">
                                                </div>
                                                <div class="position pl-3">
                                                    <h4 class="mb-0">Jamie Jonson</h4>
                                                    <span>avo.com</span>
                                                </div>
                                            </div>
                                            <p><a href="#" class="custom-btn btn-outline-info">View Portfolio</a></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@endsection