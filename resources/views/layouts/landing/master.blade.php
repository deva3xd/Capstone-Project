<!DOCTYPE html>
<html lang="zxx">
	
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="description" content="Orbitor,business,company,agency,modern,bootstrap4,tech,software">
	<meta name="author" content="themefisher.com">
	<!-- theme meta -->
	<meta name="theme-name" content="orbitor" />
	<title>Home</title>
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="{{ asset('landing/images/logo.png') }}" />
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
    <script src="landing/plugins/jquery/jquery.js"></script>
    <script src="landing/js/contact.js"></script>
    <!-- Bootstrap 4.3.2 -->
    <script src="landing/plugins/bootstrap/js/popper.js"></script>
    <script src="landing/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--  Magnific Popup-->
    <script src="landing/plugins/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
    <!-- Slick Slider -->
    <script src="landing/plugins/slick-carousel/slick/slick.min.js"></script>
    <!-- Counterup -->
    <script src="landing/plugins/counterup/jquery.waypoints.min.js"></script>
    <script src="landing/plugins/counterup/jquery.counterup.min.js"></script>
    <script src="landing/plugins/modal-video/modal-video.js"></script>
    <!-- Google Map -->
    <script src="landing/plugins/google-map/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>    
    <script src="landing/js/script.js"></script>
	<script src="landing/plugins/bootstrap/js/popper.js"></script>
	<script src="landing/plugins/bootstrap/js/bootstrap.min.js"></script>	
</body>

</html>
