<body>
	<header role="banner" id="fh5co-header">
			<div class="container">
				<!-- <div class="row"> -->
			    <nav class="navbar navbar-default">
		        <div class="navbar-header">
		        	<!-- Mobile Toggle Menu Button -->
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
		          	<a class="navbar-brand" href="index.php">Mongen</a> 
		        </div>
		        <div id="navbar" class="navbar-collapse collapse">
		          <ul class="nav navbar-nav navbar-right">
		            <li class="active"><a href="#" data-nav-section="home"><span>Home</span></a></li>
		            <!--<li><a href="#" data-nav-section="about"><span>About</span></a></li>-->
		            <li><a href="#" data-nav-section="services"><span>Services</span></a></li>
		            <li><a href="#" data-nav-section="features"><span>Features</span></a></li>
		            <li><a href="#" data-nav-section="testimonials"><span>Testimonials</span></a></li>
		            <li><a href="#" data-nav-section="pricing"><span>Pricing</span></a></li>
		            <!--<li><a href="#" data-nav-section="press"><span>Press</span></a></li>-->
		          </ul>
		        </div>
			    </nav>
			  <!-- </div> -->
		  </div>
	</header>

	@include('landing.content.home')

	@include('landing.content.services')

        @include('landing.content.features')

	@include('landing.content.testimonials')

	@include('landing.content.pricing')

	@include('landing.content.footer')

	
	<!-- For demo purposes Only ( You may delete this anytime :-) -->
<!--	<div id="colour-variations">
		<a class="option-toggle"><i class="icon-gear"></i></a>
		<h3>Preset Colors</h3>
		<ul>
			<li><a href="javascript: void(0);" data-theme="style"></a></li>
			<li><a href="javascript: void(0);" data-theme="pink"></a></li>
			<li><a href="javascript: void(0);" data-theme="blue"></a></li>
			<li><a href="javascript: void(0);" data-theme="turquoise"></a></li>
			<li><a href="javascript: void(0);" data-theme="orange"></a></li>
			<li><a href="javascript: void(0);" data-theme="lightblue"></a></li>
			<li><a href="javascript: void(0);" data-theme="brown"></a></li>
			<li><a href="javascript: void(0);" data-theme="green"></a></li>
		</ul>
	</div>-->
	<!-- End demo purposes only -->

	
	<!-- jQuery -->
	<script src="{{{ asset('/dist/plugins/crew/js/jquery.min.js')}}}"></script>
	<!-- jQuery Easing -->
	<script src="{{{ asset('/dist/plugins/crew/js/jquery.easing.1.3.js')}}}"></script>
	<!-- Bootstrap -->
	<script src="{{{ asset('/dist/plugins/crew/js/bootstrap.min.js')}}}"></script>
	<!-- Waypoints -->
	<script src="{{{ asset('/dist/plugins/crew/js/jquery.waypoints.min.js')}}}"></script>
	<!-- Owl Carousel -->
	<script src="{{{ asset('/dist/plugins/crew/js/owl.carousel.min.js')}}}"></script>

	<!-- For demo purposes only styleswitcher ( You may delete this anytime ) -->
	<script src="{{{ asset('/dist/plugins/crew/js/jquery.style.switcher.js')}}}"></script>
<!--	<script>
	$(function(){
		$('#colour-variations ul').styleSwitcher({
			defaultThemeId: 'theme-switch',
			hasPreview: false,
			cookie: {
	          	expires: 30,
	          	isManagingLoad: true
	      	}
		});	
		$('.option-toggle').click(function() {
			$('#colour-variations').toggleClass('sleep');
		});
	});
	</script>-->
	<!-- End demo purposes only -->

	<!-- Main JS (Do not remove) -->
	<script src="{{{ asset('/dist/plugins/crew/js/main.js')}}}"></script>

</body>