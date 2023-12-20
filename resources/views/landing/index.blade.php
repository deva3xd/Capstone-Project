@extends('layouts.landing.master')

@section('content')
    <nav class="navbar navbar-expand-lg py-4 navigation header-padding" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="{{ asset('landing/images/logo-flat.png') }}" alt="" width="90px" class="img-fluid">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('Pelamar') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="#tentang_kami">Tentang Kami</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kontak">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('Lowongan') }}">Lowongan</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-button border" href="{{ route('login') }}">Masuk</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="mx-0 nav-link nav-link-button border rounded" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Daftar</a>
                        <div class="dropdown-menu border rounded" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('registerPelamar') }}"><i class="fas fa-user m-1"></i>Pelamar</a>
                            <a class="dropdown-item" href="{{ route('registerPerusahaan') }}"><i class="fas fa-building m-1"></i>Perusahaan</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="banner d-flex align-items-center" id="home">
        <div class="banner-img-part bg-1"></div>
        <div class="container">
            <div class="row ">
                <div class="col-lg-10 col-md-12 col-xl-8">
                    <div class="block">
                        <span class="text-uppercase text-sm letter-spacing ">Solusi anda dalam mencari lowongan pekerjaan
                            IT</span>
                        <h2 class="mb-3 mt-3">Temukan Pekerjaan IT Impianmu Di LokerTI.id</h2>
                        <p class="mb-5">Dapatkan pekerjaan IT yang sesuai dengan skill mu</p>
                        <a href="{{ route('pelamarCariLowongan') }}" class="btn btn-main">cek lowongan<i
                                class="fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about">
        <div class="container">
            <div class="row border-top border-danger">
                <div class="col-lg-4 col-md-6 ">
                    <div class="about-item mb-5 mb-lg-5">
                        <div class="icon">
                            <i class="ti-light-bulb"></i>
                        </div>

                        <div class="content">
                            <h4 class="mt-3 mb-3">Banyak Pilihan Pekerjaan IT Sesuai Skill Kamu</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="about-item mb-5 mb-lg-5">
                        <div class="icon">
                            <i class="ti-panel"></i>
                        </div>
                        <div class="content">
                            <h4 class="mt-3 mb-3">Dengan Banyak Perusahaan Ternama</h4>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="about-item">
                        <div class="icon">
                            <i class="ti-headphone-alt"></i>
                        </div>
                        <div class="content">
                            <h4 class="mt-3 mb-3">Lengkapi data diri kamu dan mulai mencari pekerjaanmu</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-title bg-1" id="tentang_kami">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg text-white">Tentang Kami</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#" class="text-white-50">About Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section md-12">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="heading text-center">
                        <h2>Kami menyediakan platform untuk <br> membantu pelamar <span class="text-color">Dan juga
                                perusahaan dalam mencari calon karyawan</span> dengan skill yang dibutuhkan</h2>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="counter-item counter--style text-center mb-5 mb-lg-0">
                                <i class="fas fa-briefcase"></i>
                                <h2 class="mb-0 mt-3"><span class="counter-stat font-weight-bold">1000</span> +</h2>
                                <p>Lowongan Pekerjaan</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="counter-item counter--style text-center mb-5 mb-lg-0">
                                <i class="fas fa-building"></i>
                                <h2 class="mb-0 mt-3"><span class="counter-stat font-weight-bold">100</span> +</h2>
                                <p>Perusahaan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="section awards bg-light">
        <div class="container">
            <div class="justify-content-center">
                <div class="why-content text-center">
                    <h2 class="mb-4">Mudah dalam mencari lowongan kerja</h2>
                    <p class="mb-5">Lebih dari 100 perusahaan menanti anda</p>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="award-img-block mb-4 mb-lg-0">
                        <div class="award-img">
                            <img src="{{ asset('landing/images/about/Shopee.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="award-img-block mb-4 mb-lg-0">
                        <div class="award-img">
                            <img src="{{ asset('landing/images/about/ruang_guru.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="award-img-block mb-4 mb-lg-0">
                        <div class="award-img">
                            <img src="{{ asset('landing/images/about/Logo_GameLab.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="award-img-block mb-4 mb-lg-0">
                        <div class="award-img">
                            <img src="{{ asset('landing/images/about/alfamart.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="award-img-block mb-4 mb-lg-0">
                        <div class="award-img">
                            <img src="{{ asset('landing/images/about/tokopedia.png') }}" alt=""
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                    <div class="award-img-block">
                        <div class="award-img">
                            <img src="{{ asset('landing/images/about/03.png') }}" alt="" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="page-title bg-1" id="kontak">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg text-white">Hubungi Kami</h1>

                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="#" class="text-white">Home</a></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><a href="#kontak" class="text-white-50">Kontak</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-form-wrap section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h3 class="text-md mb-5">Form Kontak</h3>

                    <div class="row">
                        <div class="col-lg-8">
                            <form id="contact-form" class="contact__form " method="post" action="mail.php">
                                <!-- form message -->
                                <div class="row">
                                    <div class="col-12">
                                        <div class="alert alert-success contact__msg" style="display: none"
                                            role="alert">
                                            Your message was sent successfully.
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Saya Ingin Bertanya ..."
                                        disabled />
                                </div>

                                <div class="form-group">
                                    <input name="subject" id="subject" type="text" class="form-control"
                                        placeholder="Subject">
                                </div>

                                <div class="form-group">
                                    <input name="name" id="name" type="text" class="form-control"
                                        placeholder="Nama">
                                </div>

                                <div class="form-group">
                                    <input name="email" id="email" type="email" class="form-control"
                                        placeholder="Alamat Email">
                                </div>

                                <div class="form-group-2 mb-4">
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="Sampaikan Pesanmu"></textarea>
                                </div>
                                <button class="btn btn-main" name="submit" type="submit">Kirim Pesan</button>
                            </form>
                        </div>

                        <div class="col-lg-4">
                            <div class="short-info mt-5 mt-lg-0">
                                <ul class="list-unstyled">
                                    <li>
                                        <h5>Nomor</h5>
                                        +62-812-3456-7890
                                    </li>
                                    <li>
                                        <h5>Email</h5>
                                        example@gmail.com
                                    </li>
                                    <li>
                                        <h5>Lokasi</h5>
                                        Jalan-jalan, Indonesia
                                    </li>
                                </ul>

                                <ul class="social-icons list-inline mt-5">
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-facebook"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-linkedin"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection
