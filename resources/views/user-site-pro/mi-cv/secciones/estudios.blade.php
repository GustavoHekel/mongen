@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">
                Mis estudios
                <a href="/mi-cv/estudios/nuevo" class="btn btn-success pull-right">Agregar estudio</a>
            </h4>
            <p class="category">
                Aquí se muestran todos tus estudios registrados.
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
    var estudiosTable = $('#table').DataTable({
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
                    url: 'estudios/' + idEstudio,
                    success: function(data) {
                        estudiosTable.ajax.reload();
                        swal(
                            'Eliminado!',
                            'El estudio fue borrado.',
                            'success'
                        );
                    }
                });
            } else {
                swal("Cancelado", "Tu estudio no fue eliminado :)", "error");
            }
        });
    });
});
</script>
@endpush
