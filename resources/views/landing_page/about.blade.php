@extends('layouts.landing.landingpage1')

@section('content')

<section class="page-title bg-1">
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
					<h2>Kami menyediakan platform untuk <br> Membantu pelamar <span class="text-color">Dan juga perusahaan dalam mencari calon karyawan</span> dengan skill terbaiknya</h2>
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
      <div class="row">
        <div class="col-lg-8">
          <div class="why-content">
            <h2 class="mb-4">Mudah cari dan dapat lowongan</h2>
            <p class="mb-5">Lebih dari 100 perusahaan menanti anda</p>
          </div>
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
              <img src="{{ asset('landing/images/about/ruang_guru.png') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
          <div class="award-img-block mb-4 mb-lg-0">
            <div class="award-img">
              <img src="{{ asset('landing/images/about/Logo_GameLab.png') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
          <div class="award-img-block mb-4 mb-lg-0">
            <div class="award-img">
              <img src="{{ asset('landing/images/about/alfamart.png') }}" alt="" class="img-fluid">
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
          <div class="award-img-block mb-4 mb-lg-0">
            <div class="award-img">
              <img src="{{ asset('landing/images/about/tokopedia.png') }}" alt="" class="img-fluid">
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
@endsection