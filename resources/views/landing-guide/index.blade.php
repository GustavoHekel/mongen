<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
	<title>Mongen</title>
	@include('landing-guide.includes.header.meta')
	@include('landing-guide.includes.header.css')

	<!-- Modernizr JS -->
	<script src="{{ asset("dist/plugins/guide/js/modernizr-2.6.2.min.js")}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Loader -->
	<div class="fh5co-loader"></div>
	<div id="fh5co-page">
		@include('landing-guide.includes.index.header')
		@include('landing-guide.includes.index.hero')
		@include('landing-guide.includes.index.projects')
		@include('landing-guide.includes.index.features')
		<!-- @include('landing-guide.includes.index.features_2') -->
		@include('landing-guide.includes.index.testimonials')
		@include('landing-guide.includes.index.subscribe')
		@include('landing-guide.includes.index.footer')
		@include('landing-guide.includes.body.js')
	</div>
</body>
