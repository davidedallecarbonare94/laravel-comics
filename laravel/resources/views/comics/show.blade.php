@extends("layout.app")


@section("content")

<div class="comic">
    <div class="blue_bar"></div>
    <div class="container">
        <div class="img_thumb">
            <img src="{{$comic['thumb']}}" alt="">
        </div>
        <div class="description">
            <h2>{{ $comic['title']}}</h2>
            <div class="price_avail">
                <div class="price">
                    <p>U.S. Price: <strong>{{ $comic['price']}}</strong></p>
                </div>
                <div class="availability">
                    <p class="available">AVAILABLE</p>
                    <span class="border_right"></span>
                    <p>Check Availability</p>
                </div>
            </div>
            <p>{{ $comic['description']}}</p>
        </div>
    </div>
    <div class="grey_specs">
        <div class="container">
            <div class="talent">
                <div class="artist">
                    <p>Art by: </p>
                    @foreach($comic["artists"] as $artist)
                    <a href="">{{ $artist }}</a>
                    @endforeach
                </div>
                <div class="writers">
                    <p>Written by: </p>
                    @foreach($comic["writers"] as $writer)
                    <a href="">{{ $writer }}</a>
                    @endforeach
                </div>

            </div>
            <div class="specs">
                <p>{{ $comic['sale_date']}}</p>
                <p>{{ $comic['series']}}</p>

            </div>

        </div>

    </div>


</div>

@endsection