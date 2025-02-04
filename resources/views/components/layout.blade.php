<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title }} - NIBBLE</title>
    <link rel="icon" href="{{ url('img/favicon.png') }}" type="image/png">
    <link href="{{ url('css/style.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home')}}"><h1>NIBBLE</h1></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span><i class="fa-solid fa-bars"></i></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarTogglerDemo02">
                <ul class="navbar-nav text-end px-2 mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('menu') }}">Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('news.index') }}">Novedades</a>
                    </li>
                    @guest
                        <li class="nav-item">
                            <a id="register-button" class="nav-link" href="{{ route('auth.register.form') }}">Registrarse</a>
                        </li>
                        <li class="nav-item">
                            <a id="login-button" class="nav-link" href="{{ route('auth.login.form') }}">Iniciar Sesión</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('reservations.create.form') }}">Reservar</a>
                        </li>
                        @if(auth()->user()->isAdmin())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('admin.users.index') }}"><i class="fa-solid fa-users"></i> Administrar Usuarios</a>
                            </li>
                        @endif
                        <li class="nav-item">
                            <form action="{{ route('auth.logout.process') }}" method="post">
                                @csrf
                                <button class="nav-link"><i class="fa-solid fa-arrow-right-from-bracket"></i> Cerrar Sesión</button>
                            </form>
                        </li>
                    @endguest
                </ul>
            </div>
        </div>
    </nav>

    <main>
        <div class="position-absolute bot-0 end-0">
            @if(session()->has('feedback.message'))
                <div class="alert alert-{{ session()->get('feedback.type', 'success') }} alert-dismissible fade show text-center" role="alert">
                    {{ session()->get('feedback.message') }}
                    <button type="button" class="btn-close fs-6" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>

        {{ $slot }}
    </main>

    <footer>
        <div class="footer-info">
            <a class="logo-footer" href="{{ route('home')}}"></a>
            <div class="social">
                <p>Seguinos en nuestras redes:</p>
                <ul>
                    <li><a href="https://www.facebook.com" target="blank"><i class="fa-brands fa-facebook-f"></i></a></li>
                    <li><a href="https://www.instagram.com" target="blank"><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href="https://www.twitter.com" target="blank"><i class="fa-brands fa-x-twitter"></i></a></li>
                </ul>
            </div>
        </div>
        <p>NIBBLE &copy; Christian Olivera</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/48f4d87eaa.js" crossorigin="anonymous"></script>
</body>
</html>
