<section class="hero-wrap degree-right js-fullheight">
    <div class="js-fullheight">
        <div class="">
            <div class="home-slider owl-carousel js-fullheight"
                style="background: rgba(222, 222, 222, 0.31); height: 427px;">
                @foreach( $slideritem as $items)
                <div class="container slider-item">
                    <div class="row no-gutters slider-text js-fullheight align-items-center">
                        <div class="col-md-12">

                            <div class="row">
                                <div class="col-md-5">
                                    <div class="">
                                        <h1 class="mb-4 text-dark" data-aos="slide-right">{{ $items->title }}</h1>
                                        <p class="animated bounceInRight text-dark">{{ $items->subtitle }}</p>
                                      
                                        <p class="mb-0 text-dark">
                                            @php $btnurl = Url($items->buttonUrl) @endphp
                                            <a href="{{ $btnurl }}"
                                                class="animated bounceIn btn btn-success rounded-pill btn_shadow py-md-2 py-2 px-3 px-md-3">
                                            {{ $items->buttonName }}
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div>
                                        <img class="img-fluid animated zoomIn"
                                            src="{{ asset('public/storage/slider') }}/{{ $items->sliderbg}}" alt="">
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="float-right">
                                        <h1 class="number text-dark animated bounceInDown"
                                            data-number="{{ $items->counter }}">0</h1>
                                        <p class="text-dark animated bounceInUp">{{ $items->counterText }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>