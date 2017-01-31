<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Mongen.</title>
		@include('alpha.includes.header.meta')
		@include('alpha.includes.header.css')
	</head>
	<body class="landing">
		<div id="page-wrapper">

			@include('alpha.includes.navvar')
			@include('alpha.includes.index.banner')

			<!-- Main -->
			<section id="main" class="container">
				@include('alpha.includes.index.major')
				@include('alpha.includes.index.features')
				@include('alpha.includes.index.prices')
			</section>

			@include('alpha.includes.index.subscribe')
			@include('alpha.includes.footer')
		</div>
		@include('alpha.includes.js')
	</body>
</html>
