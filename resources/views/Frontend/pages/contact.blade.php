@extends('Layouts.website')
@section('content')

<section class="hero-wrap hero-wrap-2 degree-right" style="background-image: url({{ asset('public/Assets/Frontend') }}/images/bg_2.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
            <div class="col-md-9 ftco-animate pb-5 mb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i
                                class="fa fa-chevron-right"></i></a></span> <span>Contact <i
                            class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-3 bread">Contact</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section contact-section ftco-no-pb" id="contact-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Contact us</span>
                <h2 class="mb-4">Have a Project?</h2>
                <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
            </div>
        </div>

        <div class="row block-9">
            <div class="col-md-8">
                <form action="#" class="p-4 p-md-5 contact-form">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Email">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="" id="" cols="30" rows="7" class="form-control"
                                    placeholder="Message"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
                            </div>
                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-4 d-flex pl-md-5">
                <div class="row">
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-map-marker"></span>
                        </div>
                        <div class="text">
                            <p><span>Address:</span>
                                @if(isset($address)) {{ $address }} @else {{ 'Dinajpur, Rongpur, Bangladesh' }}
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-phone"></span>
                        </div>
                        <div class="text">
                            <p><span>Phone:</span> <a
                                    href="tel:@if(isset($phone)) {{ $phone }} @else {{ 'mdmunirujjaman045@gmail.com' }} @endif">
                                    @if(isset($phone)) {{ $phone }}
                                    @else {{ '+880151848865' }}
                                    @endif
                                </a></p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-paper-plane"></span>
                        </div>
                        <div class="text">
                            <p><span>Email:</span>
                                <a
                                    href="mailto:@if(isset($businessmail)) {{ $businessmail }} @else {{ 'mdmunirujjaman045@gmail.com' }} @endif">
                                    @if(isset($businessmail))
                                    {{ $businessmail }} @else
                                    {{ 'mdmunirujjaman045@gmail.com' }}
                                    @endif
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-github"></span>
                        </div>
                        <div class="text">
                            <p><span>Github</span>
                                <a target="blank" href="https://@if(isset($github)){{ $github }}@else {{ 'https://www.github.com' }}
                                    @endif">
                                    @if(isset($github)) {{ $github }}
                                    @else
                                    {{ 'Dinajpur, Rongpur, Bangladesh' }}
                                    @endif
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="dbox w-100 d-flex ftco-animate">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-linkedin"></span>
                        </div>
                        <div class="text">
                            <p><span>Linkdin</span>
                                <a target="blank" href="https://@if(isset($linkdin)){{ $linkdin }}@else {{ 'https://www.linkdin.com' }}
                                    @endif">
                                    @if(isset($linkdin)) {{ $linkdin }}
                                    @else
                                    {{ 'Dinajpur, Rongpur, Bangladesh' }}
                                    @endif
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div id="map" class="map"></div>
            </div>
        </div>
    </div>
</section>
@endsection