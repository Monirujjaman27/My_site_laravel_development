<section class="hero-wrap degree-right js-fullheight">
    <div class="home-slider js-fullheight owl-carousel">

        @foreach( $slideritem as $items )
        <div class="slider-item js-fullheight"
            style="background-image:url({{ asset('public/storage/slider') }}/{{ $items->sliderbg }});">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="absolute">
                            <h4 class="number" data-number="{{ $items->counter }}">0</h4>
                            <p>{{ $items->counterText }}</p>
                        </div>
                        <div class="text">
                            <h1 class="mb-4">{{ $items->title }}</h1>
                            <p>{{ $items->subtitle }}</p>
                            <p class="mb-0"><a href="#" class="btn btn-primary py-md-3 py-2 px-2 px-md-4">Start
                                    Project</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>