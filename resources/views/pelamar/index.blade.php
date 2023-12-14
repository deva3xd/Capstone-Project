@extends('layouts.landing.master')

@section('content')
    <nav class="navbar navbar-expand-lg py-4 navigation header-padding " id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.html">
                <img src="{{ asset('landing/images/logo-flat.png') }}" alt="" width="90px" class="img-fluid">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span></button>
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('Pelamar') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('PelamarCaripekerjaan') }}">Lowongan</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('PelamarCariperusahaan') }}">Perusahaan</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link nav-link-button border rounded" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">User</a>
                        <div class="dropdown-menu border rounded" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('Profilindex') }}"><i
                                    class="fas fa-building m-1"></i>Profil</a>
                            <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt m-1"></i>Keluar</a>
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
                            <a href="about.html" target="_blank" class="btn btn-main">Learn more<i class="fa fa-angle-right ml-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 ">
                    <div class="about-item mb-5 mb-lg-5">
                        <div class="icon">
                            <i class="ti-light-bulb"></i>
                        </div>
                        <div class="content">
                            <h4 class="mt-3 mb-3">Banyak Pilihan Pekerjaan IT Sesuai Skill Kamu</h4>
                            <a href="#"> Read More </a>
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
                            <a href="#"> Read More </a>
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
                            <a href="#"> Read More </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
