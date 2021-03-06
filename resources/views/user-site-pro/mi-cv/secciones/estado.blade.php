@extends('user-site-pro.mi-cv')
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
                        @if (isset ($estado_usuario))
                        <li @if($estado_usuario->id_estado == 1) class="active" @endif >
                        @else
                        <li>
                        @endif
                            <a href="#description-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-bullhorn"></i><br>
                                Escuchando
                            </a>
                        </li>
                        @if (isset ($estado_usuario))
                        <li @if($estado_usuario->id_estado == 2) class="active" @endif>
                        @else
                        <li>
                        @endif
                            <a href="#map-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-calculator"></i><br>
                                Analizando
                            </a>
                        </li>
                        @if (isset ($estado_usuario))
                        <li @if($estado_usuario->id_estado == 3) class="active" @endif>
                        @else
                        <li>
                        @endif
                            <a href="#legal-logo" role="tab" data-toggle="tab">
                                <i class="fa fa-anchor"></i><br>
                                Despreocupado
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="tab-content">
                    @if (isset ($estado_usuario))
                    <div class="tab-pane @if($estado_usuario->id_estado == 1) active @endif" id="description-logo">
                    @else
                    <div class="tab-pane" id="description-logo">
                    @endif
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

                    @if (isset ($estado_usuario))
                    <div class="tab-pane @if($estado_usuario->id_estado == 2) active @endif" id="map-logo">
                    @else
                    <div class="tab-pane" id="map-logo">
                    @endif
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

                    @if (isset ($estado_usuario))
                    <div class="tab-pane @if($estado_usuario->id_estado == 3) active @endif" id="legal-logo">
                    @else
                    <div class="tab-pane" id="legal-logo">
                    @endif
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
            <div class="footer">
                <div class="stats">
                    @if (isset ($estado_usuario))
                    <i class="fa fa-history"></i> Created {{ $estado_usuario->created_at->diffForHumans() }}
                    <br />
                    <i class="fa fa-history"></i> Updated {{ $estado_usuario->updated_at->diffForHumans() }}
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(function(){

    @if (isset($estado_usuario))
    var method = 'put';
    var url = 'estado/{{ $estado_usuario->id_estado_usuario}}';
    @else
    var method = 'post';
    var url = 'estado';
    @endif

    $('input').iCheck({
        checkboxClass: 'icheckbox_minimal-green',
        radioClass: 'iradio_minimal-green',
        increaseArea: '20%'
    });

    $('.status').click(function(event){
        event.preventDefault();
        $.ajax({
            method: method,
            url: url,
            data: {
                id_estado: $(this).val()
            },
            statusCode: {
                200: function (data) {
                    swal('Felicidades', data.message, 'success');
                },
                201: function (data) {
                    swal('Felicidades', data.message, 'success');
                    method = 'put';
                    url = 'estado/' + data.data.id_estado_usuario;
                    console.log(url);
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
