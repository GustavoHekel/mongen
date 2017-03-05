@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">

    <div class="card">
        <div class="header">
            <h4 class="title">
                Mis trabajos
                <a href="/mi-cv/trabajos/nuevo" class="btn btn-success pull-right">Agregar trabajo</a>
            </h4>
            <p class="category">
                Aquí se muestran todos tus trabajos registrados.
            </p>
        </div>
        <div class="content">
            <app-trabajos></app-trabajos>
        </div>
    </div>
</div>

@endsection
