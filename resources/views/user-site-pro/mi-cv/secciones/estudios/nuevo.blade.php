@extends('user-site-pro.layout')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form class="form-horizontal" id="new-estudio">
				<div class="header">
					<h4 class="title">
						Nuevo estudio
						<a href="" class="pull-right es-flag">
							<img src="{{ asset("dist/img/flags/ES.png")}}" alt="es" title="Versión en español">
						</a>
						<a href="" class="pull-right en-flag">
							<img src="{{ asset("dist/img/flags/GB.png")}}" alt="en" title="Versión en inglés">
						</a>
					</h4>
					<!-- <input type="submit" class="btn btn-warning pull-right save-edit" value="Guardar"> -->
				</div>
				<div class="content">

					<div class="form-group es">
						<label class="col-sm-2 control-label">Instituto (español)</label>
						<div class="col-sm-10">
							<input type="text" name="instituto_es" placeholder="Instituto" class="form-control">
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Instituto (inglés)</label>
						<div class="col-sm-10">
							<input type="text" name="instituto_en" placeholder="Instituto" class="form-control">
						</div>
					</div>

					<div class="form-group es">
						<label class="col-sm-2 control-label">Carrera (español)</label>
						<div class="col-sm-10">
							<input type="text" name="carrera_es" placeholder="Carrera" class="form-control">
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Carrera (inglés)</label>
						<div class="col-sm-10">
							<input type="text" name="carrera_en" placeholder="Carrera" class="form-control">
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
								<input type="checkbox" name="en_curso" data-toggle="checkbox">En curso
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Promedio</label>
						<div class="col-sm-10">
							<input type="text" name="promedio" placeholder="Promedio" class="form-control">
						</div>
					</div>
					<button type="submit" class="btn btn-fill btn-success">Guardar</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection

@push('scripts')
<script>
$(function(){

	if ($('input[name="en_curso"]').is(':checked')) {
		$('#anio-hasta, #mes-hasta').attr('disabled', 'disabled');
	}

	$('input[name="en_curso"]').on('toggle', function(){
		$('#anio-hasta, #mes-hasta').prop('disabled', function(i, v) { return !v; });
	});

	$('#new-estudio').validate({
		rules: {
			instituto_es: {
				required: true,
				maxlength: 255
			},
			carrera_es: {
				required: true,
				maxlength: 255
			},
			instituto_en: {
				required: true,
				maxlength: 255
			},
			carrera_en: {
				required: true,
				maxlength: 255
			},
			mes_desde: {
				required: true
			},
			anio_desde: {
				required: true
			}
		},
		submitHandler: function(form) {
			$.ajax({
				method: 'post',
				url: '/mi-cv/estudios',
				data: $(form).serialize(),
				success: function (data) {
					swal({
						title: 'Ingresado',
						text: 'Se ha agregado un nuevo estudio!',
						type: 'success',
						confirmButtonText: 'Ok'
					}, function (isConfirm) {
						window.location.href = '/mi-cv/estudios';
					});
				}
			})
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
