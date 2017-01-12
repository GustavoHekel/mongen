@extends('user-site-pro.mi-cv.index')
@section('seccion')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">Seleccione su estado actual</h4>
                <p class="category">Esto ayudará a que ud. sea contactado</p>
            </div>
            <div class="content">
                <div class="nav-container">
                    <ul class="nav nav-icons" role="tablist">
                        <li  @if($estado_usuario->id_estado == 1) class="active" @endif >
                            <a href="#description-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-bullhorn"></i><br>
                                Escuchando
                            </a>
                        </li>
                        <li @if($estado_usuario->id_estado == 2) class="active" @endif>
                            <a href="#map-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-calculator"></i><br>
                                Analizando
                            </a>
                        </li>
                        <li  @if($estado_usuario->id_estado == 3) class="active" @endif>
                            <a href="#legal-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-anchor"></i><br>
                                Despreocupado
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane  @if($estado_usuario->id_estado == 1) active @endif" id="description-logo">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Escuchando propuestas</h4>
                                <p class="category">¿Estás en búsqueda de un cambio laboral?</p>
                            </div>

                            <div class="content">
                                <p>
                                    Elegí esta opción si ya decidiste cambiar de aire.
                                </p>
                                <div class="text-center">
                                    <button type="button" value="1" class="btn btn-success status">Elegir</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane @if($estado_usuario->id_estado == 2) active @endif" id="map-logo">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Analizando un cambio</h4>
                                <p class="category">¿No estás del todo satisfecho con tu trabajo?</p>
                            </div>

                            <div class="content">
                                <p>
                                    Si no estás pensando en un cambio pero estás dispuesto a analizar una propuesta interesante, elegí esta opción.
                                </p>
                                <div class="text-center">
                                    <button type="button" value="2" class="btn btn-warning status">Elegir</button>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="tab-pane @if($estado_usuario->id_estado == 3) active @endif" id="legal-logo">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Sin necesidad de un cambio</h4>
                                <p class="category">En este momento no estás pensando en cambiar de trabajo.</p>
                            </div>

                            <div class="content">
                                <p>
                                    Estás satisfecho con tu trabajo pero te gusta mentener tu CV actualizado.
                                </p>
                                <div class="text-center">
                                    <button type="button" value="3" class="btn btn-primary status">Elegir</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function(){

    $('input').iCheck({
        checkboxClass: 'icheckbox_minimal-green',
        radioClass: 'iradio_minimal-green',
        increaseArea: '20%'
    });

    $('.status').click(function(event){
        event.preventDefault();
        $.ajax({
            method: 'put',
            url: 'estado/{{ $estado_usuario->id_estado_usuario }}',
            data: {
                id_estado: $(this).val()
            },
            statusCode: {
                200: function (data) {
                    swal('Felicidades', data.message, 'success');
                },
                400: function (data) {
                    swal('Atención', data.message, 'danger');
                }
            }
        });
    });
});
</script>
@endpush
