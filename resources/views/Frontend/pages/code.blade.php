@extends('Layouts.website')
@section('content')
<section class="ftco-section">

    <div class="container-fulid m-md-4 m-sm-0">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center font-weight-bold">Coad</h1>
            </div>
        </div>

        @php $i = 1 @endphp
        @foreach($code as $code)
        <div class="accordion mb-2" id="accordionExample{{ $code->id }}">
            <div class="card border-info">
                <div class="card-header bg-info" id="headingOne{{ $code->id }}">
                    <h1 class="mb-0">
                        <button class="btn btn-link btn-block text-left text-dark text-decoration-none font-weight-bold"
                            type="button" data-toggle="collapse" data-target="#collapseOne{{ $code->id }}"
                            aria-expanded="true" aria-controls="collapseOne{{ $code->id }}">
                            <span class="bg-white rounded p-1">#{{ $i}} {{ $code->title }}</span>
                            <div class="float-right">
                                <i class="fa fa-caret-down d-flex"> </i>
                            </div>
                        </button>
                    </h1>
                </div>

                <div id="collapseOne{{ $code->id }}" class="collapse" aria-labelledby="headingOne{{ $code->id }}"
                    data-parent="#accordionExample{{ $code->id }}">
                    <div class="card-body">
                        {{ $code->description }}
                    </div>
                </div>
            </div>
        </div>
        @php $i++ @endphp
        @endforeach




    </div>
</section>
@endsection