<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Dc Shop</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!-- Styles -->
</head>

<body>
    <header>
        <div class="bg_blue">
            <div class="container">
                <nav class="top_header">
                    <a href="">DC POWER VISA</a>
                    <a href="">ADDITIONAL DC SITES</a>
                </nav>
            </div>
        </div>
            
            <nav class="main_nav">
                <div class="container">
                    <img src="{{asset('img/dc-logo.png')}}" alt="">
                    <a href="{{ route('characters')}}">CHARACTERS</a>
                    <a href="{{ route('comics')}}">COMICS</a>
                    <a href="{{ route('movies')}}">MOVIES</a>
                    <a href="{{ route('tv')}}">TV</a>
                    <a href="{{ route('games')}}">GAMES</a>
                    <a href="{{ route('collectibles')}}">COLLECTIBLES</a>
                    <a href="{{ route('videos')}}">VIDEOS</a>
                    <a href="{{ route('fans')}}">FANS</a>
                    <a href="{{ route('news')}}">NEWS</a>
                    <a href="{{ route('shop')}}">SHOP</a>
                    <input type="text" placeholder="Search">
                </div>
            </nav>
            <div class="jumbotron">
                <div class="container">
                    <img src="{{asset('img/jumbotron.jpg')}}" alt="">
                </div>

            </div>

    </header>
    @yield('content')
    <footer>
            <div class="bg_blue">
                <div class="container shop_section">
                    <a href=""><img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">DIGITAL COMICS</a>
                    <a href=""><img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">DC MERCHANDISE</a>
                    <a href=""><img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">SUBSCRIPTION</a>
                    <a href=""><img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">COMIC SHOP LOCATOR</a>
                    <a href=""><img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="">DC POWER VISA</a>
                </div>
            </div>
    </footer>
</body>

</html>