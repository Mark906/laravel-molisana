<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <header>
            <div class="logo">
                <img src="{{ asset('images/la-molisana-logo.png') }}" alt="logo-molisana">
            </div>
            <div class="main-menu">
                <nav>
                    <ul>
                        <li>
                            <a href="{{route('home')}}">Home</a>
                        </li>
                        <li>
                            <a href="{{route('prodotti')}}">Prodotti</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </header>
        <main>
            @yield('content')
        </main>
        <footer>

        </footer>
        <script src="{{ asset('js/app.js') }}" charset="utf-8"></script>
    </body>
</html>
