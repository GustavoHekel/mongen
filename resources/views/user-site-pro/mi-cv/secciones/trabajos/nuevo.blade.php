@extends('user-site-pro.index')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form class="form-horizontal" id="new-trabajo">
				<div class="header">
					<h4 class="title">
						Nuevo trabajo
						<input type="submit" class="btn btn-warning pull-right" value="Guardar">
					</h4>
				</div>
				<div class="content">
					<div class="form-group">
						<label class="col-sm-2 control-label">Lugar de trabajo</label>
						<div class="col-sm-10">
							<input type="text" name="lugar" placeholder="Lugar de trabajo" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Puesto</label>
						<div class="col-sm-10">
							<input type="text" name="puesto" placeholder="Puesto" class="form-control">
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

					<div class="form-group">
						<label class="col-sm-2 control-label">Descripción</label>
						<div class="col-sm-10">
							<textarea name="detalle" class="form-control" placeholder="Descripción" cols="30" rows="10"></textarea>
						</div>
					</div>
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
			puesto: {
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


});
</script>
@endpush
