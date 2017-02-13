@extends('user-site-pro.layout')
@section('content')
	<div class="row">
		<div class="col-md-12">
            <div class="card">
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
                </div>
                <div class="content">
                    <form class="form-horizontal">

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Lugar de trabajo</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->lugar }}</p>
                            </div>
                        </div>

                        <div class="form-group es">
                            <label class="col-sm-2 control-label">Puesto (español)</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->puesto_es }}</p>
                            </div>
                        </div>

						<div class="form-group en">
                            <label class="col-sm-2 control-label">Puesto (inglés)</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->puesto_en }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Desde</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->desde_text }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Hasta</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->hasta_text }}</p>
                            </div>
                        </div>

                        <div class="form-group es">
                            <label class="col-sm-2 control-label">Detalle (español)</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->detalle_es or '-' }}</p>
                            </div>
                        </div>

						<div class="form-group en">
                            <label class="col-sm-2 control-label">Detalle (inglés)</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->detalle_en or '-' }}</p>
                            </div>
                        </div>
                    </form>
					<a href="{{ $trabajo->id_trabajo }}/editar" class="btn btn-primary btn-fill">Editar</a>
                </div>
                <div class="footer">
                    <div class="stats">
                        <i class="fa fa-history"></i> Created {{ $trabajo->created_at->diffForHumans() }}
                        <br />
                        <i class="fa fa-history"></i> Updated {{ $trabajo->updated_at->diffForHumans() }}
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
