<!doctype html>
<html lang="es">
<head>
	@include('user-site-pro.includes.header.meta')
	@include('user-site-pro.includes.header.css')
	<title>Mongen</title>
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
