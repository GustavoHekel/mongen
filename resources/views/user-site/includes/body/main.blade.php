<div class="main-panel">
	@include('user-site.includes.body.main.navbar')
	<div class="content">
		<div class="container-fluid">
			@yield('content')
		</div>
	</div>
	@include('user-site.includes.body.main.footer')
</div>