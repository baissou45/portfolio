<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>TAIROU Baïssou</title>
		<meta name="description" content="Taïrou Baïssou, développeur web full stack, développeur mobile" />
		<meta name="keywords" content="TAIROU Baïssou, Taïrou Baïssou, TAIROU Baissou, Tairou Baïssou, Tairou Baissou,développeur bénin, bénin, développeur, développeur web, développeur mobile, développeur api, e-commerce" />
		<meta name="author" content="Taïrou Baïssou"/>

		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="favicon.ico" type="image/x-icon">
		<!--CSS-->
		<link rel="stylesheet" type="text/css" href="{{ asset('html/css/style.css') }}" />
	</head>

	<body id="body" data-ng-app="contactApp">

		<!--Preloader-->
		<div class="preloader-it">
			<div class="mdl-spinner mdl-js-spinner is-active is-upgraded" data-upgraded=",MaterialSpinner"><div class="mdl-spinner__layer mdl-spinner__layer-1"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-2"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-3"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div><div class="mdl-spinner__layer mdl-spinner__layer-4"><div class="mdl-spinner__circle-clipper mdl-spinner__left"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__gap-patch"><div class="mdl-spinner__circle"></div></div><div class="mdl-spinner__circle-clipper mdl-spinner__right"><div class="mdl-spinner__circle"></div></div></div></div>
		</div>
		<!--/Preloader-->

		<!--Main Wrapper-->
		<div class="main-wrapper">

			<!--Bg Image-->
            {{-- {{ dd(Route::currentRouteName()) }} --}}
            @if ( Route::currentRouteName() == "dashboard" )
                <div class="bg-struct bg-img"></div>
                @endif
			<!--/Bg Image-->

			<div class="mdl-js-layout mdl-layout--fixed-header">

				<!--Top Header-->
                @include('layouts.composant.header')
				<!--/Top Header-->

				<!--Left Sidebar-->
				@include('layouts.composant.sideBar')
				<!--/Left Sidebar-->

				<!--Main Content-->
				<div class="main-content relative">
					<div class="container">

						@yield("contenu")

						<!--Footer Sec-->
						@include('layouts.composant.footer')
						<!--Footer Sec-->
					</div>
				</div>
				<!--/Main Content-->

			</div>
		</div>
		<!--/Main Wrapper-->

		<!-- Scripts -->
		<script src="{{ asset('html/js/jquery-1.12.4.min.js') }}"></script>
		<script src="{{ asset('html/js/angular.min.js') }}"></script>
		<script src="{{ asset('html/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('html/js/jquery-ui.min.js') }}"></script>
		<script src="{{ asset('html/js/material.min.js') }}"></script>
		<script src="{{ asset('html/js/jQuery.appear.js') }}"></script>
		<script src="{{ asset('html/js/app.js') }}"></script>
		<script src="{{ asset('html/js/controllers.js') }}"></script>
		<script src="{{ asset('html/js/smooth-scroll.js') }}"></script>
		<script src="{{ asset('html/js/isotope.js') }}"></script>
		<script src="{{ asset('html/js/lightgallery-all.js') }}"></script>
		<script src="{{ asset('html/js/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('html/js/froogaloop2.min.js') }}"></script>
		<script src="{{ asset('html/js/jquery.slimscroll.js') }}"></script>
		<script src="{{ asset('html/js/init.js') }}"></script>
	</body>
</html>
