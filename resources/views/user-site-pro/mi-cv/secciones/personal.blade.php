@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="" id="crop-avatar">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">
                        Datos personales
                        <a href="/mi-cv/personal" class="btn btn-success pull-right actualizar">Actualizar</a>
                    </h4>
                </div>
                <div class="content">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-md-3 control-label">Foto de perfil</label>
                            <div class="col-md-9 avatar-view">
                                <img class="img-responsive img-thumbnail" src="{{ asset("dist/img/profile-pics/" . Auth::user()->avatar)}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Nombre</label>
                            <div class="col-md-9">
                                <input type="text" name="nombre" placeholder="Nombre" class="form-control" value="{{ Auth::user()->nombre }}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">Fecha de nacimiento</label>
                            <div class="col-md-9">
                                <input type="text" name="fecha_nacimiento" placeholder="Fecha de nacimiento" class="form-control" value="{{ Auth::user()->fecha_nacimiento->format('d/m/Y')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-3 control-label">País</label>
                            <div class="col-md-9">
                                <select name="id_pais" id="id_pais" class="form-control">
                                    @foreach($paises as $pais)
                                        @if ($pais->id_pais == Auth::user()->id_pais)
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
                                        @if ($provincia->id_provincia == Auth::user()->id_provincia)
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
                                @if (Auth::user()->id_plan == 1)
                                <input type="text" name="url" placeholder="URL" class="form-control" value="{{ Auth::user()->url }}">
                                @else
                                <input disabled type="text" name="url" placeholder="URL" class="form-control" value="{{ Auth::user()->url }}">
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
    </div><!-- /.modal -->


</div>



@endsection

@push('scripts')
<script>
$(function(){

    $('.update').click(function(event){
        event.preventDefault();
        $.ajax({
            method: 'put',
            url: 'personal/{{ Auth::user()->id_usuario}}',
            data: $('form').serialize(),
            statusCode: {
                200: function(data) {

                },
                400: function(data) {

                },
                402: function(data) {

                }
            }
        });
    })

});
</script>
@endpush
