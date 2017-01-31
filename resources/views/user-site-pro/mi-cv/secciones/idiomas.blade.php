@extends('user-site-pro.mi-cv.index')
@section('seccion')

<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">Idiomas</h4>
            <p>Listado con todos tus idiomas (5 máximo)</p>
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
                <tbody>
                    @foreach($idiomas as $idioma)
                    <tr>
                        <td>{{ $idioma->idioma }}</td>
                        <td>
                            <div class="slider-info idioma-slider" data-idioma="{{ $idioma->idioma }}" data-id="{{ $idioma->id_idioma }}" data-value="{{ $idioma->nivel }}"></div>
                        </td>
                        <td>
                            <button data-id="{{ $idioma->id_idioma }}" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove">
                                <i class="fa fa-remove"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    <form id="form-new-idioma">
                        <tr id="new-idioma">
                            <td>
                                <input type="text" name="idioma-name" id="idioma-name" class="form-control" placeholder="Nuevo idioma">
                            </td>
                            <td>
                                <div class="slider-info idioma-slider-new"></div>
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

    function getSliderOptions(value, idioma, id) {
        var sliderConfig = {
            value: value,
            range: 'min',
            animate: true,
            min: 1,
            max: 10,
            change: function(event, ui) {
                var newValue = ui.value;
                $.ajax({
                    global: false,
                    method: 'put',
                    url: 'idiomas/' + id,
                    data: {
                        nivel: newValue
                    },
                    success: function(data) {
                        toastr.success('Actualizado', idioma);
                    },
                    error: function(data) {
                        toastr.error('Error al actualizar', idioma);
                    }
                });
            }
        };

        return sliderConfig;
    }

    function checkIdiomaLength () {
        if ($('.idioma-slider').length >= 5) {
            $('#new-idioma').hide();
        } else {
            $('#new-idioma').show();
        }
    }

    function removeidioma(id, row) {
        $.ajax({
            method: 'delete',
            url: 'idiomas/' + id,
            success: function(data) {
                row.parents('tr').remove();
                toastr.warning('Idioma eliminado');
                checkIdiomaLength();
            },
            error: function(data) {
                toastr.error('Ha ocurrido un error');
            }
        });
    }

    function idiomaRow(id, name, value) {
        return $('<tr>')
        .append(
            $('<td>', {
                text: name
            })
        )
        .append(
            $('<td>')
            .append(
                $('<div>', {
                    class: 'slider-info idioma-slider',
                    'data-idioma': name,
                    'data-id': id,
                    'data-value': value
                })
                .slider(getSliderOptions(value, name, id))
            )
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
                    removeidioma(id, $(this))
                })
                .append(
                    $('<i>', {
                        class: 'fa fa-remove'
                    })
                )
            )
        )
    }

    checkIdiomaLength();

    $('.idioma-slider-new').slider({
        value: 0,
        range: 'min',
        animate: true,
        min: 1,
        max: 10
    });

    $('.idioma-slider').each(function(){
        var value = parseInt($(this).data().value, 10);
        var ididioma = $(this).data().id;
        var idioma = $(this).data().idioma;
        $(this).empty().slider(getSliderOptions(value, idioma, ididioma));
    });

    $('.remove').click(function(){
        row = $(this);
        ididioma = $(this).data().id;
        removeidioma(ididioma, row);
    });

    $('.save').click(function(event){
        event.preventDefault();
        var idiomaName = $('#idioma-name').val();

        if (idiomaName.length == 0) {
            swal('Atención', 'Debe ingresar un idioma', 'warning');
            return;
        }

        var idiomaValue = $('.idioma-slider-new').slider('value');
        $.ajax({
            method: 'post',
            url: 'idiomas',
            data: {
                nombre: idiomaName,
                nivel: idiomaValue
            },
            success: function(data) {
                $('#idioma-name').val('');
                toastr.success(idiomaName + ' agregado');
                idiomaRow(data.data.id_idioma, data.data.idioma, data.data.nivel).insertBefore('#new-idioma');
                checkIdiomaLength();
            },
            error: function(data) {
                toastr.danger('Ha ocurrido un error');
            }
        });
    });

});
</script>
@endpush
