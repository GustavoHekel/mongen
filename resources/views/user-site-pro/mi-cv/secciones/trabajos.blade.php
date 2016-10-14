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
    var trabajosTable = $('#table').DataTable({
        ajax: 'trabajos/listado',
        columns: [
            { data: 'lugar' },
            { data: 'puesto' },
            { data: 'actions', className: 'td-actions text-right'}
        ]
    })

    $('#table').on('click', '.remove', function(e){
        e.preventDefault();
        var idTrabajo = $(this).attr('id-trabajo');

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
                    url: 'trabajos/' + idTrabajo,
                    success: function(data) {
                        trabajosTable.ajax.reload();
                        swal(
                            'Eliminado!',
                            'El trabajo fue borrado.',
                            'success'
                        );
                    }
                });
            } else {
                swal("Cancelado", "Tu trabajo no fue eliminado :)", "error");
            }
        });
    });
});
</script>
@endpush
