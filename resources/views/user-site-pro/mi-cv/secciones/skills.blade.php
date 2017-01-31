@extends('user-site-pro.mi-cv.index')
@section('seccion')

<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">Skills</h4>
            <p>Listado con todos tus skills (5 máximo)</p>
        </div>
        <div class="content">
            <table class="table table-hover" id="table">
                <thead>
                    <tr>
                        <th>Skill</th>
                        <th>Nivel</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($skills as $skill)
                    <tr>
                        <td>{{ $skill->nombre }}</td>
                        <td>
                            <div class="slider-info skill-slider" data-skill="{{ $skill->nombre }}" data-id="{{ $skill->id_skill }}" data-value="{{ $skill->nivel }}"></div>
                        </td>
                        <td>
                            <button data-id="{{ $skill->id_skill }}" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove">
                                <i class="fa fa-remove"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    <form id="form-new-skill">
                        <tr id="new-skill">
                            <td>
                                <input type="text" name="skill-name" id="skill-name" class="form-control" placeholder="Nuevo skill">
                            </td>
                            <td>
                                <div class="slider-info skill-slider-new"></div>
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

    function getSliderOptions(value, skill, id) {
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
                    url: 'skills/' + id,
                    data: {
                        nivel: newValue
                    },
                    success: function(data) {
                        toastr.success('Actualizado', skill);
                    },
                    error: function(data) {
                        toastr.error('Error al actualizar', skill);
                    }
                });
            }
        };

        return sliderConfig;
    }

    function checkSkillLenght () {
        if ($('.skill-slider').length >= 5) {
            $('#new-skill').hide();
        } else {
            $('#new-skill').show();
        }
    }

    function removeSkill(id, row) {
        $.ajax({
            method: 'delete',
            url: 'skills/' + id,
            success: function(data) {
                row.parents('tr').remove();
                toastr.warning('Skill eliminado');
                checkSkillLenght();
            },
            error: function(data) {
                toastr.error('Ha ocurrido un error');
            }
        });
    }

    function skillRow(id, name, value) {
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
                    class: 'slider-info skill-slider',
                    'data-skill': name,
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
                    removeSkill(id, $(this))
                })
                .append(
                    $('<i>', {
                        class: 'fa fa-remove'
                    })
                )
            )
        )
    }

    checkSkillLenght();

    $('.skill-slider-new').slider({
        value: 0,
        range: 'min',
        animate: true,
        min: 1,
        max: 10
    });

    $('.skill-slider').each(function(){
        var value = parseInt($(this).data().value, 10);
        var idSkill = $(this).data().id;
        var skill = $(this).data().skill;
        $(this).empty().slider(getSliderOptions(value, skill, idSkill));
    });

    $('.remove').click(function(){
        row = $(this);
        idSkill = $(this).data().id;
        removeSkill(idSkill, row);
    });

    $('.save').click(function(event){
        event.preventDefault();
        var skillName = $('#skill-name').val();

        if (skillName.length == 0) {
            swal('Atención', 'Debe ingresar un skill', 'warning');
            return;
        }

        var skillValue = $('.skill-slider-new').slider('value');
        $.ajax({
            method: 'post',
            url: 'skills',
            data: {
                nombre: skillName,
                nivel: skillValue
            },
            success: function(data) {
                $('#skill-name').val('');
                toastr.success(skillName + ' agregado');
                skillRow(data.data.id_skill, data.data.nombre, data.data.nivel).insertBefore('#new-skill');
                checkSkillLenght();
            },
            error: function(data) {
                toastr.danger('Ha ocurrido un error');
            }
        });
    });

});
</script>
@endpush
