@extends('user-site-pro.index')
@section('content')
	<div class="row">
		<div class="col-md-12">
            <div class="card">
                <div class="header">
                    Detalle de estudio
                    <a href="{{ $estudio->id_estudio }}/editar" class="btn btn-primary pull-right">Editar</a>
                </div>
                <div class="content">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Instituto</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $estudio->instituto }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Carrera</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $estudio->carrera }}</p>
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
