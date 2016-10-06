@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">
                Titulo estudios
                <a href="#" class="btn btn-success pull-right">Agregar estudio</a>
            </h4>
            <p class="category">
                Subtitulo estudios
            </p>
        </div>
        <div class="content">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Instituto</th>
                        <th>Carrera</th>
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
    $('#table').DataTable({
        ajax: 'estudios/listado',
        columns: [
            { data: 'instituto' },
            { data: 'carrera' },
            { data: 'actions', className: 'td-actions text-right'}
        ]
    });

    $('#table').on('click', '.remove', function(e){
        e.preventDefault();
        var idEstudio = $(this).attr('id-estudio');
        $.post('estudios/' + idEstudio + '/eliminar', function(data){
            swal(
                'Good job!',
                'You clicked the button!',
                'success'
            )
        })
    });
});
</script>
@endpush
