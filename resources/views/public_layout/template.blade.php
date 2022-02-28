<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fasih BarberShop</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome5/css/all.css') }}">
    @yield('css')
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-trasparent">
        <div class="container">
            <a href="" class="navbar-brand">Fasih BarberShop</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navmenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navmenu">
                <ul class="navbar-nav ml-auto">
                    <li class="navbar-item">
                        <a href="/#home" class="nav-link">Home</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/#about" class="nav-link">About</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/#hairstyle" class="nav-link">HairStyle</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/#testimoni" class="nav-link">Testimoni</a>
                    </li>
                    <li class="navbar-item">
                        <a href="/#contact" class="nav-link">kontak</a>
                    </li>
                    <li class="navbar-item d-flex">
                        <a href="" class="nav-link">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a href="" class="nav-link">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="" class="nav-link">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="{{ asset('bootstrap/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
