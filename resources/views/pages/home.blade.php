@extends('layout.app')

@section('main-content')
    <section class="comics">
        <div class="container">
            <div class="row">
                @foreach ($fumetti as $fumetto)

                    <div class="col-2">
                        <div class="card">
                            <img src="{{ $fumetto['thumb'] }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{ $fumetto['series']}}
                                </h5>
                            </div>
                        </div>
                    </div>

                @endforeach

            </div>
        </div>
    </section>
@endsection