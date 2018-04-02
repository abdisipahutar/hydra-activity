<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Oriflame 4 Steps Skin Care Routine</title>
	  	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="title" content="Hydra">

	    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	    <!-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet"> -->
	    <link href="{{ asset('css/bootstrap3.min.css') }}" rel="stylesheet">
	    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    	<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    	<!-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> -->
    	<script src="{{ asset('js/bootstrap3.min.js') }}"></script>
    	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>

	</head>

	<body>
		<container>
			<div class="body-wrapper">
				<div class="col-md-12 web">
					<div class="header-container"><img src="{{ asset('img/Logo.png') }}"></div>
				</div>
				<div class="col-sm-12 mobile">
					<div class="header-container">
						<img width="40%;" src="{{ asset('img/logo-mobile.png') }}">
						<img class="hamburger-img" src="{{ asset('img/burger-menu.png') }}" >
					</div>
				</div>
				<div class="mobile-menu-container mobile">
					<div class="col-md-12" id="close-menu">X</div>
					<a href="/"><div class="col-sm-12 item-menu">4 STEP SKIN ROUTINE</div></a>
					<a href="/skin-care-sets"><div class="col-sm-12 item-menu">ORIFLAME SKIN CARE SETS</div></a>
					<a href="/4-steps-x-boomerang"><div class="col-sm-12 item-menu">4STEPSXBOOMERANG</div></a>
					<a href="/4-steps-x-boomerang-challenger"><div class="col-sm-12 item-menu" style="border-bottom: none;">4STEPSXBOOMERANG CHALLENGERS</div></a>
				</div>
				<div class="col-md-12 navigation-wrapper web">
					<div class="row navigation-container">
						<div class="col-md-3 navigation-item right-border oriflame-sans-regular">
							<a class="navigation-link" href="/">4 STEP SKIN ROUTINE</a>
						</div>
						<div class="col-md-3 navigation-item right-border oriflame-sans-regular">
							<a class="navigation-link" href="/skin-care-sets">ORIFLAME SKIN CARE SETS</a>
							</div>
						<div class="col-md-3 navigation-item right-border oriflame-sans-regular">
							<a class="navigation-link" href="/4-steps-x-boomerang">4STEPSXBOOMERANG</a>
							</div>
						<div class="col-md-3 navigation-item oriflame-sans-regular">
							<a class="navigation-link" href="/4-steps-x-boomerang-challenger">4STEPSXBOOMERANG CHALLENGERS</a>
							</div>
					</div>
				</div>
				<div class="content-wrapper">
					@yield('content')
				</div>

				<div class="footer">
					<div class="footer-text oriflame-sans-regular">Copyright &copy; 2018 Oriflame Cosmetics Global SA. All Rights reserved</div>
				</div>
				@include('modal_hydra')
				@yield('cstm-script')
			</div>
		</container>
	</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('.hamburger-img').click(function(){
			$('.mobile-menu-container').show();
		});
		$('#close-menu').click(function(){
			$('.mobile-menu-container').hide();
		});
	});
</script>

</html>