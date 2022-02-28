<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin BarberShop</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fontawesome5/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admin.css') }}">
    @yield('css')
</head>

<body>
    <div class="wrapper bg-light ">
        <div class="sidebar">
            <div class="text">Admin Barbershop</div>
            <ul>
                <li>
                    <a href="/dashboard"><i class="fa fa-home"></i> Dashboard</a>
                </li>
                {{-- admin --}}
                @if (session('is_admin') == 1)
                    <li>
                        <a href="#" class="btn-master"><i class="fa fa-users-cog"></i> Master Data <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="master-show">
                            <li>
                                <a href="/karyawan">Add Karyawan</a>
                            </li>
                            <li>
                                <a href="/shift">Add Shift</a>
                            </li>
                            <li>
                                <a href="/hairstyle">Add Hairstyle</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="btn-transaksi"><i class="fa fa-shopping-cart"></i> Transaksi <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="transaksi-show">
                            <li>
                                <a href="/transaksi">Potong Rambut</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="btn-laporan"><i class="fa fa-flag"></i> Laporan <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="laporan-show">
                            <li>
                                <a href="/laporan/karyawan">Laporan Karyawan</a>
                            </li>
                            <li>
                                <a href="/laporan/transaksi">Laporan Transaksi</a>
                            </li>
                        </ul>
                    </li>
                    {{-- operator --}}
                @elseif(session('is_admin') == 2)
                    <li>
                        <a href="#" class="btn-master"><i class="fa fa-users-cog"></i> Master Data <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="master-show">
                            <li>
                                <a href="/karyawan">Add Karyawan</a>
                            </li>
                            <li>
                                <a href="/shift">Add Shift</a>
                            </li>
                            <li>
                                <a href="/hairstyle">Add Hairstyle</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="btn-laporan"><i class="fa fa-flag"></i> Laporan <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="laporan-show">
                            <li>
                                <a href="/laporan/karyawan">Laporan Karyawan</a>
                            </li>
                            <li>
                                <a href="/laporan/transaksi">Laporan Transaksi</a>
                            </li>
                        </ul>
                    </li>
                    {{-- kasir --}}
                @elseif(session('is_admin') == 3)
                    <li>
                        <a href="#" class="btn-transaksi"><i class="fa fa-shopping-cart"></i> Transaksi <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="transaksi-show">
                            <li>
                                <a href="/transaksi">Potong Rambut</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="btn-laporan"><i class="fa fa-flag"></i> Laporan <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="laporan-show">
                            <li>
                                <a href="/laporan/karyawan">Laporan Karyawan</a>
                            </li>
                            <li>
                                <a href="/laporan/transaksi">Laporan Transaksi</a>
                            </li>
                        </ul>
                    </li>
                @elseif(session('is_admin') == 4)
                    <li>
                        <a href="#" class="btn-laporan"><i class="fa fa-flag"></i> Laporan <span
                                class="fa fa-caret-down"></span></a>
                        <ul class="laporan-show">
                            <li>
                                <a href="/laporan/karyawan">Laporan Karyawan</a>
                            </li>
                            <li>
                                <a href="/laporan/transaksi">Laporan Transaksi</a>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        <div class="content" style="">
            <nav class="navbar navbar-expand-lg navbar-light bg-white shadow">
                <a href="#" class="navbar-brand"><i class="fa fa-bars"></i></a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navmenu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu">
                    <ul class="navbar-nav ml-auto">
                        <li class="navbar-item">
                            <a class="nav-link text-capitalize">{{ session('name') }}</a>
                        </li>
                        <li class="navbar-item">
                            <a href="{{ route('logout') }}" class="nav-link text-danger">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="container" style="min-height: 100vh">
                @yield('content')
            </div>
        </div>

    </div>



    <script src="{{ asset('bootstrap/js/jquery-3.5.1.slim.min.js') }}"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        $('.navbar-brand').click(function() {
            $('.content').toggleClass("resize");
            $('.sidebar').toggleClass("hide");
        });
        $('.btn-master').click(function() {
            $('.sidebar ul .master-show').toggleClass("show")
        })
        $('.btn-transaksi').click(function() {
            $('.sidebar ul .transaksi-show').toggleClass("show")
        })
        $('.btn-laporan').click(function() {
            $('.sidebar ul .laporan-show').toggleClass("show")
        })

    </script>
    @yield('jquery')
</body>

</html>
