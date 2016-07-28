<div class="main-panel">
	@include('user-site-pro.includes.body.main.navbar')
	<div class="content">
		<div class="container-fluid">
			@yield('content')
		</div>
	</div>
	@include('user-site-pro.includes.body.main.footer')
  <div class="loading-modal"></div>
</div>
