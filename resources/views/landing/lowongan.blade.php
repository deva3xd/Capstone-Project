@extends('layouts.landing.master')

@section('content')
    <nav class="navbar navbar-expand-lg py-4 navigation header-padding nav-text-white" id="navbar">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="{{ asset('landing/images/logo.png') }}" alt="" width="50px" height="10px" class="img-fluid">
            </a>
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09"
                aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse text-center" id="navbarsExample09">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('LandingPage') }}">Home <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('LandingPage') }}#tentang_kami">Tentang Kami</a>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('LandingPage') }}#kontak">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('Lowongan') }}">Lowongan</a></li>
                    <li class="nav-item"><a class="nav-link nav-link-button border" href="{{ route('login') }}">Masuk</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="mx-0 nav-link nav-link-button border rounded" href="#" id="navbarDropdown"
                            role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Daftar
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('registerPelamar') }}"><i
                                    class="fas fa-user m-1"></i>Pelamar</a>
                            <a class="dropdown-item" href="{{ route('registerPerusahaan') }}"><i
                                    class="fas fa-building m-1"></i>Perusahaan</a>
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
                        <h1 class="text-capitalize mb-5 text-white text-lg">Lowongan</h1>
                        <ul class="list-inline breadcumb-nav">
                            <li class="list-inline-item"><a href="#" class="text-white">Lowongan</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @foreach ($lokers as $loker)
                            <div class="col-lg-12 col-md-6 mb-3 px-0 border">
                                <div class="blog-item p-1 mr-1">
                                    <div class="blog-thumb mr-0 py-2 d-flex justify-content-center">
                                        <img  src="{{ asset('landing/images/blog/blog-5.jpg') }}" alt="logo"
                                            class="img-fluid rounded" width="180">
                                    </div>
                                    <div class="blog-item-content pb-2">
                                        <h3 class="mt-3 mb-3 text-uppercase">{{ $loker->kategori }}</h3>
                                        <div class="blog-item-meta mb-3">
                                            <span class="text-muted text-capitalize mr-3"><a class="text-dark mr-1">
                                                </a>{{ $loker->kategori }}</span><br />
                                            <span class="text-muted text-capitalize mr-3"><a class="text-dark mr-1">
                                                </a>{{ $loker->posisi }}</span><br />
                                            <span class="text-muted text-capitalize mr-3"><a class="text-dark mr-1">
                                                </a>{{ $loker->alamat }}</span><br />
                                        </div>
                                        <a href="{{ route('DetailLowongan', ['id' => $loker->id]) }}"
                                            class="btn btn-small btn-main">Info Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-widget search  mb-3 ">
                        <h5>Cari Perusahaan</h5>
                        <label><input type="search" class="form-control form-control-sm" placeholder="nama perusahaan"
                                id="search" name="search" onfocus="this.value=''"></label>
                    </div>
                    <div class="sidebar-widget category mb-3">
                        <h5 class="mb-4">Kategori</h5>
                        <ul class="list-unstyled">
                            <li class="align-items-center">
                                <i class="text-dark">Data Scientist</i>
                                <span>{{ $data }}</span>
                            </li>
                            <li class="align-items-center">
                                <i class="text-dark">Game Developer</i>
                                <span>{{ $game }}</span>
                            </li>
                            <li class="align-items-center">
                                <i class="text-dark">It Support</i>
                                <span>{{ $it }}</span>
                            </li>
                            <li class="align-items-center">
                                <i class="text-dark">Mobile Developer</i>
                                <span>{{ $mobile }}</span>
                            </li>
                            <li class="align-items-center">
                                <i class="text-dark">Security Engineer</i>
                                <span>{{ $security }}</span>
                            </li>
                            <li class="align-items-center">
                                <i class="text-dark">Software Developer</i>
                                <span>{{ $software }}</span>
                            </li>
                            <li class="align-items-center">
                                <i class="text-dark">UI/UX Designer</i>
                                <span>{{ $uiux }}</span>
                            </li>
                            </li>
                            <li class="align-items-center">
                                <i class="text-dark">Web Developer</i>
                                <span>{{ $web }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('addJavascript')
    <script>
        //fix ini
        $(document).ready(function() {
                    $('#search').on('keyup', function() {
                            var query = $(this).val();
                            alert(query);
                        }
                    }
    </script>
@endsection
