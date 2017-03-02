@extends('user-site-pro.layout')
@section('content')
<div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="header">
                <h4 class="title">Mi información</h4>
                <p class="category">El progreso de tu CV</p>
            </div>
            <div class="content">
                <div class="list-group">
                    <a href="" class="list-group-item">Estudios<span class="badge @if($usuario->estudios->count()) alert-success @else alert-warning @endif ">{{ $usuario->estudios->count() }}</span></a>
                    <a href="" class="list-group-item">Trabajos<span class="badge @if($usuario->trabajos->count()) alert-success @else alert-warning @endif">{{ $usuario->trabajos->count() }}</span></a>
                    <a href="" class="list-group-item">Skills<span class="badge @if($usuario->skills->count()) alert-success @else alert-warning @endif">{{ $usuario->skills->count() }}</span></a>
                    <a href="" class="list-group-item">Intereses<span class="badge @if($usuario->intereses->count()) alert-success @else alert-warning @endif">{{ $usuario->intereses->count() }}</span></a>
                    <a href="" class="list-group-item">Idiomas<span class="badge @if($usuario->idiomas->count()) alert-success @else alert-warning @endif">{{ $usuario->idiomas->count() }}</span></a>
                    <a href="" class="list-group-item">Cursos<span class="badge @if($usuario->cursos->count()) alert-success @else alert-warning @endif">{{ $usuario->cursos->count() }}</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Estado actual</h4>
                        <p class="category">Tu estado frente a posibles nuevas oportunidades</p>
                    </div>
                    <div class="content">
                        <div class="alert alert-warning">
                            No estás buscando laburo
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Plan actual</h4>
                        <p class="category">Tipo de subscripción</p>
                    </div>
                    <div class="content">
                        <div class="alert alert-warning">
                            FREE: Vencimiento 13/03/2017
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
