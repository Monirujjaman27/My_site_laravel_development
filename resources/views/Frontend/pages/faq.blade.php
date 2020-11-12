@extends('Layouts.website')
@section('content')


<section class="ftco-section">

    <div class="container">

        <div class="row">
            <div class="col-12">
                <h1 class="text-center font-weight-bold mb-4">Friquernty Ask Questions</h1>
            </div>
        </div>
        @php $i = 1 @endphp
        @foreach($faq as $faq)
        <div class="accordion mb-2" id="accordionExample{{ $faq->id }}">
            <div class="card border-info">
                <div class="card-header bg-info" id="headingOne{{ $faq->id }}">
                    <h1 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark text-decoration-none font-weight-bold"
                            type="button" data-toggle="collapse" data-target="#collapseOne{{ $faq->id }}"
                            aria-expanded="true" aria-controls="collapseOne{{ $faq->id }}">
                            <span class="bg-white rounded p-1">#{{ $i}} {{ $faq->title }}</span>
                            <div class="float-right">
                                <i class="fa fa-caret-down d-flex"> </i>
                            </div>
                        </button>
                    </h1>
                </div>

                <div id="collapseOne{{ $faq->id }}" class="collapse" aria-labelledby="headingOne{{ $faq->id }}"
                    data-parent="#accordionExample{{ $faq->id }}">
                    <div class="card-body">
                        {{ $faq->description }}
                    </div>
                </div>
            </div>
        </div>
        @php $i++ @endphp
        @endforeach
    </div>



    </div>
</section>



@endsection