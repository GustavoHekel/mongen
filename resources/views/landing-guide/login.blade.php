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
		@include('landing-guide.includes.login.header')
		@include('landing-guide.includes.login.form')
		@include('landing-guide.includes.index.footer')
		@include('landing-guide.includes.body.js')
		@include('landing-guide.includes.login.js')
	</div>
</body>