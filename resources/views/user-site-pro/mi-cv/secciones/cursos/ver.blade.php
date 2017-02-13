@extends('user-site-pro.layout')
@section('content')
	<div class="row">
		<div class="col-md-12">
            <div class="card">
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
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Instituto</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->instituto }}</p>
                            </div>
                        </div>

                        <div class="form-group es">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->nombre_es }}</p>
                            </div>
                        </div>

						<div class="form-group en">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->nombre_en }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Desde</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->desde_text }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hasta</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->hasta_text }}</p>
                            </div>
                        </div>

                        <div class="form-group es">
                            <label class="col-sm-2 control-label">Detalle</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->detalle_es or '-' }}</p>
                            </div>
                        </div>

						<div class="form-group en">
                            <label class="col-sm-2 control-label">Detalle</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->detalle_en or '-' }}</p>
                            </div>
                        </div>
						<a href="{{ $curso->id_curso }}/editar" class="btn btn-primary btn-fill">Editar</a>
                    </form>
                </div>
                <div class="footer">
                    <div class="stats">
                        <i class="fa fa-history"></i> Created {{ $curso->created_at->diffForHumans() }}
                        <br />
                        <i class="fa fa-history"></i> Updated {{ $curso->updated_at->diffForHumans() }}
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
