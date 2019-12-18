<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Quinten Bakker">
    <meta name="description" content="De stage opdrachten van de Jedi Masters bij Lyfter">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Challenges') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.ico">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm font-lyfter">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img class="link-scale" src="/img/brand-logo.png" alt="Lyfter" id="brand-logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link link-scale" href="{{ url('/challenge') }}">Challenges</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link link-scale" href="{{ url('/contact') }}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <footer id="site-footer">

        <div id="footer-main">
            <div class="container">
                <div id="footer-row" class="row site-footer">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="footer-text ">
                            <p class="p1"><img class="img-responsive mb-md alignnone" src="/img/brand-logo.png" alt="Lyfter" width="158" height="34"></p>
                            <p class="p1">Dit is voor Lyfter. Hun leveren complete websites van een uitstekende kwaliteit tegen een lage prijs.</p>
                            <p class="p1">Ik doe mijn best kwaliteit toegankelijk te maken.</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="footer-sitemap ">
                            <h4>Sitemap</h4>
                            <ul>
                                <li><a href="/" target="_new">Home</a></li>
                                <li><a href="/challenge" target="_new">Challenges</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="footer-sitemap">
                            <h4>Meer informatie?</h4>
                            <ul>
                                <li><a href="/contact" target="_new">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="footer-contact ">
                            <h4>Lyfter</h4>
                            <ul>
                                <li class="d-flex flex-row ">
                                    <ion-icon class="pt-1" name="home"></ion-icon>
                                    <div class="ml-2">
                                        <span class="d-block">Zuideinde 34G</span>
                                        <span class="d-block">4671BK Dinteloord</span>
                                    </div>
                                </li>
                                <li class="d-flex flex-row mt-2">
                                    <ion-icon class="pt-1" name="phone-portrait"></ion-icon>
                                    <span class="d-block ml-2">0167-541377</span>
                                </li>
                                <li class="d-flex flex-row mt-2">
                                    <ion-icon class="pt-1" name="mail"></ion-icon>
                                    <span class="d-block ml-2">
                                        <a href="mailto:mail@lyfter.nl">mail@lyfter.nl</a>
                                    </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div id="footer-row" class="row site-footer">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="menu-copyright-container">
                            <ul id="menu-copyright" class="menu">
                                <li class="copyright"><span>© 2019 Lyfter</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>