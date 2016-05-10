<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Gustavo D. Hekel</title>

	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

	<style type="text/css">
		/* COLORES
			FONDO: #575757;
			HEADER : #20201e;
			BORDES: #e2ac32;
			FONDO PRINCIPAL: #dfdfdf;
			*/
			body {
				background-color: #575757;
				font-family: 'Oswald', sans-serif;
				width: 96% !important;
				margin: 0 auto;
			}

			.header {
				background-color: #20201e;
				text-align: center;
				padding: 40px;
				border-bottom: 2px solid #e2ac32;
			}

			.foto-container{
				border: solid 3px #e2ac32;
				display: inline-block;
				border-radius: 50%;
				padding: 3px;
			}

			.foto {
				border: 2px solid #e2ac32;
				width: 12em;
				height: 12em;
				margin: 0 auto;
			}

			.ocupacion, .entidad {
				color: #e2ac32;
			}

			.main {
				border-top: 3px solid #20201e;
				background-color: #dfdfdf;
			}

			.left-col, .right-col {
				padding-top: 40px;
				padding-left: 30px;
				padding-bottom: 40px;
			}

			.icon {
				border: 1px solid #20201e;
				display: inline-block;
				border-radius: 50%;
				float: left;
			}

			.icon-small {

			}

			.icon-main {
				color: #dfdfdf;
			}

			.icon-background {
				color: #20201e;	
			}

			.section {
				padding-bottom: 30px;
			}

			.section-header {
				padding-bottom: 30px;
			}

			.section-name {
				font-size: 23px;
				border-bottom: 3px solid #20201e;
				padding-top: 10px;
				margin-left: 60px;
				display: block;
			}

			.section-content {

			}

			.dates {
				text-align: right;
				font-size: 1.3em;
			}

			.timeline {
				border-left: solid 2px #e2ac32;
				font-size: 1.3em;
			}

			.contact-item {
				padding-left: 15px;
				padding-bottom: 20px;
			}

			.contact-text {
				padding-left: 10px;
				padding-top: 5px;
				/*display: block;*/
			}

			.colormio{
				color:#dfdfdf; 


			}

			.negrita{

				font-weight: bold; 
			}

		</style>
	</head>
	<body>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 header">
				<div class="foto-container">
					<img src="http://i.imgur.com/MblZDYhb.jpg" alt="Gustavo" class="img-responsive img-circle foto">
				</div>
				<h1 class="nombre">GUSTAVO D. HEKEL</h1>
				<h3 class="ocupacion">PHP Developer</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8 col-md-offset-2 main">
				<div class="row">
					<div class="col-md-8 left-col">

						<div class="section">
							<div class="section-header">
								<span class="fa-stack fa-2x icon">
									<i class="fa fa-circle fa-stack-2x icon-background"></i>
									<i class="fa fa-user fa-stack-1x icon-main"></i>
								</span>
								<span class="section-name">PRESENTACIÓN</span>
							</div>
							<div class="section-content">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam libero mauris, pretium eget scelerisque sit amet, porta et quam. Pellentesque in nunc vitae orci porttitor commodo a in nunc. Duis et gravida lacus. Vestibulum porta ornare lacus, id aliquet felis facilisis id. Donec bibendum nec risus et fermentum. Cras et dui ornare dui placerat finibus. Pellentesque posuere odio ipsum. Duis at massa non nisl interdum rhoncus a vitae arcu. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
							</div>
						</div>

						<div class="section">
							<span class="fa-stack fa-2x icon">
								<i class="fa fa-circle fa-stack-2x icon-background"></i>
								<i class="fa fa-graduation-cap fa-stack-1x icon-main"></i>
							</span>
							<span class="section-name">EDUCACIÓN</span>
						</div>
						<div class="section-content">
							
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4 dates">
									(2010 - 2015)
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 timeline">
									Ingeniería en sistemas de información
									<p class="entidad">Universidad Tecnológica Nacional</p>
								</div>



								<div class="col-md-4 col-sm-4 col-xs-4 dates">
									(2010 - 2015)
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 timeline">
									Ingeniería en Electrónica
									<p class="entidad">Universidad Tecnológica Nacional</p>
								</div>



								<div class="col-md-4 col-sm-4 col-xs-4 dates">
									(2010 - 2015)
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 timeline">
									Tecnicatura en Adm. de empresas
									<p class="entidad">E.N.E.T. Nº 24 Defensa de Buenos Aires</p>
								</div>
							</div>

						</div>

						<div class="section">
							<span class="fa-stack fa-2x icon">
								<i class="fa fa-circle fa-stack-2x icon-background"></i>
								<i class="fa fa-briefcase fa-stack-1x icon-main"></i>
							</span>
							<span class="section-name">EXPERIENCIA PROFESIONAL</span>
						</div>
						<div class="section-content">
							
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4 dates">
									(2010 - 2015)
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 timeline">
									Desarrollador PHP
									<p class="entidad">Ministerio de Salud de la Nación</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4 dates">
									(2010 - 2015)
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 timeline">
									Analista Funcional
									<p class="entidad">Prüne</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4 dates">
									(2010 - 2015)
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 timeline">
									Soporte Técnico
									<p class="entidad">IP Address</p>
								</div>
							</div>

						</div>
						<div class="section">
							<span class="fa-stack fa-2x icon">
								<i class="fa fa-circle fa-stack-2x icon-background"></i>
								<i class="fa fa-university fa-stack-1x icon-main"></i>
							</span>
							<span class="section-name">CONOCIMIENTOS</span>
						</div>
						<div class="section-content">
							
							<div class="row">
								<div  class="col-md-4 col-sm-4 dates">
									(2010 - 2015)
								</div>
								<div class="col-md-8 col-sm-8 timeline">
									Desarrollador PHP
									<p class="entidad">Ministerio de Salud de la Nación</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4 dates">
									(2010 - 2015)
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 timeline">
									Analista Funcional
									<p class="entidad">Prüne</p>
								</div>
							</div>

							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-4 dates">
									(2010 - 2015)
								</div>
								<div class="col-md-8 col-sm-8 col-xs-8 timeline">
									Soporte Técnico
									<p class="entidad">IP Address</p>
								</div>
							</div>

						</div>
					</div>
					<div class="col-md-4 right-col">
						

						<div class="section">
							
							<div class="section-header">
								<span class="fa-stack fa-2x icon">
									<i class="fa fa-circle fa-stack-2x icon-background"></i>
									<i class="fa fa-location-arrow fa-stack-1x icon-main"></i>
								</span>
								<span class="section-name">DATOS PERSONALES</span>
							</div>

							<div class="section-content">
								
								<div class="row">
									<div class="col-md-offset-1 col-sm-offset-2 col-md-5 col-sm-4 negrita">
										<h2>Edad</h2>
									</div>
									<div class="col-md-6 col-sm-6">
										<h2>27 años</h2>
									</div>
								</div>

								<div class="row">
									<div class="col-md-offset-1 col-sm-offset-2 col-md-5 col-sm-4 negrita">
										Nacionalidad									
									</div>
									<div class="col-md-6 col-sm-6">
										Argentina
									</div>
								</div>

								<div class="row"> 
									<div class=" col-md-offset-1 col-sm-offset-2 col-md-5 col-sm-4 negrita">
										<strong>Estado civil</strong>
									</div>
									<div class="col-md-6 col-sm-6">
										Concubinato
									</div>
								</div>





							</div>
						</div>

						<div class="section">
							
							<div class="section-header">
								<span class="fa-stack fa-2x icon">
									<i class="fa fa-circle fa-stack-2x icon-background"></i>
									<i class="fa fa-location-arrow fa-stack-1x icon-main"></i>
								</span>
								<span class="section-name">CONTACTO</span>
							</div>

							<div class="section-content">
								
								<div class="contact-item">
									<span class="fa-stack icon-small">
										<i class="fa fa-circle fa-stack-2x icon-background"></i>
										<i class="fa fa-phone fa-stack-1x icon-main"></i>
									</span>
									<span class="contact-text">11 30 12 15 10</span>
								</div>

								<div class="contact-item">
									<span class="fa-stack icon-small">
										<i class="fa fa-circle fa-stack-2x icon-background"></i>
										<i class="fa fa-laptop fa-stack-1x icon-main"></i>
									</span>
									<span class="contact-text">www.gustavohekel.com.ar</span>
								</div>

								<div class="contact-item">
									<span class="fa-stack icon-small">
										<i class="fa fa-circle fa-stack-2x icon-background"></i>
										<i class="fa fa-envelope fa-stack-1x icon-main"></i>
									</span>
									<span class="contact-text">gustavo.hekel@gmail.com</span>
								</div>

								<div class="contact-item">
									<span class="fa-stack icon-small">
										<i class="fa fa-circle fa-stack-2x icon-background"></i>
										<i class="fa fa-map-marker fa-stack-1x icon-main"></i>
									</span>
									<span class="contact-text">Ciudad Autónoma de Buenos Aires</span>
								</div>

								<div class="contact-item">
									<span class="fa-stack icon-small">
										<i class="fa fa-circle fa-stack-2x icon-background"></i>
										<i class="fa fa-globe fa-stack-1x icon-main"></i>
									</span>
									<span class="contact-text">Argentina</span>
								</div>



							</div>
						</div>    

						<div class="section">
							<div class="section-header">
								<span class="fa-stack fa-2x icon">
									<i class="fa fa-circle fa-stack-2x icon-background"></i>
									<i class="fa fa-comments fa-stack-1x icon-main"></i>
								</span>
								<span class="section-name">LENGUAJES</span>
							</div>
							<div class="section-content">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1 negrita">
										Inglés
									</div>
									<div class="col-md-6 col-sm-6">
										<div style="width: 100%; height: 15px; border-radius: 10px; border: solid 2px #20201e;">
											<div style="width: 90%; background-color: #20201e; height: 11px; border-radius: 10px;">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="section-content">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1 negrita">
										Francés
									</div>
									<div class="col-md-6 col-sm-6">
										<div style="width: 100%; height: 15px; border-radius: 10px; border: solid 2px #20201e;">
											<div style="width: 60%; background-color: #20201e; height: 11px; border-radius: 10px;">
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="section-content">
								<div class="row">
									<div class="col-md-4 col-sm-4 col-md-offset-1 col-sm-offset-1 negrita">
										Italiano
									</div>
									<div class="col-md-6 col-sm-6">
										<div style="width: 100%; height: 15px; border-radius: 10px; border: solid 2px #20201e;">
											<div style="width: 40%; background-color: #20201e; height: 11px; border-radius: 10px;">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>