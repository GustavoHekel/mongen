@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">
                Mis cursos
                <a href="/mi-cv/cursos/nuevo" class="btn btn-success pull-right">Agregar curso</a>
            </h4>
            <p class="category">
                Aquí se muestran todos tus cursos registrados.
            </p>
        </div>
        <div class="content">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Instituto</th>
                        <th>Curso</th>
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
    var cursosTable = $('#table').DataTable({
        ajax: 'cursos/listado',
        columns: [
            { data: 'instituto' },
            { data: 'nombre_es' },
            { data: 'actions', className: 'td-actions text-right'}
        ]
    });

    $('#table').on('click', '.remove', function(e){
        e.preventDefault();
        var idCurso = $(this).attr('id-curso');

        swal({
            title: "Estás seguro?",
    	    text: "No vas a poder deshacer esta acción",
    	    type: "warning",
    	    showCancelButton: true,
    	    confirmButtonText: "Si, eliminar!",
    	    cancelButtonText: "No, cancelar!",
    	    closeOnConfirm: false,
    	    closeOnCancel: false,
            showLoaderOnConfirm: true
        }, function(isConfirm) {
            if (isConfirm) {
                $.ajax({
                    method: 'delete',
                    url: 'cursos/' + idCurso,
                    success: function(data) {
                        cursosTable.ajax.reload();
                        swal(
                            'Eliminado!',
                            'El estudio fue borrado.',
                            'success'
                        );
                    }
                });
            } else {
                swal("Cancelado", "Tu curso no fue eliminado :)", "error");
            }
        });
    });
});
</script>
@endpush
