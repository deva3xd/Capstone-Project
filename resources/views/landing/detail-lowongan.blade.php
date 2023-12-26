@extends('layouts.landing.master')

@section('content')
    <nav class="navbar navbar-expand-lg py-4 navigation header-padding nav-text-white" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="{{ asset('landing/images/logo.png') }}" alt="" width="50px" height="10px" class="img-fluid">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span></button>
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('LandingPage') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('LandingPage') }}#tentang_kami">Tentang Kami</a></li>
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

    <section class="page-title bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg text-white">Detail Lowongan</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><span class="text-white">Lowongan</span></li>
                            <li class="list-inline-item"><span class="text-white">/</span></li>
                            <li class="list-inline-item"><span class="text-white-50">Detail</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <div class="single-blog-item">
                                    <img src="images/blog/3.jpg" alt="" class="img-fluid rounded">
                                    <div class="blog-item-content mt-4">
                                        <h2 class="mt-3 mb-3 text-md text-uppercase" >{{ $loker->kategori }}</h2>
                                        <div class="blog-item-meta mb-5">
                                            <span class="text-muted text-capitalize mr-3"><i class="fa fa-building mr-2"></i>
                                            {{ $loker->perusahaan->nama }}</span>
                                            <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>{{ $loker->posisi }}</span>
                                            <span class="text-muted text-capitalize mr-3"><i class="ti-time mr-1"></i>{{$year. "-" .$month. "-" .$day}}</span>
                                        </div>
                                        <h3>Deskripsi Pekerjaan</h3>
                                        <p>{{ $loker->deskripsi }}</p><br>
                                        <h3>Syarat Pendaftaran</h3>
                                        <li>Minimal Jenjang/Lulusan : {{ $loker->lulusan }}</li>
                                        <li>{{ $loker->syarat }}</li><br>
                                        <h3>Posisi</h3>
                                        <p>{{ $loker->posisi }}</p><br>
                                        <h3>Alamat Perusahaan</h3>
                                        <p>{{ $loker->alamat }}</p>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{route('Lowongan')}}" class="btn btn-small btn-danger">Kembali</a>
                </div>
            </div>
        </div>
    </section>
@endsection
