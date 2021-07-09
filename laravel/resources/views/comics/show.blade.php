
@extends("layout.app")


@section("content")

    <div class="comic">
        <img src="{{$comic['thumb']}}" alt="">
        {{ $comic['series']}}
    </div>
    
@endsection 

