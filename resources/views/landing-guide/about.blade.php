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
        <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
        <script type="text/javascript" src="{{ asset("dist/jquery.gomap-1.3.3.min.js")}}"></script> 
        <script type="text/javascript" src="{{ asset("dist/jquery-1.11.1.js")}}"></script> 
        
        

        <script>

                $(document).ready(function() {

                        $("#mapa").goMap({

                                latitude:-34.610278, 
                                longitude:-58.485913,
                                zoom:16,
                                maptype:"TERRAIN",
                                scaleControl:true



                        });

                        $.goMap.createMarker({

                                latitude:-34.610278, 
                                longitude:-58.485913,
                                title: "Mongen",
                                html:{

                                        content: "<h2 style='color:blue'>Buenos Aires, Argentina</h2>",
                                        popup:true
                                        }

                        });


                }); 

        </script>
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
		@include('landing-guide.includes.about.hero')
		@include('landing-guide.includes.about.us')
		@include('landing-guide.includes.index.testimonials')
		@include('landing-guide.includes.index.subscribe')
		@include('landing-guide.includes.index.footer')
		@include('landing-guide.includes.body.js')
	</div>
</body>
