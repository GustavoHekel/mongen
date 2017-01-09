@extends('user-site-pro.index')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form class="form-horizontal" id="new-curso">
				<div class="header">
					Nuevo curso
					<input type="submit" class="btn btn-warning pull-right save-edit" value="Guardar">
				</div>
				<div class="content">
					<div class="form-group">
						<label class="col-sm-2 control-label">Instituto</label>
						<div class="col-sm-10">
							<input type="text" name="instituto" placeholder="Instituto" class="form-control">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" name="nombre" placeholder="Nombre" class="form-control">
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
						<label class="col-sm-2 control-label">Descripción</label>
						<div class="col-sm-10">
							<input type="text" name="detalle" placeholder="Descripcion" class="form-control">
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

	if ($('input[name="en_curso"]').is(':checked')) {
		$('#anio-hasta, #mes-hasta').attr('disabled', 'disabled');
	}

	$('input[name="en_curso"]').on('toggle', function(){
		$('#anio-hasta, #mes-hasta').prop('disabled', function(i, v) { return !v; });
	});


	$('#new-curso').validate({
		rules: {
			instituto: {
				required: true,
				maxlength: 255
			},
			nombre: {
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
				url: '/mi-cv/cursos',
				data: $(form).serialize(),
				success: function (data) {
					swal({
						title: 'Ingresado',
						text: 'Se ha agregado un nuevo curso!',
						type: 'success',
						confirmButtonText: 'Ok'
					}, function (isConfirm) {
						window.location.href = '/mi-cv/cursos';
					});
				}
			});
		}
	});


});
</script>
@endpush
