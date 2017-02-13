@extends('user-site-pro.layout')
@section('content')
	<div class="row">
		<div class="col-md-12">
            <div class="card">
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
                </div>
                <div class="content">
                    <form class="form-horizontal">

						<div class="form-group es">
                            <label class="col-sm-2 control-label">Instituto (español)</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $estudio->instituto_es }}</p>
                            </div>
                        </div>

						<div class="form-group en">
                            <label class="col-sm-2 control-label">Instituto (inglés)</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $estudio->instituto_en }}</p>
                            </div>
                        </div>

                        <div class="form-group es">
                            <label class="col-sm-2 control-label">Carrera (español)</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $estudio->carrera_es }}</p>
                            </div>
                        </div>

						<div class="form-group en">
                            <label class="col-sm-2 control-label">Carrera (inglés)</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $estudio->carrera_en }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Desde</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $estudio->desde_text }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hasta</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $estudio->hasta_text }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Promedio</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $estudio->promedio or '-' }}</p>
                            </div>
                        </div>
                    </form>
					<a href="{{ $estudio->id_estudio }}/editar" class="btn btn-primary btn-fill">Editar</a>
                </div>
                <div class="footer">
                    <div class="stats">
                        <i class="fa fa-history"></i> Created {{ $estudio->created_at->diffForHumans() }}
                        <br />
                        <i class="fa fa-history"></i> Updated {{ $estudio->updated_at->diffForHumans() }}
                    </div>
                </div>
            </div>
        </div>
	</div>
@endsection

@push('scripts')
<script>
$(function(){
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
