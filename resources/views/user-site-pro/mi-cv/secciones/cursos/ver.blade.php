@extends('user-site-pro.index')
@section('content')
	<div class="row">
		<div class="col-md-12">
            <div class="card">
                <div class="header">
                    Detalle de curso
                    <a href="{{ $curso->id_curso }}/editar" class="btn btn-primary pull-right">Editar</a>
                </div>
                <div class="content">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Instituto</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->instituto }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Nombre</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->nombre }}</p>
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

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Detalle</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $curso->detalle or '-' }}</p>
                            </div>
                        </div>
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
