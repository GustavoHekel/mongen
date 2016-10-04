@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">
                Titulo idiomas
                <a href="#" class="btn btn-success pull-right">Agregar idioma</a>
            </h4>
            <p class="category">
                Subtitulo idiomas
            </p>
        </div>
        <div class="content">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Idioma</th>
                        <th>Nivel</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
$(function() {
    $('#table').dataTable({
        ajax: 'idiomas/listado',
        columns: [
            { data: 'idioma' },
            { data: 'level' },
            { data: 'actions', className: 'td-actions text-right'}
        ]
    })
});
</script>
@endpush
