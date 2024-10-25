<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="stylesheet" href="/css/style.css">
    <link id="dynamic-favicon" rel="shortcut icon" href="{{ asset('favicons/default-favicon.ico') }}">
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var favicons = [
                '{{ asset('favicons/favicon1.ico') }}',
                '{{ asset('favicons/favicon2.ico') }}',
                '{{ asset('favicons/favicon3.ico') }}',
                '{{ asset('favicons/favicon4.ico') }}',
                '{{ asset('favicons/favicon5.ico') }}',
                '{{ asset('favicons/favicon6.ico') }}',
                '{{ asset('favicons/favicon7.ico') }}',
                '{{ asset('favicons/favicon8.ico') }}',
                '{{ asset('favicons/favicon9.ico') }}'
            ];

            var faviconIndex = 0;

            function changeFavicon() {
                var link = document.getElementById('dynamic-favicon');
                link.href = favicons[faviconIndex];
                faviconIndex = (faviconIndex + 1) % favicons.length; // Ciclar entre os favicons
            }

            // Muda o favicon ao carregar a página
            changeFavicon();
        });
    </script>
</head>

<body>
    <header class="d-flex justify-content-between align-items-center py-3 mb-4 border-bottom">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="collapse navbar-collapse" id="navbar">
                <a href="/" class="navbar-brand">
                    <img src="/img/jjk-logo.png" alt="Logo Jujutsu Kaisen">
                </a>

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="/" class="nav-link">Início</a>
                    </li>
                    <li class="nav-item">
                        <a href="/events/create" class="nav-link">Criar</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a href="/dashboard" class="nav-link">Meus mangás</a>
                        </li>
                        <li class="nav-item">
                            <form action="/logout" method="POST">
                                @csrf
                                <a href="/logout" class="nav-link"
                                    onclick="event.preventDefault(); this.closest('form').submit();">Sair</a>
                            </form>
                        </li>
                    @endauth
                    @guest
                        <li class="nav-item">
                            <a href="/login" class="nav-link">Entrar</a>
                        </li>
                        <li class="nav-item">
                            <a href="/register" class="nav-link">Cadastrar</a>
                        </li>
                    @endguest
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container-fluid">
            <div class="row">
                @if (session('msg'))
                    <p class="msg">{{ session('msg') }}</p>
                @elseif (session('error'))
                    <p class="error">{{ session('error') }}</p>
                @endif
                @yield('content')
            </div>
        </div>
    </main>
    <div class="footer-basic">
        <footer>
            <p class="copyright">marcosscruz &copy; 2024</p>
        </footer>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
