@extends('public_layout.template')
@section('title', 'Fasih Barbershop')
@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection
@section('content')
    {{-- jumbotron --}}
    <section id="home">
        <div class="jumbotron jumbotron-fluid">
            <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
            <div class=" text-jumbotron col-md-5 text-left">
                <h3 class="display-4 font-weight-bold"> Fasih Barbershop</h3>
                <p class="lead"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab voluptate suscipit
                    consequatur officia inventore possimus delectus aliquam autem libero atque.</p>
                <a href="" class="btn btn-primary rounded">Hairstyle</a>
            </div>
        </div>
    </section>
    {{-- jumbotron --}}

    <div class="up">
        <a href="/#home" class="text-dark"><i class="fa fa-arrow-up"></i></a>
    </div>

    {{-- about --}}
    <section id="about" class="bg-light">
        <div class="container" align="center">
            <h2 class="text-center pb-5">About</h2>
            <div class="row">
                <div class="col">
                    <div class="img-box rounded shadow-lg">
                        <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col text-center">
                    <h3 class="about-judul">Fasih BarberShop</h3>
                    <p class="about-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem totam quos
                        ratione tempora fugiat ab repellendus saepe rerum possimus qui, in amet iste nostrum laudantium
                        natus, molestiae quia minus veritatis?</p>
                </div>
            </div>
        </div>
    </section>
    {{-- about --}}

    {{-- hairstyle --}}
    <section id="hairstyle" class="">
        <div class="container">
            <h2 class="text-center pb-4">HairStyle</h2>
            <div class="row">
                <div class="col-md-12">

                    <div class="carousel slide" id="carouselindicator" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselindicator" data-slide="0" class="active"></li>
                            <li data-target="#carouselindicator" data-slide="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- hairstyle --}}

    {{-- testimoni --}}
    <section id="testimoni">
        <div class="container">
            <h2 class="text-center mb-4"> Testimoni</h2>
            <div class="row">
                <div class="col-md-12">

                    <div class="carousel slide" id="carouselindicator" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselindicator" data-slide="0" class="active"></li>
                            <li data-target="#carouselindicator" data-slide="1"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area">
                                                <img src="{{ url('images/banner.jpg') }}" class="img-fluid" alt="">
                                            </div>
                                            <div class="img-text">
                                                <h2>judul</h2>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque,
                                                    accusamus!</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- testimoni --}}

    {{-- footer --}}
    <footer id="contact" class="bg-dark text-white  ">
        <div class="container">
            <h2 class="text-center mb-5">Contact</h2>
            <div class="row">
                <div class="col-md">
                    <ul class="contact">
                        <li><i class="fa fa-clock"></i> 07:00 sd 22:00/li>
                        <li><i class="fa fa-map-marker-alt"></i> JL. kh. moh cholil Gg III e</li>
                        <li><i class="fa fa-at"></i> fasihullisan091966@gmail.com</li>
                        <li><i class="fa fa-phone"></i> +6285336076077</li>
                    </ul>
                </div>
                <div class="col-md">
                    <form action="" method="post">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" id="" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="" placeholder="Subject">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="pesan" id="" placeholder="Tulis Pesan">
                        </div>
                        <button type="submit" class="btn btn-light">Kirim</button>
                    </form>
                </div>
                <div class="col-md-4 d-flex">
                    <iframe style="height: 300px;"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1979.9083008747382!2d112.74183015792103!3d-7.030830936688475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd8058c77d1cda5%3A0x77fe1a76576f6717!2sJl.%20KH%20Moh.%20Kholil%20Gg.%20IIIF%2C%20Kec.%20Bangkalan%2C%20Kabupaten%20Bangkalan%2C%20Jawa%20Timur%2069115!5e0!3m2!1sid!2sid!4v1612056111903!5m2!1sid!2sid"
                        width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                        tabindex="0"></iframe>
                </div>
            </div>

        </div>
        <div class="container text-center">
            <a href="" class=" text-white"> &copy; Copyright 2021-{{ date('Y') }}</a>
        </div>
    </footer>
    {{-- footer --}}
@endsection
