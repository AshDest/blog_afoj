<!DOCTYPE html>
<html lang="zxx"> 
	
<!-- Mirrored from demo.rstheme.com/html/renovix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 09:01:21 GMT -->
<head>
		<!-- meta tag -->
		<meta charset="utf-8">
		<title>AFOJ - Association Fondation Jamaa</title>
		<meta name="description" content="">
		<!-- responsive tag -->
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- favicon -->
		<link rel="apple-touch-icon" href="#">
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/fav.png') }}">
		<!-- Bootstrap v5.0.2 css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
		<!-- font-awesome css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/font/font-awesome.min.css') }}">
		<!-- Uicons Regular Rounded css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/uicons-regular-rounded.css') }}">
		<!-- flaticon css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/fonts/flaticon.css') }}">
		<!-- animate css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
		<!-- owl.carousel css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}">
		<!-- slick slider css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/slick.css') }}">
		<!-- odometer css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/odometer.min.css') }}">
		<!-- off canvas css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/off-canvas.css') }}">
		<!-- magnific popup css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/magnific-popup.css') }}">
		<!-- Main Menu css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rsmenu-main.css') }}">
		<!-- spacing css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/rs-spacing.css') }}">
		<!-- style css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/style.css') }}"> <!-- This stylesheet dynamically changed from style.less -->
		<!-- responsive css -->
		<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
		
	</head>
	<body class="defult-home">
		
		<div class="offwrap"></div>

		<!--Preloader start here-->
	   	<div id="pre-load">
            <div id="loader" class="loader">
                <div class="loader-container">
                    <div class="loader-icon"><img src="{{ asset('assets/images/fav.png') }}" alt="Renovix - Business Consulting Html Template "></div>
                </div>
            </div>              
        </div>
		<!--Preloader area end here-->
			
		<!-- Main content Start -->
		<div class="main-content">

			<!--Full width header Start-->
			<div class="full-width-header">
				<!--Header Start-->
				<header id="rs-header" class="rs-header header-style1 header-modify1">
					<!-- Toolbar Area Start -->
                    @include('layouts._header')
					<!-- Toolbar Area End -->
					
					<!-- Menu Start -->
                    @include('layouts._menus')
					<!-- Menu End -->

					<!-- Canvas Menu start -->
                    @include('layouts._canvas_menu')
					<!-- Canvas Menu end -->

					<!-- Canvas Mobile Menu start -->
                    @include('layouts._mobile_menu')
					<!-- Canvas Menu end -->                             
				</header>
				<!--Header End-->
			</div>
			<!--Full width header End-->
            @yield('content')
		</div> 
		<!-- Main content End -->
	 
		<!-- Footer Start -->
        @include('layouts._footer')
		<!-- Footer End -->

		<!-- start scrollUp  -->
		<div id="scrollUp">
			<i class="fa fa-angle-up"></i>
		</div>
		<!-- End scrollUp  -->


		<!-- Search Modal Start -->
		<div class="modal fade search-modal" id="searchModal" tabindex="-1">
			<button type="button" class="close" data-bs-dismiss="modal">
				<i class="fi fi-rr-cross-small"></i>
			</button>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="search-block clearfix">
						<form>
							<div class="form-group">
								<input class="form-control" placeholder="Searching..." type="text">
								<button type="submit" value="Search"><i class="fi fi-rr-search"></i></button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- Search Modal End -->

		<!-- modernizr js -->
		<script src="{{ asset('assets/js/modernizr-2.8.3.min.js') }}"></script>
		<!-- jquery latest version -->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<!-- Bootstrap v5.0.2 js -->
		<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
		<!-- op nav js -->
		<script src="{{ asset('assets/js/jquery.nav.js') }}"></script>
		<!-- PageScroll2id onepage js -->
		<script src="{{ asset('assets/js/jquery.malihu.PageScroll2id.min.js') }}"></script>
		<!-- owl.carousel js -->
		<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
		<!-- Slick js -->
		<script src="{{ asset('assets/js/slick.min.js') }}"></script>
		<!-- wow js -->
		<script src="{{ asset('assets/js/wow.min.js') }}"></script>
		<!-- Skill bar js -->
		<script src="{{ asset('assets/js/skill.bars.jquery.js') }}"></script>
		<!-- imagesloaded js -->
		<script src="{{ asset('assets/js/imagesloaded.pkgd.min.js') }}"></script>
		<!-- odometer & appear js -->
		<script src="{{ asset('assets/js/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('assets/js/odometer.min.js') }}"></script>
		<!-- magnific popup js -->
		<script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
		<!-- contact form js -->
		<script src="{{ asset('assets/js/contact.form.js') }}"></script>
		<!-- main js -->
		<script src="{{ asset('assets/js/main.js') }}"></script>
	</body>

<!-- Mirrored from demo.rstheme.com/html/renovix/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Mar 2024 09:02:01 GMT -->
</html>