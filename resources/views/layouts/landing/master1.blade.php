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
	<nav class="navbar navbar-expand-lg py-4 navigation header-padding nav-text-white" id="navbar">
		<div class="container-fluid">
		  <a class="navbar-brand" href="index.html">
			<img src="{{ asset('landing/images/logo.png') }}" alt="" width="50px" height="10px" class="img-fluid">
		  </a>
		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav m-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="{{ route('Pelamar') }}">Home <span class="sr-only">(current)</span></a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="{{ route('PelamarCaripekerjaan') }}">Lowongan</a></li>
			    <li class="nav-item"><a class="nav-link" href="{{ route('PelamarCariperusahaan') }}">Perusahaan</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link nav-link-button border rounded" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  User
					</a>
					<div class="dropdown-menu border rounded" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="{{ route('Profil') }}"><i class="fas fa-building m-1"></i>Profil</a>
					  <a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt m-1"></i>Keluar</a>
					</div>
				  </li>		
			</ul>
			
		  </div>
		</div>
	</nav>

@yield('content')

<!-- footer Start -->
<footer class="footer section">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 mr-auto col-sm-6">
				<div class="widget mb-2 mb-lg-0">
					<div class="logo mb-4">
						<h3>LokerIT.id</h3>
					</div>
					<p>Portal lowongan pekerjaan IT di indonesia. Cari profesi IT mu di LokerIT.id</p>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-4">Tentang Kami</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="{{ route('LandingPage') }}">Tentang Kami</a></li>
						<li><a href="{{ route('LandingPage') }}">Kontak</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-4">Jobseeker</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="{{ route('LowonganLandingPage') }}">Lowongan</a></li>
						<li><a href="{{ route('PerusahaanLandingPage') }}">Perusahaan</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-4">Hubungi Kami</h4>
					<h6><a href="tel:+23-345-67890" > <i class="ti-headphone-alt mr-3"></i>lokerit_id@gmail.com</a></h6>
					<h6><a href="mailto:support@gmail.com" > <i class="ti-mobile mr-3"></i>+23-456-6588</a></h6>

					<ul class="list-inline footer-socials mt-5">
						<li class="list-inline-item"><a href="https://www.facebook.com/themefisher"><i class="ti-facebook mr-2"></i></a></li>
						<li class="list-inline-item"><a href="https://twitter.com/themefisher"><i class="ti-twitter mr-2"></i></a></li>
						<li class="list-inline-item"><a href="https://www.pinterest.com/themefisher/"><i class="ti-linkedin mr-2 "></i></a></li>
					</ul>
				</div>
			</div>
		</div>
		
		<div class="footer-btm py-4 mt-5">
			<div class="row">
				<div class="col-lg-6">
					<div class="copyright">
						&copy; Copyright Reserved to <span class="text-color">LokerIT.id</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
   

    <!-- 
    Essential Scripts
    =====================================-->

    
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

  </body>
  </html>
