<!-- jQuery -->
<script src="{{ asset("dist/plugins/guide/js/jquery.min.js")}}"></script>
<!-- jQuery Easing -->
<script src="{{ asset("dist/plugins/guide/js/jquery.easing.1.3.js")}}"></script>
<!-- jQuery Validator -->
<script src="{{ asset("dist/bower_components/jquery-validation/dist/jquery.validate.min.js")}}"></script>
<!-- Bootstrap -->
<script src="{{ asset("dist/plugins/guide/js/bootstrap.min.js")}}"></script>
<!-- Waypoints -->
<script src="{{ asset("dist/plugins/guide/js/jquery.waypoints.min.js")}}"></script>
<!-- Flexslider -->
<script src="{{ asset("dist/plugins/guide/js/jquery.flexslider-min.js")}}"></script>
<!-- Magnific Popup -->
<script src="{{ asset("dist/plugins/guide/js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{ asset("dist/plugins/guide/js/magnific-popup-options.js")}}"></script>

<!-- Main JS (Do not remove) -->
<script src="{{ asset("dist/plugins/guide/js/main.js")}}"></script>

<script>
	$(document).ready(function(){

		$('#subscripcion-div-mensaje-true').hide();
		$('#subscripcion-div-mensaje-false').hide();

		$('#subscripciones').validate({
			rules : {
				email : {
					required: true,
					email: true
				}
			},
			messages : {
				email : {
					required : '',
					email: ''
				}
			},
			errorClass: "btn-danger",
			validClass: "btn-primary",
			errorPlacement: function(error, element) {
				$('#errores').html(error);
			},
			highlight: function(element, errorClass, validClass) {
				$(element).addClass(errorClass).removeClass(validClass);
				$(element.form).find("label[for=" + element.id + "]")
				.addClass(errorClass);
			},
			unhighlight: function(element, errorClass, validClass) {
				$(element).removeClass(errorClass).addClass(validClass);
				$(element.form).find("label[for=" + element.id + "]")
				.removeClass(errorClass);
			},
			submitHandler : function(form){
				$.post('newsletter', $(form).serializeArray(), function(data){
					$('#subscripcion-cuerpo').hide();
					if (data.activo == true) {
						$('#subscripcion-div-mensaje-false').hide();
						$('#subscripcion-div-mensaje-true').fadeIn();
					} else {
						$('#subscripcion-div-mensaje-true').hide();
						$('#subscripcion-div-mensaje-false').fadeIn();
					}
				})
			}
		});
	});
</script>