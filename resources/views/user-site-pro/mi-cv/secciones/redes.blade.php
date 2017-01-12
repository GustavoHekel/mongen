@extends('user-site-pro.mi-cv.index')
@section('seccion')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form id="redes-sociales" class="form-horizontal">
                <div class="header">
                    <input type="submit" class="btn btn-warning pull-right save-edit" value="Guardar">
                    <h4 class="title">Redes sociales</h4>
                    <p class="category">Ingrese los enlaces a los perfiles que desee compartir</p>
                </div>
                <div class="content">

                    <!-- Facebook -->
                    <div class="form-group">
                        <label for="red" class="col-md-3 control-label">
                            <i class="fa fa-facebook"></i>
                        </label>
                        <div class="col-md-9">
                            <input id="facebook" name="facebook" type="text" class="form-control" placeholder="/facebook" value="{{ $red->facebook or '' }}">
                        </div>
                    </div>

                    <!-- Twitter -->
                    <div class="form-group">
                        <label for="red" class="col-md-3 control-label">
                            <i class="fa fa-twitter"></i>
                        </label>
                        <div class="col-md-9">
                            <input id="twitter" name="twitter" type="text" class="form-control" placeholder="@twitter" value="{{ $red->twitter or '' }}">
                        </div>
                    </div>

                    <!-- Linkedin -->
                    <div class="form-group">
                        <label for="red" class="col-md-3 control-label">
                            <i class="fa fa-linkedin"></i>
                        </label>
                        <div class="col-md-9">
                            <input id="linkedin" name="linkedin" type="text" class="form-control" placeholder="/linkedin" value="{{ $red->linkedin or '' }}">
                        </div>
                    </div>

                    <!-- Google+ -->
                    <div class="form-group">
                        <label for="red" class="col-md-3 control-label">
                            <i class="fa fa-google-plus"></i>
                        </label>
                        <div class="col-md-9">
                            <input id="google_plus" name="google_plus" type="text" class="form-control" placeholder="/google_plus" value="{{ $red->google_plus or '' }}">
                        </div>
                    </div>

                    <!-- Github -->
                    <div class="form-group">
                        <label for="red" class="col-md-3 control-label">
                            <i class="fa fa-github"></i>
                        </label>
                        <div class="col-md-9">
                            <input id="github" name="github" type="text" class="form-control" placeholder="/github" value="{{ $red->github or '' }}">
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
$(function(){
    var url = 'redes/{{ $red->id_red_usuario or 0 }}';
    $('#redes-sociales').validate({
        rules: {

        },
        messages: {

        },
        submitHandler: function(form) {
            $.ajax({
                method: 'put',
                url: url,
                data: $(form).serialize(),
                statusCode: {
                    200: function (data) {
                        url = 'redes/' + data.data.id_red_usuario;
                        swal('Felicitaciones', 'Datos actualizados con éxito', 'success');
                    },
                    400: function (data) {
                        swal('Atención!', 'Ha ocurrido un error', 'error');
                    }
                }
            });
        }
    })

});
</script>
@endpush
