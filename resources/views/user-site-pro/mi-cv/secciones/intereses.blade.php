@extends('user-site-pro.mi-cv.index')
@section('seccion')

<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">Intereses y hobbies</h4>
            <p>Listado con todos tus intereses (5 máximo)</p>
        </div>
        <div class="content">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Interés</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($intereses as $interes)
                    <tr>
                        <td class="interes-name">{{ $interes->descripcion }}</td>
                        <td>
                            <button data-id="{{ $interes->id_interes }}" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove">
                                <i class="fa fa-remove"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    <form id="form-new-interes">
                        <tr id="new-interes">
                                <td>
                                    <input type="text" name="interes-name" id="interes-name" class="form-control" placeholder="Nuevo interes">
                                </td>
                                <td>
                                    <button title="Guardar" class="btn btn-simple btn-success btn-icon table-action save" data-original-title="Guardar">
                                        <i class="fa fa-check"></i>
                                    </button>
                                </td>
                        </tr>
                    </form>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>

$(function() {

    function checkInteresLength () {
        if ($('.interes-name').length >= 5) {
            $('#new-interes').hide();
        } else {
            $('#new-interes').show();
        }
    }

    function removeinteres(id, row) {
        $.ajax({
            method: 'delete',
            url: 'intereses/' + id,
            success: function(data) {
                row.parents('tr').remove();
                toastr.warning('Interes eliminado');
                checkInteresLength();
            },
            error: function(data) {
                toastr.error('Ha ocurrido un error');
            }
        });
    }

    function interesRow(id, name, value) {
        return $('<tr>')
        .append(
            $('<td>', {
                class: 'interes-name',
                text: name
            })
        )
        .append(
            $('<td>')
            .append(
                $('<button>', {
                    class: 'btn btn-simple btn-danger btn-icon table-action remove',
                    'data-id': id,
                    title: 'Eliminar',
                    'data-original-title': 'Remove'
                })
                .click(function(){
                    removeinteres(id, $(this))
                })
                .append(
                    $('<i>', {
                        class: 'fa fa-remove'
                    })
                )
            )
        )
    }

    checkInteresLength();

    $('.remove').click(function(){
        row = $(this);
        idinteres = $(this).data().id;
        removeinteres(idinteres, row);
    });

    $('.save').click(function(event){
        event.preventDefault();
        var interesName = $('#interes-name').val();

        if (interesName.length == 0) {
            swal('Atención', 'Debe ingresar un interes', 'warning');
            return;
        }

        $.ajax({
            method: 'post',
            url: 'intereses',
            data: {
                nombre: interesName
            },
            success: function(data) {
                $('#interes-name').val('');
                toastr.success(interesName + ' agregado');
                interesRow(data.data.id_interes, data.data.descripcion).insertBefore('#new-interes');
                checkInteresLength();
            },
            error: function(data) {
                toastr.danger('Ha ocurrido un error');
            }
        });
    });

});
</script>
@endpush
