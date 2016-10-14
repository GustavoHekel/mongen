@extends('user-site-pro.index')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form class="form-horizontal" id="edit-trabajo">
				<div class="header">
					Detalle de trabajo
					<input type="submit" class="btn btn-warning pull-right save-edit" value="Guardar">
				</div>
				<div class="content">
					<div class="form-group">
						<label class="col-sm-2 control-label">Lugar de trabajo</label>
						<div class="col-sm-10">
							<input type="text" name="lugar" placeholder="Lugar de trabajo" class="form-control" value="{{ $trabajo->lugar }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Puesto</label>
						<div class="col-sm-10">
							<input type="text" name="puesto" placeholder="Puesto" class="form-control" value="{{ $trabajo->puesto }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Desde</label>
						<div class="col-sm-8">
							@include('user-site-pro.includes.misc.select-period',
							[
							'name' => 'desde',
							'anio' => substr($trabajo->desde, 0, 4),
							'mes' => substr($trabajo->desde, 4, 2)
							])
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Hasta</label>
						<div class="col-sm-8">
							@include('user-site-pro.includes.misc.select-period',
							[
							'name' => 'hasta',
							'anio' => substr($trabajo->hasta, 0, 4),
							'mes' => substr($trabajo->hasta, 4, 2)
							])
						</div>

						<div class="col-sm-2">
							<label class="checkbox">
								<span class="icons">
									<span class="first-icon fa fa-square-o"></span>
									<span class="second-icon fa fa-check-square-o"></span>
								</span>
								<input type="checkbox" name="trabajo_actual" data-toggle="checkbox" @if(is_null($trabajo->hasta)) checked @endif>Trabajo actual
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Descripción del puesto</label>
						<div class="col-sm-10">
							<input type="text" name="detalle" placeholder="Descripción del puesto" class="form-control" value="{{ $trabajo->detalle }}">
						</div>
					</div>
				</div>
				<div class="footer">
					<div class="stats">
						<i class="fa fa-history"></i> Created {{ $trabajo->created_at->diffForHumans() }}
						<br />
						<i class="fa fa-history"></i> Updated {{ $trabajo->updated_at->diffForHumans() }}
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


	$('#edit-trabajo').validate({
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
		},
		submitHandler: function(form) {
			$.ajax({
				method: 'put',
				url: '/mi-cv/trabajos/{{ $trabajo->id_trabajo }}',
				data: $(form).serialize(),
				success: function (data) {
					swal({
						title: 'Actualizado',
						text: 'Los datos fueron actualizados',
						type: 'success',
						confirmButtonText: 'Ok'
					}, function (isConfirm) {
						window.location.href = '/mi-cv/trabajos';
					});
				}
			})
		}
	});


});
</script>
@endpush
