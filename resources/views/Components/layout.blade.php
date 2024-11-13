<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Home')</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main>
        <nav class="navbar">
            <div class="logo">
                <a href="{{ url('/') }}">
                <img class="Logotext" src="{{ Vite::asset('public/Photos/logoT.png') }}" alt="logo">
            </div>
            <div class="menu" id="menu">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('overons') }}">Over ons</a></li>
                    <li><a href="{{ url('zakelijk') }}">Zakelijk</a></li>
                    <li><a href="{{ url('diensten') }}">Service</a></li>
                     @auth
                    <li><a href="{{ url('reperaties') }}">Reparaties <i class="fa fa-caret-down"></i></button></a>
                    <ul class="dropdown">
                    <li><a href="{{ url('windows') }}">Windows</a></li>
                    <li><a href="{{ url('apple') }}">Apple</a></li>
                    </ul>
                    </li>
                    @endauth
                    <li><a href="{{ url('news') }}">IT nieuws</a></li>
                    <li><a href="{{ url('faq') }}">FAQ</a></li>
                    @guest
                    <li><a href="{{ url('login') }}" class="button2">Inloggen</a></li>
                    @endguest
                    @auth
                        <div class="mt-4 text-right text-gray-800 dark:text-black">
                            {{ __('Welkom ' . Auth::user()->name) }}
                        </div>
                    @endauth
                </ul>

            </div>
            <div class="burger" id="burger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </a>
        </nav>


        {{ $slot }}

    </main>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-column">
                <h3>Locatie</h3>
                <p>Zuidbaan 514, 2841 MD<br>Moordrecht</p>
                <a href="#" class="fa fa-instagram"></a>
                <a href="#" class="fa fa-tiktok"></a>
                <a href="#" class="fa fa-whatsapp"></a>


            </div>
            <div class="footer-column">
                <h3>Bel ons</h3>
                <p>Telefoonnummer: +31642624620</p>
                <p>Servicenummer +31630985409 </p>
                <p>Kantoor: +31182820218 </p>

                <br>
            </div>
            <div class="footer-column">
                <h3>Contacteer ons</h3>
                <p>Email: info@uneed-it.nl</p>
                <p>Openingstijden: 10:00 tot 17:30 <br> (ma t/m vr), uitsluitend voor het ophalen van pakketten.</p>
            </div>

        </div>
        <div class="footer-img">
        <img src="{{ Vite::asset('public/Photos/dhl.png') }}" alt="logo">
        <img src="{{ Vite::asset('public/Photos/ups.png') }}" alt="logo">
        <img src="{{ Vite::asset('public/Photos/homerr.png') }}" alt="logo">
        </div>
        <div class="footer-copyright">
            <p>&copy; 2024 Uneed-IT. All rights reserved.</p>
        </div>
    </footer>


</body>
</html>
