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
                    <h1 class="text-center text-white font-weight-bold pb-5 mb-5">Packages</h1>
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
                <h1 class="text-center font-weight-bold">Coad</h1>
            </div>
        </div>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
                    aria-selected="true">Home</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                    aria-controls="profile" aria-selected="false">Profile</a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                    aria-controls="contact" aria-selected="false">Contact</a>
            </li>
        </ul>
        <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                
            <div class="accordion" id="accordionExample">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Collapsible Group Item #1
                                </button>
                            </h2>
                        </div>

                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
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
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
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
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
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
            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <div class="accordion" id="accordionExample">
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
                    <div class="card">
                        <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                    aria-controls="collapseTwo">
                                    Collapsible Group Item #2
                                </button>
                            </h2>
                        </div>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
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
                    <div class="card">
                        <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button"
                                    data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    Collapsible Group Item #3
                                </button>
                            </h2>
                        </div>
                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
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
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div>
        </div>




    </div>
</section>



@endsection