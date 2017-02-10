@extends('user-site-pro.mi-cv')
@section('seccion')
<div class="" id="crop-avatar">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">
                        Datos personales
                        <a href="#" class="btn btn-success pull-right update">Actualizar</a>
                    </h4>
                </div>
                <div class="content">
                    <form id="personal-form" class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Foto de perfil</label>
                            <div class="col-md-9 avatar-view">
                                <img class="img-responsive img-thumbnail" src="{{ asset("dist/img/profile-pics/" . $usuario->avatar)}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nombre</label>
                            <div class="col-md-9">
                                <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{ $usuario->nombre }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Profesión</label>
                            <div class="col-md-9">
                                <input type="text" name="profesion" placeholder="Profesión" class="form-control" value="{{ $usuario->extracto->profesion or '' }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Extracto</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="extracto" placeholder="Extracto" rows="8" cols="40">{{ $usuario->extracto->extracto or '' }}</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Fecha de nacimiento</label>
                            <div class="col-md-9">
                                <input type="text" name="fecha_nacimiento" placeholder="Fecha de nacimiento" class="form-control datepicker" value="{{ $usuario->fecha_nacimiento->format('d/m/Y')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">País</label>
                            <div class="col-md-9">
                                <select name="id_pais" id="id_pais" class="form-control">
                                    @foreach($paises as $pais)
                                        @if ($pais->id_pais == $usuario->id_pais)
                                        <option selected value="{{ $pais->id_pais }}">{{ $pais->nombre }}</option>
                                        @else
                                        <option value="{{ $pais->id_pais }}">{{ $pais->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Provincia</label>
                            <div class="col-md-9">
                                <select name="id_provincia" id="id_provincia" class="form-control">
                                    @foreach($provincias as $provincia)
                                        @if ($provincia->id_provincia == $usuario->id_provincia)
                                        <option selected value="{{ $provincia->id_provincia }}">{{ $provincia->nombre }}</option>
                                        @else
                                        <option value="{{ $provincia->id_provincia }}">{{ $provincia->nombre }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">URL personalizada</label>
                            <div class="col-md-9">
                                @if ($usuario->id_plan == 1)
                                <input type="text" name="url" placeholder="URL" class="form-control user-url" value="{{ $usuario->url }}">
                                @else
                                <input disabled type="text" name="url" placeholder="URL" class="form-control" value="{{ $usuario->url }}">
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Cropping modal -->
    <div class="modal fade" id="avatar-modal" aria-hidden="true" aria-labelledby="avatar-modal-label" role="dialog" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <form class="avatar-form" action="avatar" enctype="multipart/form-data" method="post">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                    </div>
                    <div class="modal-body">
                        <div class="avatar-body">

                            <!-- Upload image and data -->
                            <div class="avatar-upload">
                                <input type="hidden" class="avatar-src" name="avatar_src">
                                <input type="hidden" class="avatar-data" name="avatar_data">
                                <label for="avatarInput">Local upload</label>
                                <input type="file" class="avatar-input" id="avatarInput" name="avatar_file">
                            </div>

                            <!-- Crop and preview -->
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="avatar-wrapper"></div>
                                </div>
                                <div class="col-md-3">
                                    <div class="avatar-preview preview-lg"></div>
                                    <div class="avatar-preview preview-md"></div>
                                    <div class="avatar-preview preview-sm"></div>
                                </div>
                            </div>

                            <div class="row avatar-btns">
                                <div class="col-md-9">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-90" title="Rotate -90 degrees">Rotate Left</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-15">-15deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-30">-30deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="-45">-45deg</button>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="90" title="Rotate 90 degrees">Rotate Right</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="15">15deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="30">30deg</button>
                                        <button type="button" class="btn btn-primary" data-method="rotate" data-option="45">45deg</button>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <button type="submit" class="btn btn-primary btn-block avatar-save">Done</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
$(function(){

    var userUrl = $('.user-url').val();
    var regExp = /[^a-zA-Z0-9-_]/;

    $('.datepicker').datetimepicker({
        format: 'DD/MM/YYYY',
        icons: {
            time: "fa fa-clock-o",
            date: "fa fa-calendar",
            up: "fa fa-chevron-up",
            down: "fa fa-chevron-down",
            previous: 'fa fa-chevron-left',
            next: 'fa fa-chevron-right',
            today: 'fa fa-screenshot',
            clear: 'fa fa-trash',
            close: 'fa fa-remove'
        }
    });

    $('.datepicker').inputmask({
        mask: '99/99/9999'
    });

    $.validator.addMethod("custom", function(value, element, param) {
        return ! param.test(value)
    }, 'No se admiten carateres especiales');

    $('#personal-form').validate({
         rules: {
            nombre: {
                required: true
            },
            fecha_nacimiento: {
                required: true
            },
            id_pais: {
                required: true
            },
            id_provincia: {
                required: true
            },
            url: {
                required: true,
                custom: regExp
            },
            extracto: {
                required: true,
                maxlength: 500,
            },
            profesion: {
                required: true,
                maxlength: 50,
            }
         },
         messages: {
            nombre: {
                required: 'Su nombre es requerido'
            },
            fecha_nacimiento: {
                required: 'La fecha de nacimiento es requerida',
                date: 'Debe ser una fecha válida'
            },
            url: {
                required: 'Especifique una URL personalizada',
                pattern: 'No se permiten caracteres especiales'
            }
         },
         submitHandler: function (form) {
             $.ajax({
                 method: 'put',
                 url: 'personal/{{ $usuario->id_usuario}}',
                 data: $(form).serialize(),
                 statusCode: {
                     200: function(data) {
                         swal('Felicidades', 'Sus datos fueron actualizados.', 'success');
                     },
                     400: function(data) {
                         console.log(data);
                     },
                     402: function(data) {
                         console.log(data);
                     }
                 }
             });
         }
     });

    $('.update').click(function(event){
        $('#personal-form').submit();
    });

    $('.user-url').keyup(function(e){
        var key = e.key;
        var patt = regExp;
        var url = $(this);

        if ((! patt.test(key)) && (! patt.test($(this).val()))) {
            return false;
        }

        if (url.length != 0 && url.val() != userUrl) {
            $.ajax({
                method: 'get',
                url: '/url/' + url.val(),
                global: false,
                success: function(data) {
                    url.removeClass('error');
                },
                error: function(data) {
                    url.addClass('error');
                    toastr.error('URL en uso');
                }

            });
        } else {
            url.removeClass('error');
        }
    });
});
</script>
@endpush
