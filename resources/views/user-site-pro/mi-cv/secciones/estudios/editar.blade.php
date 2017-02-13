@extends('user-site-pro.layout')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form class="form-horizontal" id="edit-estudio">
				<div class="header">
					<h4 class="title">
						Detalle estudio
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
							<input type="text" name="instituto_es" placeholder="Instituto" class="form-control" value="{{ $estudio->instituto_es }}">
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Instituto (inglés)</label>
						<div class="col-sm-10">
							<input type="text" name="instituto_en" placeholder="Instituto" class="form-control" value="{{ $estudio->instituto_en }}">
						</div>
					</div>

					<div class="form-group es">
						<label class="col-sm-2 control-label">Carrera (español)</label>
						<div class="col-sm-10">
							<input type="text" name="carrera_es" placeholder="Carrera" class="form-control" value="{{ $estudio->carrera_es }}">
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Carrera (inglés)</label>
						<div class="col-sm-10">
							<input type="text" name="carrera_en" placeholder="Carrera" class="form-control" value="{{ $estudio->carrera_en }}">
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Desde</label>
						<div class="col-sm-8">
							@include('user-site-pro.includes.misc.select-period',
							[
							'name' => 'desde',
							'anio' => substr($estudio->desde, 0, 4),
							'mes' => substr($estudio->desde, 4, 2)
							])
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Hasta</label>
						<div class="col-sm-8">
							@include('user-site-pro.includes.misc.select-period',
							[
							'name' => 'hasta',
							'anio' => substr($estudio->hasta, 0, 4),
							'mes' => substr($estudio->hasta, 4, 2)
							])
						</div>

						<div class="col-sm-2">
							<label class="checkbox">
								<span class="icons">
									<span class="first-icon fa fa-square-o"></span>
									<span class="second-icon fa fa-check-square-o"></span>
								</span>
								<input type="checkbox" name="en_curso" data-toggle="checkbox" @if(is_null($estudio->hasta)) checked @endif>En curso
							</label>
						</div>
					</div>

					<div class="form-group">
						<label class="col-sm-2 control-label">Promedio</label>
						<div class="col-sm-10">
							<input type="text" name="promedio" placeholder="Promedio" class="form-control" value="{{ $estudio->promedio }}">
						</div>
					</div>
					<button type="submit" class="btn btn-fill btn-success">Guardar</button>
				</div>
				<div class="footer">
					<div class="stats">
						<i class="fa fa-history"></i> Created {{ $estudio->created_at->diffForHumans() }}
						<br />
						<i class="fa fa-history"></i> Updated {{ $estudio->updated_at->diffForHumans() }}
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

	$('#edit-estudio').validate({
		rules: {
			instituto: {
				required: true,
				maxlength: 255
			},
			carrera: {
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
				method: 'put',
				url: '/mi-cv/estudios/{{ $estudio->id_estudio }}',
				data: $(form).serialize(),
				success: function (data) {
					swal({
						title: 'Actualizado',
						text: 'Los datos fueron actualizados',
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
