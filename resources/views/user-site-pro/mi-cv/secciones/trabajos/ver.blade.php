@extends('user-site-pro.index')
@section('content')
	<div class="row">
		<div class="col-md-12">
            <div class="card">
                <div class="header">
                    Detalle de trabajo
                    <a href="{{ $trabajo->id_trabajo }}/editar" class="btn btn-primary pull-right">Editar</a>
                </div>
                <div class="content">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-2 control-label">Lugar de trabajo</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->lugar }}</p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Puesto</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->puesto }}</p>
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

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Detalle</label>
                            <div class="col-sm-10">
                                <p class="form-control-static">{{ $trabajo->detalle or '-' }}</p>
                            </div>
                        </div>
                    </form>
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
