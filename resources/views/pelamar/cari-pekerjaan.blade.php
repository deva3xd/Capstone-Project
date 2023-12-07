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
              <li class="list-inline-item"><a href="{{ route('Pelamar') }}" class="text-white">Home</a></li>
              <li class="list-inline-item"><span class="text-white">/</span></li>
              <li class="list-inline-item"><a href="#" class="text-white-50">Lowongan</a></li>
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
      <div class="col-lg-12 col-md-12 mb-5">
          <div class="blog-item">
              <div class="blog-thumb">
                  <img src="{{ asset('landing/images/blog/blog-1.jpg') }}" alt="" class="img-fluid rounded">
              </div>
  
              <div class="blog-item-content">
                  <h3 class="mt-3 mb-3"><a href="blog-single.html">Desain UI/UX</a></h3>
  
                  <div class="blog-item-meta mb-3">
                      <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                      <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
                  </div> 
  
                  <p class="mb-1 text-success">PT Suka Maju</p>
                  <p class="mb-4 text-color">Rp 2 juta - Rp 2 juta/bulan</p>
  
                  <a href="{{ route('PelamarCaripekerjaan') }}" class="btn btn-small btn-main ">Detail</a>
              </div>
          </div>
      </div>
  
      <div class="col-lg-12 col-md-12 mb-5">
          <div class="blog-item">
              <div class="blog-thumb">
                  <img src="{{ asset('landing/images/blog/blog-2.jpg') }}" alt="" class="img-fluid rounded">
              </div>
  
              <div class="blog-item-content">
                  <h3 class="mt-3 mb-3"><a href="blog-single.html">Web Front-End</a></h3>
  
                  <div class="blog-item-meta mb-3">
                      <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                      <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
                  </div> 
  
                  
                  <p class="mb-1 text-success">PT Suka Maju</p>
                  <p class="mb-4 text-color">Rp 2 juta - Rp 2 juta/bulan</p>
  
                  <a href="blog-single.html" class="btn btn-small btn-main ">Learn More</a>
              </div>
          </div>
      </div>
  
      <div class="col-lg-12 col-md-12 mb-5">
          <div class="blog-item">
              <div class="blog-thumb">
                  <img src="{{ asset('landing/images/blog/blog-3.jpg') }}" alt="" class="img-fluid rounded">
              </div>
  
              <div class="blog-item-content">
                  <h3 class="mt-3 mb-3"><a href="blog-single.html">Web Back-End</a></h3>
  
                  <div class="blog-item-meta mb-3">
                      <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                      <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
                  </div> 
  
                  
                  <p class="mb-1 text-success">PT Suka Maju</p>
                  <p class="mb-4 text-color">Rp 2 juta - Rp 2 juta/bulan</p>
  
                  <a href="blog-single.html" class="btn btn-small btn-main ">Learn More</a>
              </div>
          </div>
      </div>
  
      <div class="col-lg-12 col-md-12 mb-5">
          <div class="blog-item">
              <div class="blog-thumb">
                  <img src="{{ asset('landing/images/blog/blog-4.jpg') }}" alt="" class="img-fluid rounded">
              </div>
  
              <div class="blog-item-content">
                  <h3 class="mt-3 mb-3"><a href="blog-single.html">Web Full-Stack</a></h3>
  
                  <div class="blog-item-meta mb-3">
                      <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                      <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
                  </div> 
  
                  
                  <p class="mb-1 text-success">PT Suka Maju</p>
                  <p class="mb-4 text-color">Rp 2 juta - Rp 2 juta/bulan</p>
  
  
                  <a href="blog-single.html" class="btn btn-small btn-main ">Learn More</a>
              </div>
          </div>
      </div>
  
      <div class="col-lg-12 col-md-12 mb-5">
          <div class="blog-item">
              <div class="blog-thumb">
                  <img src="{{ asset('landing/images/blog/blog-5.jpg') }}" alt="" class="img-fluid rounded">
              </div>
  
              <div class="blog-item-content">
                  <h3 class="mt-3 mb-3"><a href="blog-single.html">Data Analis</a></h3>
  
                  <div class="blog-item-meta mb-3">
                      <span class="text-muted text-capitalize mr-3"><i class="ti-comment mr-2"></i>5 Comments</span>
                      <span class="text-black text-capitalize mr-3"><i class="ti-time mr-1"></i> 28th January</span>
                  </div> 
  
                  
                  <p class="mb-1 text-success">PT Suka Maju</p>
                  <p class="mb-4 text-color">Rp 2 juta - Rp 2 juta/bulan</p>
  
  
                  <a href="blog-single.html" class="btn btn-small btn-main ">Learn More</a>
              </div>
          </div>
      </div>
  </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">
      <div class="sidebar-widget search  mb-3 ">
          <h5>Cari Lowongan</h5>
          <form action="#" class="search-form">
              <input type="text" class="form-control" placeholder="search">
              <i class="ti-search"></i>
          </form>
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
  
      <div class="row mt-5">
        <div class="col-lg-8">
          <nav class="pagination py-2 d-inline-block">
            <div class="nav-links">
              <span aria-current="page" class="page-numbers current">1</span>
              <a class="page-numbers" href="#">2</a>
              <a class="page-numbers" href="#">3</a>
              <a class="page-numbers" href="#"><i class="ti-angle-right"></i></a>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </section>
@endsection