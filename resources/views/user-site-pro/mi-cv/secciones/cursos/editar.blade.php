@extends('user-site-pro.index')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form class="form-horizontal" id="edit-curso">
				<div class="header">
					Detalle de curso
					<input type="submit" class="btn btn-warning pull-right save-edit" value="Guardar">
				</div>
				<div class="content">
					<div class="form-group">
						<label class="col-sm-2 control-label">Instituto</label>
						<div class="col-sm-10">
							<input type="text" name="instituto" placeholder="Instituto" class="form-control" value="{{ $curso->instituto }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Nombre</label>
						<div class="col-sm-10">
							<input type="text" name="nombre" placeholder="nombre" class="form-control" value="{{ $curso->nombre }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Desde</label>
						<div class="col-sm-8">
							@include('user-site-pro.includes.misc.select-period',
							[
							'name' => 'desde',
							'anio' => substr($curso->desde, 0, 4),
							'mes' => substr($curso->desde, 4, 2)
							])
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Hasta</label>
						<div class="col-sm-8">
							@include('user-site-pro.includes.misc.select-period',
							[
							'name' => 'hasta',
							'anio' => substr($curso->hasta, 0, 4),
							'mes' => substr($curso->hasta, 4, 2)
							])
						</div>

						<div class="col-sm-2">
							<label class="checkbox">
								<span class="icons">
									<span class="first-icon fa fa-square-o"></span>
									<span class="second-icon fa fa-check-square-o"></span>
								</span>
								<input type="checkbox" name="en_curso" data-toggle="checkbox" @if(is_null($curso->hasta)) checked @endif>En curso
							</label>
						</div>
					</div>

                    <div class="form-group">
						<label class="col-sm-2 control-label">Descripción</label>
						<div class="col-sm-10">
							<input type="text" name="detalle" placeholder="Descripción" class="form-control" value="{{ $curso->detalle }}">
						</div>
					</div>
				</div>
				<div class="footer">
					<div class="stats">
						<i class="fa fa-history"></i> Created {{ $curso->created_at->diffForHumans() }}
						<br />
						<i class="fa fa-history"></i> Updated {{ $curso->updated_at->diffForHumans() }}
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


	$('#edit-curso').validate({
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
		},
		submitHandler: function(form) {
			$.ajax({
				method: 'put',
				url: '/mi-cv/cursos/{{ $curso->id_curso }}',
				data: $(form).serialize(),
				success: function (data) {
					swal({
						title: 'Actualizado',
						text: 'Los datos fueron actualizados',
						type: 'success',
						confirmButtonText: 'Ok'
					}, function (isConfirm) {
						window.location.href = '/mi-cv/cursos';
					});
				}
			})
		}
	});


});
</script>
@endpush
