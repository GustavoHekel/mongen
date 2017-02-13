@extends('user-site-pro.layout')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<form class="form-horizontal" id="edit-trabajo">
				<div class="header">
					<h4 class="title">
						Detalle trabajo
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
					<div class="form-group">
						<label class="col-sm-2 control-label">Lugar de trabajo</label>
						<div class="col-sm-10">
							<input type="text" name="lugar" placeholder="Lugar de trabajo" class="form-control" value="{{ $trabajo->lugar }}">
						</div>
					</div>

					<div class="form-group es">
						<label class="col-sm-2 control-label">Puesto (español)</label>
						<div class="col-sm-10">
							<input type="text" name="puesto_es" placeholder="Puesto" class="form-control" value="{{ $trabajo->puesto_es }}">
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Puesto (inglés)</label>
						<div class="col-sm-10">
							<input type="text" name="puesto_en" placeholder="Puesto" class="form-control" value="{{ $trabajo->puesto_en }}">
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

					<div class="form-group es">
						<label class="col-sm-2 control-label">Descripción del puesto (español)</label>
						<div class="col-sm-10">
							<textarea name="detalle_es" class="form-control" placeholder="Descripción" cols="30" rows="10">{{ $trabajo->detalle_es }}</textarea>
						</div>
					</div>

					<div class="form-group en">
						<label class="col-sm-2 control-label">Descripción del puesto (inglés)</label>
						<div class="col-sm-10">
							<textarea name="detalle_en" class="form-control" placeholder="Descripción" cols="30" rows="10">{{ $trabajo->detalle_en }}</textarea>
						</div>
					</div>
					<button type="submit" class="btn btn-fill btn-success">Guardar</button>
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
