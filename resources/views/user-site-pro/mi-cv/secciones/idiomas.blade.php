@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="content">
            <div class="row">
                <div class="col-md-8">
                    <div class="header">
                        <h4 class="title">
                            Titulo idiomas
                        </h4>
                        <p class="category">
                            Subtitulo idiomas
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="pull-right" style="padding-top:7px;">
                        <button class="btn btn-success">Nuevo idioma</button>
                    </div>
                </div>
            </div>
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
