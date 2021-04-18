<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Mobile Application HTML5 Template">
        <meta name="copyright" content="MACode ID, https://www.macodeid.com/">
        <title>Mobster - One page app template</title>
        <link rel="shortcut icon" href="{{ asset('/assets/favicon.png')}}" type="image/x-icon">
        <link rel="stylesheet" href="{{ asset('/assets/css/maicons.css')}}">
        <link rel="stylesheet" href="{{ asset('/assets/vendor/animate/animate.css')}}">
        <link rel="stylesheet" href="{{ asset('/assets/vendor/owl-carousel/css/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{ asset('/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{ asset('/assets/css/mobster.css')}}">
        <link rel="stylesheet" href="{{ asset('/css/app.css')}}">
        @yield('head')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light navbar-floating">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="{{asset('/assets/favicon.png')}}" alt="" width="40">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler"
                    aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarToggler">
                    <ul class="navbar-nav ml-lg-5 mt-3 mt-lg-0">
                        <li class="nav-item dropdown active">
                            <a class="nav-link {{Request::path() === '/' ? 'current_page_item' : ''}}" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{Request::is('about') ? 'current_page_item' : ''}}" href="/about">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{Request::path() === '/' ? 'current_page_item' : ''}}" href="/contact">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link  {{Request::path() === '/' ? 'current_page_item' : ''}}" href="/articles">Articles</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div class="row" style="margin-top:8rem">
                @yield('content')
            </div>
        </div>
        
        <script src="{{asset('/assets/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{asset('/assets/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('/assets/vendor/owl-carousel/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('/assets/vendor/wow/wow.min.js')}}"></script>
        <script src="{{asset('/assets/js/mobster.js')}}"></script>
        <script src="{{asset('/js/app.js')}}"></script>
    </body>
</html>