@extends('user-site-pro.layout')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form class="form-horizontal" id="edit-curso">
				<div class="header">
					<h4 class="title">
						Detalle curso
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
						<label class="col-sm-2 control-label">Instituto</label>
						<div class="col-sm-10">
							<input type="text" name="instituto" placeholder="Instituto" class="form-control" value="{{ $curso->instituto }}">
						</div>
					</div>

					<div class="form-group es">
						<label class="col-sm-2 control-label">Nombre (español)</label>
						<div class="col-sm-10">
							<input type="text" name="nombre_es" placeholder="Nombre" class="form-control" value="{{ $curso->nombre_es }}">
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Nombre (inglés)</label>
						<div class="col-sm-10">
							<input type="text" name="nombre_en" placeholder="Nombre" class="form-control" value="{{ $curso->nombre_en }}">
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

                    <div class="form-group es">
						<label class="col-sm-2 control-label">Descripción (español)</label>
						<div class="col-sm-10">
							<input type="text" name="detalle_es" placeholder="Descripción" class="form-control" value="{{ $curso->detalle_es }}">
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Descripción (inglés)</label>
						<div class="col-sm-10">
							<input type="text" name="detalle_en" placeholder="Descripción" class="form-control" value="{{ $curso->detalle_en }}">
						</div>
					</div>

					<input type="submit" class="btn btn-success btn-fill save-edit" value="Guardar">
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
		rules: {
			instituto: {
				required: true,
				maxlength: 255
			},
			nombre_es: {
				required: true,
				maxlength: 255
			},
			nombre_en: {
				maxlength: 255
			},
			mes_desde: {
				required: true
			},
			anio_desde: {
				required: true
			},
			detalle_es: {
				maxlength: 255
			},
			detalle_en: {
				maxlength: 255
			}
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
