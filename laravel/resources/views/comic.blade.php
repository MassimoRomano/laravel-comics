@extends('layouts.app')

@section('content')
    <section id="single">
        <section class="jumbo">
            <div class="container">
            </div>
        </section>
        <div class="container">
            <div class="row py-4 justify-content-center align-items-center">
                <div class="col-8">
                    <div class="d-flex flex-column h-100 py-2 justify-content-around">
                        <div>
                            <p class="text-light" style="text-transform: uppercase">{{ $selectes['type'] }}</p>
                            <h3 class="text-light">{{ $selectes['title'] }}</h3>
                            <p class="text-light">{{ $selectes['description'] }}</p>
                        </div>
                        <div>
                            <h5 class="text-light">Prezzo: {{ $selectes['price'] }}</h5>
                        </div>
                    </div>
                    <div class="d-flex justify-content-start my-4">
                        <a href="" class="btn btn-success me-2 rounded-pill" role="button"
                            style="width: 200px; font-weight: bold;">SHOP</a>
                        <a href="/comics" class="btn btn-primary mx-2 rounded-pill" role="button"
                            style="width: 200px; font-weight: bold;">RETURN COMICS</a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card border-danger p-1 bg-dark my-5 mx-5 id="single_comic">
                        <img src="{{ $selectes['thumb'] }}" alt="">
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
@endsection
