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
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
$(function() {

    $('.skill-slider').each(function(){
        var value = parseInt($(this).data().value, 10);
        var idSkill = $(this).data().id;
        var skill = $(this).data().skill;
        $(this).empty().slider({
            value: value,
            range: "min",
            animate: true,
            min: 1,
            max: 10,
            orientation: "horizontal",
            change: function(event, ui) {
                var newValue = ui.value;
                $.ajax({
                    global: false,
                    method: 'put',
                    url: 'skills/' + idSkill,
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
        });
    });

    // $('#table').dataTable({
    //     ajax: 'skills/listado',
    //     columns: [
    //         { data: 'nombre' },
    //         { data: 'level' },
    //         { data: 'actions', className: 'td-actions text-right'}
    //     ]
    // })
});
</script>
@endpush
