@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">
                Titulo intereses
                <a href="#" class="btn btn-success pull-right">Agregar interes</a>
            </h4>
            <p class="category">
                Subtitulo intereses
            </p>
        </div>
        <div class="content">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Descripción</th>
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
        ajax: 'intereses/listado',
        columns: [
            { data: 'descripcion' },
            { data: 'actions', className: 'td-actions text-right'}
        ]
    })
});
</script>
@endpush
