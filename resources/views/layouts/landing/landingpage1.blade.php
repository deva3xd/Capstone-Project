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
  <link rel="shortcut icon" type="image/x-icon" href="landing/images/favicon.ico" />

  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="landing/plugins/bootstrap/css/bootstrap.min.css">
  <!-- Icon Font Css -->
  <link rel="stylesheet" href="landing/plugins/themify/css/themify-icons.css">
  <link rel="stylesheet" href="landing/plugins/fontawesome/css/all.css">
  <link rel="stylesheet" href="landing/plugins/magnific-popup/dist/magnific-popup.css">
    <link rel="stylesheet" href="landing/plugins/modal-video/modal-video.css">
    <link rel="stylesheet" href="landing/plugins/animate-css/animate.css">
  <!-- Slick Slider  CSS -->
  <link rel="stylesheet" href="landing/plugins/slick-carousel/slick/slick.css">
  <link rel="stylesheet" href="landing/plugins/slick-carousel/slick/slick-theme.css">

  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="landing/css/style.css">

</head>

<body>
	<nav class="navbar navbar-expand-lg py-4 navigation header-padding nav-text-white" id="navbar">
		<div class="container-fluid">
		  <a class="navbar-brand" href="index.html">
			<img src="{{ asset('landing/images/logo-w.png') }}" alt="" class="img-fluid">
		  </a>
		  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
			<span class="fa fa-bars"></span>
		  </button>
		  <div class="collapse navbar-collapse text-center" id="navbarsExample09">
			<ul class="navbar-nav m-auto">
			  <li class="nav-item active">
				<a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
			  </li>
			   <li class="nav-item"><a class="nav-link" href="about.html">Lowongan</a></li>
			    <li class="nav-item"><a class="nav-link" href="service.html">Perusahaan</a></li>
				<li class="nav-item"><a class="nav-link" href="service.html">Tentang Kami</a></li>
				<li class="nav-item"><a class="nav-link" href="service.html">Kontak</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  Login
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
					  <a class="dropdown-item" href="#"><i class="fas fa-building m-1"></i>Perusahaan</a>
					  <a class="dropdown-item" href="#"><i class="fas fa-user m-1"></i>Pelamar</a>
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
				<div class="widget mb-5 mb-lg-0">
					<div class="logo mb-4">
						<h3>Loker_IT.id</h3>
					</div>
					<p>Portal lowongan pekerjaan IT di indonesia</p>
				</div>
			</div>
			<div class="col-lg-2 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-4">Tentang Kami</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Lowongan</a></li>
						<li><a href="#">Perusahaan</a></li>
						<li><a href="#">Tentang Kami</a></li>
						<li><a href="#">Kontak</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-4">Support</h4>

					<ul class="list-unstyled footer-menu lh-35">
						<li><a href="#">Terms & Conditions</a></li>
						<li><a href="#">Privacy Policy</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">FAQ</a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-6">
				<div class="widget widget-contact mb-5 mb-lg-0">
					<h4 class="text-capitalize mb-4">Get in Touch</h4>
					<h6><a href="tel:+23-345-67890" > <i class="ti-headphone-alt mr-3"></i>Support@megakit.com</a></h6>
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
						&copy; Copyright Reserved to <span class="text-color">Orbitor</span> by <a href="https://themefisher.com/" target="_blank">Themefisher</a>
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
