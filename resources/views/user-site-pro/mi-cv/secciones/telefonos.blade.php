@extends('user-site-pro.mi-cv.index')
@section('seccion')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <form id="telefono_configuration" class="form-horizontal">
                <div class="header">
                    <input type="submit" class="btn btn-warning pull-right save-edit" value="Guardar">
                    <h4 class="title">Telefonos</h4>
                    <p class="category">Ingrese el teléfono al que desea ser contactado</p>
                </div>
                <div class="content">

                    <div class="form-group">
                        <label for="telefono" class="col-md-3 control-label">Número</label>
                        <div class="col-md-9">
                            <input id="telefono-contacto" name="telefono_contacto" type="text" class="form-control" placeholder="Telefono de contacto" value="{{ $telefono->numero or '' }}">
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
    var url = 'telefonos/{{ $telefono->id_telefono or 0 }}';
    $('#telefono_configuration').validate({
        rules: {
            telefono_contacto: {
                required: true,
                digits: true
            }
        },
        messages: {
            telefono_contacto: {
                required: 'Ingrese un número de teléfono',
                digits: 'Solo se admiten dígitos'
            }
        },
        submitHandler: function(form) {
            $.ajax({
                method: 'put',
                url: url,
                data: $(form).serialize(),
                statusCode: {
                    200: function (data) {
                        url = 'telefonos/' + data.data.id_telefono;
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
