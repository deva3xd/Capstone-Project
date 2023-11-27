@extends('layouts.landing.master')

@section('content')
<section class="banner d-flex align-items-center">
	<div class="banner-img-part"></div>
	<div class="container">
		<div class="row">
			<div class="col-lg-10 col-md-12 col-xl-8">
				<div class="block">
					<span class="text-uppercase text-sm letter-spacing ">Solusi anda dalam mencari lowongan pekerjaan IT</span>
					<h2 class="mb-3 mt-3">Temukan Pekerjaan IT Impianmu Di Loker_IT.id</h1>
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
