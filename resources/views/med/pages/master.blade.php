<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Medstepbd</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('med/css/open-iconic-bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('med/css/animate.css') }}">

		<link rel="stylesheet" href="{{ asset('med/css/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('med/css/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('med/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('med/css/aos.css') }}">
		<link rel="stylesheet" href="{{ asset('med/css/ionicons.min.css') }}">

		<link rel="stylesheet" href="{{ asset('med/css/flaticon.css') }}">
		<link rel="stylesheet" href="{{ asset('med/css/icomoon.css') }}">
        <link rel="stylesheet" href="{{ asset('med/css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('med/css/new.css') }}">

        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/rateYo/2.3.2/jquery.rateyo.min.css">



	</head>
	<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

                        @include('med.pages.header')

						<!--------- Different contents Here----------->

						@yield('content')

						<!----------Footer------------->
						@include('med.pages.footer')


						<!-- loader -->
						<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>
						<script src="{{ asset('med/js/jquery.min.js') }}"></script>
						<script src="{{ asset('med/js/jquery-migrate-3.0.1.min.js') }}"></script>
						<script src="{{ asset('med/js/popper.min.js') }}"></script>
						<script src="{{ asset('med/js/bootstrap.min.js') }}"></script>
						<script src="{{ asset('med/js/jquery.easing.1.3.js') }}"></script>
						<script src="{{ asset('med/js/jquery.waypoints.min.js') }}"></script>
						<script src="{{ asset('med/js/jquery.stellar.min.js') }}"></script>
						<script src="{{ asset('med/js/owl.carousel.min.js') }}"></script>
						<script src="{{ asset('med/js/jquery.magnific-popup.min.js') }}"></script>
						<script src="{{ asset('med/js/aos.js') }}"></script>
						<script src="{{ asset('med/js/jquery.animateNumber.min.js') }}"></script>
						<script src="{{ asset('med/js/scrollax.min.js') }}"></script>
						<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
						<script src="{{ asset('med/js/google-map.js') }}"></script>

						<script src="{{ asset('med/js/main.js') }}"></script>
						<script>
							// direct browser to top right away
						if (window.location.hash)
						scroll(0,0);
						// takes care of some browsers issue
						setTimeout(function(){scroll(0,0);},1);
						$(function(){
						//your current click function
						$('.scroll').on('click',function(e){
						e.preventDefault();
						$('html,body').animate({
						scrollTop:$($(this).attr('href')).offset().top + 'px'
						},1000,'swing');
						});
						// if we have anchor on the url (calling from other page)
						if(window.location.hash){
						// smooth scroll to the anchor id
						$('html,body').animate({
						scrollTop:$(window.location.hash).offset().top + 'px'
						},1000,'swing');
						}
						});

						</script>

					</body>
				</html>
