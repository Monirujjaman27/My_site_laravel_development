<footer class="ftco-footer ftco-section">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">@if(isset($site_title)) {{ $site_title }} @else
                        {{ 'Thanks for visiting' }} @endif</h2>
                    <p>@if(isset($site_about)) {{ $site_about }} @else {{ 'Hi, This is md. Munirujjaman profile
                            
                        ' }} @endif.</p>
                    <ul class="ftco-footer-social list-unstyled mt-5">
                        <li class="ftco-animate"><a target="blank" href="{{ $twitter }}"><span
                                    class="fa fa-twitter"></span></a></li>
                        <li class="ftco-animate"><a target="blank" href="{{ $facebook }}"><span
                                    class="fa fa-facebook"></span></a></li>
                        <li class="ftco-animate"><a target="blank" href="{{ $github }}"><span
                                    class="fa fa-github"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4 ml-md-4">
                    <h2 class="ftco-heading-2">Community</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('website.projects') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Projects</a></li>
                        <li><a href="{{ route('website.code') }}"><span class="fa fa-chevron-right mr-2"></span>code</a>
                        </li>
                        <li><a href="{{ route('website.projects') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Team</a></li>
                        <li><a href="{{ route('website.projects') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Reviews</a></li>
                        <li><a href="{{ route('website.faq') }}"><span class="fa fa-chevron-right mr-2"></span>FAQs</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Pages</h2>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('website.index') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Home</a></li>
                        <li><a href="{{ route('website.about') }}"><span class="fa fa-chevron-right mr-2"></span>About
                                Us</a></li>
                        <li><a href="{{ route('website.contact') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>Contact</a></li>
                        <li><a href="{{ route('website.packages') }}"><span
                                    class="fa fa-chevron-right mr-2"></span>packages</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Current Address</h2>
                    <div class="block-23 mb-3">
                        <ul>
                            <li><span class="icon fa fa-map"></span><span class="text">
                                    <!-- 203 Fake St. Mountain View, San Francisco, California, USA -->
                                    @if(isset($address)) {{ $address }} @else {{ 'Dinajpur, Rongpur, Bangladesh' }}
                                    @endif
                                </span></li>
                            <li><a href="#"><span class="icon fa fa-phone"></span><span class="text">
                                        @if(isset($phone)) {{ $phone }} @else {{ '+8801518488865' }}
                                        @endif
                                    </span></a></li>
                            <li>
                                <a href="#"><span class="icon fa fa-envelope pr-4"></span>
                                    <span class="text">
                                        @if(isset($businessmail)) {{ $businessmail }} @else
                                        {{ 'mdmunirujjaman045@gmail.com' }}
                                        @endif
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p> Copyright &copy; 2020 All rights reserved | Developed by
                    <i class="fa fa-heart text-success" aria-hidden="true"></i> Md. MUnirujjaman
                </p>
            </div>
        </div>
    </div>
</footer>