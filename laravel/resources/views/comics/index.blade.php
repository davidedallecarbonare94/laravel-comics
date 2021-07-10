@extends("layout.app")


@section("content")

<div class="comics">
    <h2 class="current_series">
        CURRENT SERIES
    </h2>
    <div class="container">
        @foreach($comics as $index => $comic)
        <div class="card">
            <div class="card_img">
                <a href="{{route('comic', ['id' => $index])}}">
                <img src="{{$comic['thumb']}}" alt="">
            </div>
            <div class="card_text">
                <p>{{ $comic['series']}}</p>
            </div>
            </a>
        </div>
        @endforeach
    </div>
</div>



@endsection