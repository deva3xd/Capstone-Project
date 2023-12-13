@extends('layouts.landing.master')
@extends('layouts.landing.navbar')

@section('content')
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
                            <div class="col-lg-12 col-md-6 mb-3 border ">
                                <div class="blog-item p-1 mr-1">
                                    <div class="blog-thumb py-2">
                                        <img src="{{ asset('landing/images/blog/blog-5.jpg') }}" alt="logo"
                                            class="img-fluid rounded">
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
                                        <a href="{{ route('pelamarDetailLowongan', ['id' => $loker->id]) }}"
                                            class="btn btn-small btn-main">Info Detail</a>
                                        <a href="blog-single.html" class="btn btn-small btn-success ">Daftar</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-widget search  mb-3 ">
                        <h5>Cari Perusahaan</h5>
                        <label>Search:<input type="search" class="form-control form-control-sm" placeholder=""
                                aria-controls="detail-lowongan"></label>
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
