<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Hail Hydra</title>
	  	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	    <meta name="title" content="Hydra">

	    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    	<script src="{{ asset('js/jquery-1.11.3.min.js') }}"></script>
    	<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    	<script src="{{ asset('js/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap-notify.min.js') }}"></script>

	</head>

	<body>
		<container>
			<div class="body-wrapper">
				<div class="col-md-12">
					<div class="header-container"><img src="{{ asset('img/Logo.png') }}"></div>
				</div>
				<div class="col-md-12 navigation-wrapper">
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

</html>