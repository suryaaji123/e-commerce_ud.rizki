<!DOCTYPE html>
<html lang="zxx">
<head>
	<!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='copyright' content=''>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Title Tag  -->
    <title>Ud.Rizki</title>
	<!-- Favicon -->
	<link rel="icon" type="image/png" href="{{ asset('template_user/eshop/images/favicon.png')}}">
	<!-- Web Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">
	
	<!-- StyleSheet -->
	
	<!-- Bootstrap -->
	<link rel="stylesheet" href="{{ asset('template_user/eshop/css/bootstrap.css')}}">
	<!-- Magnific Popup -->
    <link rel="stylesheet" href="{{ asset('template_user/eshop/css/magnific-popup.min.css')}}">
	<!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template_user/eshop/css/font-awesome.css')}}">
	<!-- Fancybox -->
	<link rel="stylesheet" href="{{ asset('template_user/eshop/css/jquery.fancybox.min.css')}}">
	<!-- Themify Icons -->
    <link rel="stylesheet" href="{{ asset('template_user/eshop/css/themify-icons.css')}}">
	<!-- Nice Select CSS -->
    <link rel="stylesheet" href="{{ asset('template_user/eshop/css/niceselect.css')}}">
	<!-- Animate CSS -->
    <link rel="stylesheet" href="{{ asset('template_user/eshop/css/animate.css')}}">
	<!-- Flex Slider CSS -->
    <link rel="stylesheet" href="{{ asset('template_user/eshop/css/flex-slider.min.css')}}">
	<!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('template_user/eshop/css/owl-carousel.css')}}">
	<!-- Slicknav -->
    <link rel="stylesheet" href="{{ asset('template_user/eshop/css/slicknav.min.css')}}">
	
	<!-- Eshop StyleSheet -->
	<link rel="stylesheet" href="{{ asset('template_user/eshop/css/reset.css')}}">
	<link rel="stylesheet" href="{{ asset('template_user/eshop/style.css')}}">
    <link rel="stylesheet" href="{{ asset('template_user/eshop/css/responsive.css')}}">

	
	
</head>
<body class="js">
	
	<!-- Preloader -->
	<div class="preloader">
		<div class="preloader-inner">
			<div class="preloader-icon">
				<span></span>
				<span></span>
			</div>
		</div>
	</div>
	<!-- End Preloader -->
	@include('componentUser.navbar-2')

	@yield('breadcrumbs')
	
		<!--/ End Header -->
	
	<!-- Slider Area -->
    @yield('content')
    <!-- Modal end -->
	
	<!-- Start Footer Area -->
	<footer class="footer">
		<!-- End Footer Top -->
		<div class="copyright">
			<div class="container">
				<div class="inner">
					<div class="row">
						<div class="col-lg-6 col-12">
							<div class="left">
								<p>Copyright © 2020 <a href="http://www.wpthemesgrid.com" target="_blank">Wpthemesgrid</a>  -  All Rights Reserved.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /End Footer Area -->
 
	<!-- Jquery -->
    <script src="{{ asset('template_user/eshop/js/jquery.min.js')}}"></script>
    <script src="{{ asset('template_user/eshop/js/jquery-migrate-3.0.0.js')}}"></script>
	<script src="{{ asset('template_user/eshop/js/jquery-ui.min.js')}}"></script>
	<!-- Popper JS -->
	<script src="{{ asset('template_user/eshop/js/popper.min.js')}}"></script>
	<!-- Bootstrap JS -->
	<script src="{{ asset('template_user/eshop/js/bootstrap.min.js')}}"></script>
	<!-- Color JS -->
	<script src="{{ asset('template_user/eshop/js/colors.js')}}"></script>
	<!-- Slicknav JS -->
	<script src="{{ asset('template_user/eshop/js/slicknav.min.js')}}"></script>
	<!-- Owl Carousel JS -->
	<script src="{{ asset('template_user/eshop/js/owl-carousel.js')}}"></script>
	<!-- Magnific Popup JS -->
	<script src="{{ asset('template_user/eshop/js/magnific-popup.js')}}"></script>
	<!-- Waypoints JS -->
	<script src="{{ asset('template_user/eshop/js/waypoints.min.js')}}"></script>
	<!-- Countdown JS -->
	<script src="{{ asset('template_user/eshop/js/finalcountdown.min.js')}}"></script>
	<!-- Nice Select JS -->
	<script src="{{ asset('template_user/eshop/js/nicesellect.js')}}"></script>
	<!-- Flex Slider JS -->
	<script src="{{ asset('template_user/eshop/js/flex-slider.js')}}"></script>
	<!-- ScrollUp JS -->
	<script src="{{ asset('template_user/eshop/js/scrollup.js')}}"></script>
	<!-- Onepage Nav JS -->
	<script src="{{ asset('template_user/eshop/js/onepage-nav.min.js')}}"></script>
	<!-- Easing JS -->
	<script src="{{ asset('template_user/eshop/js/easing.js')}}"></script>
	<!-- Active JS -->
	<script src="{{ asset('template_user/eshop/js/active.js')}}"></script>
	<script src="{{ asset('template_user/eshop/aksi.js')}}"></script>
	<script>
		setTimeout(function(){
			$('#mediumModal').modal('show');
		}, 5000);
		
	</script>
</body>
</html>