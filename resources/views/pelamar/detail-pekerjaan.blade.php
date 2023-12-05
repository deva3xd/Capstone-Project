@extends('layouts.landing.master')
@extends('layouts.landing.navbar')

@section('content')
<section class="page-title bg-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="block text-center">
            <h1 class="text-capitalize mb-5 text-lg text-white">Detail Pekerjaan</h1>
  </section>

  <section class="section blog-wrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="row">
      <div class="col-lg-12 mb-5">
          <div class="single-blog-item">
              <img src="{{ asset('landing/images/blog/3.jpg') }}" alt="" class="img-fluid rounded">
  
              <div class="blog-item-content mt-4">
                  <h2 class="mt-3 mb-3 text-md"><a href="blog-single.html">Full-Stack Web Dev</a></h2>
                  <h3 class="mt-3 mb-3 text-md"><a href="blog-single.html">PT Suka Maju</a></h3>
                  <div class="blog-item-meta mb-5">
                      <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28 January 2023</span>
                      <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>Batas Lamaran</span>
                  </div> 
  
                  <p class="lead mb-4 text-primary">Persyaratan</p>
                  <div class="blog-item-meta mb-5">
                    <span class="text-muted text-capitalize mr-3"><i class="ti-pencil-alt mr-2"></i>Jabatan</span>
                    <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>Lulusan</span>
                </div> 

                <p class="lead mb-4 text-primary">Deskripsi</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam voluptate in beatae.</p>

                <p class="lead mb-4 text-primary">Skill dan Pengalaman</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam voluptate in beatae.</p>

                <p class="lead mb-4 text-primary">Tanggung Jawab</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus natus, consectetur? Illum libero vel nihil nisi quae, voluptatem, sapiente necessitatibus distinctio voluptates, iusto qui. Laboriosam autem, nam voluptate in beatae.</p>
                <p class="lead mb-4 text-primary">Alamat</p>
                  <div class="blog-item-meta mb-5">
                    <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>Alamat</span>
                </div> 

  
      <div class="sidebar-widget latest-post mb-3">
        <h5>Lowongan Populer</h5>

        <div class="media py-3">
            <a href="#"><img class="mr-4" src="{{ asset('landing/images/blog/bt-3.jpg') }}" alt=""></a>
            <div class="media-body">
                <span class="text-sm text-muted">12 Desember 2023</span>
                <h6 class="my-2"><a href="#">IT Support</a></h6>
            </div>
        </div>

        <div class="media py-3">
            <a href="#"><img class="mr-4" src="{{ asset('landing/images/blog/bt-2.jpg') }}" alt=""></a>
           <div class="media-body">
                   <span class="text-sm text-muted">03 Desember 2023</span>
                <h6 class="my-2"><a href="#">Cyber Security Analyst</a></h6>
            </div>
        </div>

        <div class="media py-3">
            <a href="#"><img class="mr-4" src="{{ asset('landing/images/blog/bt-1.jpg') }}" alt=""></a>
            <div class="media-body">
                <span class="text-sm text-muted">23 Desember 2023</span>
                <h6 class="my-2"><a href="#">Cloud Computing</a></h6>
            </div>
        </div>
    </div>
  
      <div class="sidebar-widget category mb-3">
          <h5 class="mb-4">Categories</h5>
  
          <ul class="list-unstyled">
            <li class="align-items-center">
              <a href="#">Innovation</a>
              <span>(14)</span>
            </li>
            <li class="align-items-center">
              <a href="#">Software</a>
              <span>(2)</span>
            </li>
            <li class="align-items-center">
              <a href="#">Social</a>
              <span>(10)</span>
            </li>
            <li class="align-items-center">
              <a href="#">Trends</a>
              <span>(5)</span>
            </li>
          </ul>
      </div>
  </div>
        </div>
      </div>
    </div>
  </section>
@endsection