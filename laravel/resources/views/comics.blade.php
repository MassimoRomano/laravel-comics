@extends('layouts.app')

@section('content')

<section class="jumbo">
    <div class="container">
        <div class="tag-series">
            CURRENT SERIES
        </div>
    </div>
</section>


@foreach ($fumetti as $key => $fumettiType )
<section class="py-4">
    <div class="container">
        <h2 class="text-center text-light text-uppercase pb-5">
            {{$key}}
        </h2>
        <div class="row g-4">
            @foreach ($fumettiType as $fumetto )
            <div class="col-2">
                <img style="height: 250px;" class="card-img-top pb-3 " src="{{$fumetto['thumb']}}" alt="{{$fumetto['title']}}">
                <div class="card-body text-light text-uppercase ">
                    <a href="{{route('comic', ['single' => $key])}}">{{$fumetto['title']}}</a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            <input class="button-load" type="button" value="LOAD MORE">
        </div>
    </div>
</section>
@endforeach




@endsection