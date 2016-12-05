@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">
                Seleccione su estado actual
            </h4>
            <p class="category">
                Esto ayudará a que ud. sea contactado
            </p>
        </div>
        <div class="content">
            <form id="cv-estado">
                <div>
                    <ul class="list-group">
                        @foreach(Session('estados') as $estado)
                            <li class="list-group-item">
                                <span>
                                    @if (Auth::user()->estado->id_estado == $estado->id_estado)
                                        <input value="{{$estado->id_estado}}" type="radio" name="id_estado" checked="checked">
                                    @else
                                        <input value="{{$estado->id_estado}}" type="radio" name="id_estado">
                                    @endif
                                </span>
                                <span class="text-{{ $estado->estilo }}">
                                    {{ $estado->descripcion }}
                                </span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="footer">
                    <input id="submit-cv-estado" class="btn btn-success btn-fill" type="button" value="Guardar">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
    $(function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_minimal-green',
            radioClass: 'iradio_minimal-green',
            increaseArea: '20%'
        });

        $('#submit-cv-estado').click(function(event){
            event.preventDefault();
            $.ajax({
                method: 'put',
                url: 'estado/{{ $estado_usuario->id_estado_usuario }}',
                data: $('#cv-estado').serialize(),
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
