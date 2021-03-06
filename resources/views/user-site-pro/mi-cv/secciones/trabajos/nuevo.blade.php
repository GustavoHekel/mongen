@extends('user-site-pro.layout')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form class="form-horizontal" id="new-trabajo">
				<div class="header">
					<!-- <h4 class="title">
						Nuevo trabajo
						<input type="submit" class="btn btn-warning pull-right" value="Guardar">
					</h4> -->
					<h4 class="title">
						Nuevo trabajo
						<a href="" class="pull-right es-flag">
							<img src="{{ asset("dist/img/flags/ES.png")}}" alt="es" title="Versión en español">
						</a>
						<a href="" class="pull-right en-flag">
							<img src="{{ asset("dist/img/flags/GB.png")}}" alt="en" title="Versión en inglés">
						</a>
					</h4>
				</div>
				<div class="content">
					<div class="form-group">
						<label class="col-sm-2 control-label">Lugar de trabajo</label>
						<div class="col-sm-10">
							<input type="text" name="lugar" placeholder="Lugar de trabajo" class="form-control">
						</div>
					</div>

					<div class="form-group es">
						<label class="col-sm-2 control-label">Puesto (español)</label>
						<div class="col-sm-10">
							<input type="text" name="puesto_es" placeholder="Puesto" class="form-control">
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Puesto (inglés)</label>
						<div class="col-sm-10">
							<input type="text" name="puesto_en" placeholder="Puesto" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Desde</label>
						<div class="col-sm-8">
							@include('user-site-pro.includes.misc.select-period',
							[
							'name' => 'desde',
							'anio' => null,
							'mes' => null
							])
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Hasta</label>
						<div class="col-sm-8">
							@include('user-site-pro.includes.misc.select-period',
							[
							'name' => 'hasta',
							'anio' => null,
							'mes' => null
							])
						</div>

						<div class="col-sm-2">
							<label class="checkbox">
								<span class="icons">
									<span class="first-icon fa fa-square-o"></span>
									<span class="second-icon fa fa-check-square-o"></span>
								</span>
								<input type="checkbox" name="trabajo_actual" data-toggle="checkbox">Trabajo actual
							</label>
						</div>
					</div>

					<div class="form-group es">
						<label class="col-sm-2 control-label">Descripción (español)</label>
						<div class="col-sm-10">
							<textarea name="detalle_es" class="form-control" placeholder="Descripción" cols="30" rows="10"></textarea>
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Descripción (inglés)</label>
						<div class="col-sm-10">
							<textarea name="detalle_en" class="form-control" placeholder="Descripción" cols="30" rows="10"></textarea>
						</div>
					</div>
					<input type="submit" class="btn btn-success btn-fill" value="Guardar">
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
$(function(){

	if ($('input[name="trabajo_actual"]').is(':checked')) {
		$('#anio-hasta, #mes-hasta').attr('disabled', 'disabled');
	}

	$('input[name="trabajo_actual"]').on('toggle', function(){
		$('#anio-hasta, #mes-hasta').prop('disabled', function(i, v) { return !v; });
	});


	$('#new-trabajo').validate({
		rules: {
			lugar: {
				required: true,
				maxlength: 255
			},
			puesto_es: {
				required: true,
				maxlength: 255
			},
			puesto_en: {
				maxlength: 255
			},
			mes_desde: {
				required: true
			},
			anio_desde: {
				required: true
			},
			detalle_es: {
				maxlength: 300
			},
			detalle_en: {
				maxlength: 300
			}
		},
		submitHandler: function(form) {
			$.ajax({
				method: 'post',
				url: '/mi-cv/trabajos',
				data: $(form).serialize(),
				success: function (data) {
					swal({
						title: 'Ingresado',
						text: 'Se ha agregado una nueva experiencia laboral!',
						type: 'success',
						confirmButtonText: 'Ok'
					}, function (isConfirm) {
						window.location.href = '/mi-cv/trabajos';
					});
				}
			});
		}
	});

	$('.en').hide();
    $('.es-flag').hide();

    $('.en-flag, .es-flag').click(function(event){
        event.preventDefault();
        $('.en-flag, .es-flag').toggle();
        $('.es').toggle();
        $('.en').toggle();
    });

});
</script>
@endpush
