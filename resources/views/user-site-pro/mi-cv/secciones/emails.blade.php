@extends('user-site-pro.mi-cv.index')
@section('seccion')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form id="email_configuration" class="form-horizontal">
                <div class="header">
                    <input type="submit" class="btn btn-warning pull-right save-edit" value="Guardar">
                    <h4 class="title">Emails</h4>
                    <p class="category">Ingrese la dirección de correo a la que desea ser contactado</p>
                </div>
                <div class="content">
                    <div class="form-group">
                        <label class="checkbox col-md-10 col-md-offset-3">
                            <span class="icons">
                                <span class="first-icon fa fa-square-o"></span>
                                <span class="second-icon fa fa-check-square-o"></span>
                            </span>
                            <input value="1" type="checkbox" name="solo_email" id="solo_email" data-toggle="checkbox" @if($email->solo_email) checked @endif>&nbsp; Sólo contactarme por email.
                        </label>
                    </div>

                    <div class="form-group">
                        <label class="checkbox col-md-10 col-md-offset-3">
                            <span class="icons">
                                <span class="first-icon fa fa-square-o"></span>
                                <span class="second-icon fa fa-check-square-o"></span>
                            </span>
                            <input value="1" type="checkbox" name="email_default" id="email_default" data-toggle="checkbox" @if($email->email_registro) checked @endif>&nbsp; Usar mi mismo email de registro ({{ Auth::user()->email }})
                        </label>
                    </div>

                    <div class="form-group">
                        <label for="email" class="col-md-3 control-label">Email</label>
                        <div class="col-md-9">
                            <input id="email-contacto" name="email_contacto" type="text" class="form-control" placeholder="Email de contacto" value="{{ $email->email }}" @if($email->email_registro) disabled @endif>
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

    $('#email_default').on('toggle', function(){
        $('#email-contacto').prop('disabled', function(i, v) { return !v; });
    });

    $('#email_configuration').validate({
        rules: {

        },
        submitHandler: function(form) {
            $.ajax({
                method: 'put',
                url: 'emails/{{ $email->id_email }}',
                data: $(form).serialize(),
                statusCode: {
                    200: function (data) {
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
