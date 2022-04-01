<!DOCTYPE html>
<html lang="fr" class="no-js adapt">
	<head>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<title>TAIROU Baïssou</title>
		<meta name="description" content="Taïrou Baïssou, développeur web full stack, développeur mobile" />
		<meta name="keywords" content="TAIROU Baïssou, Taïrou Baïssou, TAIROU Baissou, Tairou Baïssou, Tairou Baissou,développeur bénin, bénin, développeur, développeur web, développeur mobile, Portfolio, développeur api, e-commerce, my-app-portfolio, my-app" />
		<meta name="author" content="Taïrou Baïssou"/>

        <meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
        <meta name='description' content='Assassinat, tentative d&#039;assassinat et complicité' />
        <meta name='viewport' content='width=device-width, user-scalable=no, initial-scale=1' />
        <meta property='fb:app_id' content='7980975205212750' />
        <meta property='og:url' content='http://my-app-portfolio.herokuapp.com/' />
        <meta property='og:type' content='portfolio' />
        <meta property='og:title' content='Baïssou TAÏROU | Développeur web et mobile' data-dynamic='true' />
        <meta property='og:description' content='Développeur web fullstack avec laravel et développeur mobile avec flutter' data-dynamic='true' />
        <meta property='og:image' content='{{ asset('html/img/avatar.png') }}' data-dynamic='true' />
        <meta property='og:image:width' content='256' data-dynamic='true'><meta property='og:image:height' content='256' data-dynamic='true'><meta property='og:locale' content='fr_FR' />
        <meta property='og:site_name' content='Baïssou TAÏROU | Développeur web et mobile' />
        <meta property='twitter:url' content='http://my-app-portfolio.herokuapp.com/' />
        <meta property='twitter:card' content='summary' />
        <meta property='twitter:title' content='Baïssou TAÏROU | Développeur web et mobile' />
        <meta property='twitter:description' content='Développeur web fullstack avec laravel et développeur mobile avec flutterAssassinat, tentative d&#039;assassinat et complicitéDéveloppeur web fullstack avec laravel et développeur mobile avec flutter' />
        <meta property='twitter:image' content='{{ asset('html/img/avatar.png') }}' />

		<link rel="shortcut icon" href="favicon.ico">
		<link rel="icon" href="{{ asset('icon.jpeg') }}" type="image/x-icon">
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
