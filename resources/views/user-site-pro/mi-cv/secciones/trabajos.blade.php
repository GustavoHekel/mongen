@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">
                Titulo trabajos
                <a href="#" class="btn btn-success pull-right">Agregar trabajo</a>
            </h4>
            <p class="category">
                Subtitulo trabajos
            </p>
        </div>
        <div class="content">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Empresa</th>
                        <th>Puesto</th>
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
        ajax: 'trabajos/listado',
        columns: [
            { data: 'lugar' },
            { data: 'puesto' },
            { data: 'actions', className: 'td-actions text-right'}
        ]
    })
});
</script>
@endpush
