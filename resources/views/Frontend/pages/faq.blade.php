@extends('Layouts.website')
@section('content')

<section class="hero-wrap hero-wrap-2 degree-right"
    style="background-image: url({{ asset('public/Assets/Frontend') }}/images/about.jpg);"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end">
            <div class="col-md-9 ftco-animate pb-5 mb-5">
                <div class="pb-5 mb-5">
                    <h1 class="text-center text-white font-weight-bold pb-5 mb-5">Faq</h1>
                </div>
                <p class="breadcrumbs"><span class="mr-2">
                        <a href="index.html">Home <i class="fa fa-chevron-right"></i></a>
                    </span> <span>About us <i class="fa fa-chevron-right"></i></span>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h1 class="text-center font-weight-bold">Friquernty Ask Questions</h1>
            </div>
        </div>

        <div class="accordion mb-2" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                        nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                        single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                        wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                        Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                        haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion mb-2" id="accordionExample">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Collapsible Group Item #1
                        </button>
                    </h2>
                </div>

                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                    data-parent="#accordionExample">
                    <div class="card-body">
                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                        squid.
                        3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa
                        nesciunt
                        laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                        single-origin
                        coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore
                        wes
                        anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo.
                        Leggings
                        occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably
                        haven't heard
                        of them accusamus labore sustainable VHS.
                    </div>
                </div>
            </div>
        </div>
    </div>



    </div>
</section>



@endsection