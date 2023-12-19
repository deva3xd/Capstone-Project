<!DOCTYPE html>
<html lang="en">
	
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<!-- theme meta -->
	<meta name="theme-name" content="orbitor" />
	<title>LokerTI.id</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/images/favicon.png') }}" />
	<!-- bootstrap.min css -->
	<link rel="stylesheet" href="{{ asset('landing/plugins/bootstrap/css/bootstrap.min.css') }}">
	<!-- Icon Font Css -->
	<link rel="stylesheet" href="{{ asset('landing/plugins/themify/css/themify-icons.css') }}">
	<link rel="stylesheet" href="{{ asset('landing/plugins/fontawesome/css/all.css') }}">
	<link rel="stylesheet" href="{{ asset('landing/plugins/magnific-popup/dist/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/plugins/modal-video/modal-video.css') }}">
    <link rel="stylesheet" href="{{ asset('landing/plugins/animate-css/animate.css') }}">
	<!-- Slick Slider  CSS -->
	<link rel="stylesheet" href="{{ asset('landing/plugins/slick-carousel/slick/slick.css') }}">
	<link rel="stylesheet" href="{{ asset('landing/plugins/slick-carousel/slick/slick-theme.css') }}">
	<!-- Main Stylesheet -->
	<link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">
</head>

<body>
	<!-- Navbar -->
	@yield('navbar')
	<!-- Navbar end -->

	@yield('content')

	<!-- Footer start -->
	<footer class="footer section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 mr-auto col-sm-6">
					<div class="widget mb-2 mb-lg-0">
						<div class="logo mb-4">
							<h3>LokerTI.id</h3>
						</div>
						<p>Portal lowongan pekerjaan IT di indonesia. Cari profesi IT mu di LokerTI.id</p>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-4">Home</h4>
						<ul class="list-unstyled footer-menu lh-35">
							<li><a href="#tentang_kami">Tentang Kami</a></li>
							<li><a href="#kontak">Kontak</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widget mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-4">Menu Utama</h4>

						<ul class="list-unstyled footer-menu lh-35">
							<li><a href="{{ route('pelamarCariLowongan') }}">Lowongan</a></li>
							<li><a href="{{ route('PelamarCariperusahaan') }}">Perusahaan</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widget widget-contact mb-5 mb-lg-0">
						<h4 class="text-capitalize mb-4">Kontak Kami</h4>
						<h6><i class="ti-headphone-alt mr-3"></i><span class="text-white-50">example@gmail.com</span></h6>
						<h6><i class="ti-mobile mr-3"></i><span class="text-white-50">+62-812-3456-7890</span></h6>
						<ul class="list-inline footer-socials mt-5">
							<li class="list-inline-item"><a href="#"><i class="ti-facebook mr-2"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-instagram mr-2"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-linkedin mr-2 "></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="ti-twitter mr-2"></i></a></li>
						</ul>
					</div>
				</div>
			</div>

			<div class="footer-btm py-4 mt-5">
				<div class="row">
					<div class="col-lg-6">
						<div class="copyright">
							&copy; Copyright Reserved to <span class="text-color">LokerTI.id</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer end -->

    <!-- Main jQuery -->
    <script src="{{asset('landing/plugins/jquery/jquery.js')}}"></script>
    <script src="{{asset('landing/js/contact.js')}}"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="{{asset('landing/plugins/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('landing/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--  Magnific Popup-->
    <script src="{{asset('landing/plugins/magnific-popup/dist/jquery.magnific-popup.min.js')}}"></script>
    <!-- Slick Slider -->
    <script src="{{asset('landing/plugins/slick-carousel/slick/slick.min.js')}}"></script>
    <script src="{{asset('landing/js/script.js')}}"></script>
	@yield('addJavascript')
</body>

</html>
