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
                <h2>Talent</h2>
                <div class="artist">
                    <div class="left">
                        <p>Art by: </p>
                    </div>
                    <div class="right">
                        @foreach($comic["artists"] as $artist)
                        <a href="">{{ $artist }}</a>
                        @endforeach
                    </div>
                </div>
                <div class="writers">
                    <div class="left">
                        <p>Written by: </p>
                    </div>
                    <div class="right">
                        @foreach($comic["writers"] as $writer)
                        <a href="">{{ $writer }}</a>
                        @endforeach
                    </div>
                </div>

            </div>
            <div class="specs">
                <h2>Specs</h2>
                <p><strong>Series: </strong><a href="">{{ $comic['series']}}</a></p>
                <p><strong>U.S. Price: </strong>{{ $comic['price']}}</p>
                <p><strong>On Sale Date: </strong>{{ $comic['sale_date']}}</p>
            </div>

        </div>

    </div>


</div>

@endsection