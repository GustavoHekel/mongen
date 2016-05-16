<!doctype html>
<html lang="es">
<head>
	<title>Mongen</title>
	@include('user-site.includes.header.meta')
	@include('user-site.includes.header.css')
</head>
<body>
	<div class="wrapper">
		@include('user-site.includes.body.sidebar');
		@include('user-site.includes.body.main');
		@include('user-site.includes.body.js');
	</div>
</body>
</html>