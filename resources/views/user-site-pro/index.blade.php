<!doctype html>
<html lang="es">
<head>
	<title>Mongen</title>
	@include('user-site-pro.includes.header.meta')
	@include('user-site-pro.includes.header.css')
</head>
<body>
	<div id="app" class="wrapper">
		@include('user-site-pro.includes.body.sidebar')
		@include('user-site-pro.includes.body.main')
	</div>
</body>
@include('user-site-pro.includes.body.js')
@stack('scripts')
</html>
