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
                <tbody id="vue-skills">
                    @foreach($skills as $skill)
                    <tr>
                        <td>{{ $skill->nombre }}</td>
                        <td>
                            <div class="slider-info skill-slider" data-skill="{{ $skill->nombre }}" data-id="{{ $skill->id_skill }}" data-value="{{ $skill->nivel }}"></div>
                        </td>
                        <td>
                            <button data-id="{{ $skill->id_skill }}" rel="tooltip" title="Eliminar" class="btn btn-simple btn-danger btn-icon table-action remove" data-original-title="Remove">
                                <i class="fa fa-remove"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    <tr id="new-skill">
                        <form id="form-new-skill">
                            <td>
                                <input type="text" name="skill-name" id="skill-name" class="form-control" placeholder="Nuevo skill">
                            </td>
                            <td>
                                <div class="slider-info skill-slider-new"></div>
                            </td>
                            <td>
                                <button rel="tooltip" title="Guardar" class="btn btn-simple btn-success btn-icon table-action save" data-original-title="Guardar">
                                    <i class="fa fa-check"></i>
                                </button>
                            </td>
                        </form>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>

var app = new Vue({

});


// $(function() {
//
//     $('.skill-slider-new').slider({
//         value: 0,
//         range: "min",
//         animate: true,
//         min: 1,
//         max: 10,
//         orientation: "horizontal"
//     });
//
//     $('.skill-slider').each(function(){
//         var value = parseInt($(this).data().value, 10);
//         var idSkill = $(this).data().id;
//         var skill = $(this).data().skill;
//         $(this).empty().slider({
//             value: value,
//             range: "min",
//             animate: true,
//             min: 1,
//             max: 10,
//             orientation: "horizontal",
//             change: function(event, ui) {
//                 var newValue = ui.value;
//                 $.ajax({
//                     global: false,
//                     method: 'put',
//                     url: 'skills/' + idSkill,
//                     data: {
//                         nivel: newValue
//                     },
//                     success: function(data) {
//                         toastr.success('Actualizado', skill);
//                     },
//                     error: function(data) {
//                         toastr.error('Error al actualizar', skill);
//                     }
//                 });
//             }
//         });
//     });
//
//     $('.remove').click(function(){
//         row = $(this);
//         idSkill = $(this).data().id;
//         $.ajax({
//             method: 'delete',
//             url: 'skills/' + idSkill,
//             success: function(data) {
//                 row.parents('tr').remove();
//                 toastr.warning('Skill eliminado');
//             },
//             error: function(data) {
//                 toastr.error('Ha ocurrido un error');
//             }
//         });
//     });
//
//     $('.save').click(function(event){
//         event.preventDefault();
//         var skillName = $('#skill-name').val();
//         var skillValue = $('.skill-slider-new').slider('value');
//         $.ajax({
//             method: 'post',
//             url: 'skills',
//             data: {
//                 nombre: skillName,
//                 nivel: skillValue
//             },
//             success: function(data) {
//                 $('#form-new-skill').trigger('reset')
//                 toastr.success(skillName + ' agregado');
//             },
//             error: function(data) {
//                 toastr.danger('Ha ocurrido un error');
//             }
//         });
//     });
//
// });
</script>
@endpush
