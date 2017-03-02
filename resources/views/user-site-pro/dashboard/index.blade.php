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
                    <a href="/mi-cv/trabajos" class="list-group-item">Trabajos<span class="badge @if($usuario->trabajos->count()) alert-success @else alert-warning @endif">{{ $usuario->trabajos->count() }}</span></a>
                    <a href="/mi-cv/estudios" class="list-group-item">Estudios<span class="badge @if($usuario->estudios->count()) alert-success @else alert-warning @endif ">{{ $usuario->estudios->count() }}</span></a>
                    <a href="/mi-cv/cursos" class="list-group-item">Cursos<span class="badge @if($usuario->cursos->count()) alert-success @else alert-warning @endif">{{ $usuario->cursos->count() }}</span></a>
                    <a href="/mi-cv/idiomas" class="list-group-item">Idiomas<span class="badge @if($usuario->idiomas->count()) alert-success @else alert-warning @endif">{{ $usuario->idiomas->count() }}</span></a>
                    <a href="/mi-cv/intereses" class="list-group-item">Intereses<span class="badge @if($usuario->intereses->count()) alert-success @else alert-warning @endif">{{ $usuario->intereses->count() }}</span></a>
                    <a href="/mi-cv/skills" class="list-group-item">Skills<span class="badge @if($usuario->skills->count()) alert-success @else alert-warning @endif">{{ $usuario->skills->count() }}</span></a>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-8">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Estado</h4>
                        <p class="category">Tu estado frente a posibles nuevas oportunidades</p>
                    </div>
                    <div class="content">
                        @if (isset ($usuario->estado))
                            @if ($usuario->estado->id_estado == 1)
                            <div class="alert alert-info">

                            @elseif ($usuario->estado->id_estado == 2)
                            <div class="alert alert-warning">

                            @elseif ($usuario->estado->id_estado == 3)
                            <div class="alert alert-success">
                            @endif
                        @endif
                            {{ $usuario->estado->estado->descripcion }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Plan</h4>
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

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">URL</h4>
                        <p class="category">Compartí tu CV mediante el siguiente link</p>
                    </div>
                    <div class="content">
                        <div class="alert alert-warning">
                            {{ $usuario->url }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
