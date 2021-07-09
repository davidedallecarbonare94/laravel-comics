@extends("layout.app")


@section("content")

@foreach($comics as $index => $comic)
<div class="comics">
    <div class="container">
            <div class="card">
                <a href="{{route('comic', ['id' => $index])}}">
        
                    <img src="{{$comic['thumb']}}" alt="">
                    {{ $comic['series']}}
                </a>
    
            </div>
        </div>
    </div>

@endforeach

@endsection 