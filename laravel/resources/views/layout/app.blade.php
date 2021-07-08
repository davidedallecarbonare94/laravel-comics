<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Dc Shop</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>
    <body>
        <header>
            <nav>
                <a href="{{ route('characters')}}">CHARACTERS</a>
                <a href="{{ route('comics')}}">COMICS</a>
                <a href="{{ route('movies')}}">MOVIES</a>
                <a href="{{ route('tv')}}">TV</a>
                <a href="{{ route('games')}}">GAMES</a>
                <a href="{{ route('collection')}}">COLLECTIBLES</a>
                <a href="{{ route('videos')}}">VIDEOS</a>
                <a href="{{ route('fans')}}">FANS</a>
                <a href="{{ route('news')}}">NEWS</a>
                <a href="{{ route('shop')}}">SHOP</a>
            </nav>
        
        </header>
    </body>
</html>
