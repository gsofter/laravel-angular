<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" ng-app="App1">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Maroc-car') }}</title>

    <!-- Scripts -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
    

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/carforyou.css')}}">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    
    
    <script type="text/javascript" ></script>
    @yield('css')

    <style type="text/css">
.dropdown-menu {
    position: absolute;
    top: 100%;
    left: 0;
    z-index: 1000;
    display: none;
    float: left;
    min-width: 10rem;
    padding: .5rem 0;
    margin: .125rem 0 0;
    font-size: 1rem;
    color: #212529;
    text-align: left;
    list-style: none;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.15);
    border-radius: .25rem;
}

li .nav-item{
    list-style: none;
}
</style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-light px-20 py-20 border-grey-1 border-b">
            
            <a class="navbar-brand" href="/">
                <img src="{{ asset('assets/img/logo_small_light.png')}}" alt="">
            </a>
            <ul class="navbar-nav mr-auto">

            </ul>
           
             @guest
              <ul class="navbar-nav" style="flex-direction: row; float: left;">
                <li class="nav-item" style="list-style: none;">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                    <li class="nav-item" style="margin-left: 30px; list-style: none;">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
              <ul>
            @else
            <li class="nav-item" style="list-style: none;"> <a href="/add_car" style=""> Add car</a> </li>
            <li class="nav-item dropdown" style="list-style: none; margin-right: 70px;">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown07" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> 
                {{ Auth::user()->firstname }}</a>
              <div class="dropdown-menu" aria-labelledby="dropdown07">
                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
              </div>
            </li>
            @endguest        
        </nav>



        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer class="footer-container flex-no-shrink"><div class="flex md:pr-20 text-sm pb-16 md:pb-0 w-250 md:w-400 flex-wrap self-center justify-center leading-md"><a class="text-grey-3 pr-12 block" href="/de/content/general-terms-and-conditions">AGB</a><a class="text-grey-3 pr-12 block" href="/de/content/privacy-statement">Datenschutz</a><a class="text-grey-3 pr-12 block" href="/de/content/impressum">Impressum</a><a class="text-grey-3 pr-12 block" href="/de/content/faq">FAQ</a></div><p class="flex-grow text-sm text-center md:text-left md:pb-0 text-white font-bold">MAROC CAR<span class="text-grey-3 block md:inline-block pl-5 leading-md leading-sm font-regular">©2019 All rights reserved</span></p></footer>
    @yield('scripts')
</body>
</html>
