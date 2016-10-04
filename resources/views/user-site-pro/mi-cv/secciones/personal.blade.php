@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="header">
            Datos personales
        </div>
        <div class="content">
            <form class="form-horizontal">
                <div class="form-group">
                    <label class="col-md-3 control-label">Nombre</label>
                    <div class="col-md-9">
                        <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{ $usuario->nombre }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Fecha de nacimiento</label>
                    <div class="col-md-9">
                        <input type="text" name="fecha_nacimiento" placeholder="Fecha de nacimiento" class="form-control" value="{{ $usuario->fecha_nacimiento->format('d/m/Y')}}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">País</label>
                    <div class="col-md-9">
                        <input type="text" name="pais" placeholder="País" class="form-control" value="{{ $usuario->pais->nombre }}">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">Provincia</label>
                    <div class="col-md-9">
                        <input type="text" name="provincia" placeholder="Provincia" class="form-control" value="{{ $usuario->provincia->nombre }}">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
