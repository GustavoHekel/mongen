@extends('user-site.mi-cv.index')
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
                        @foreach($estados as $estado)
                            <li class="list-group-item">
                                <span>
                                    @if ($usuario->estado->estado == $estado->id)
                                        <input value="{{$estado->id}}" type="radio" name="estado" checked="checked">
                                    @else
                                        <input value="{{$estado->id}}" type="radio" name="estado">
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


<script type="text/javascript">
    $(document).ready(function(){
        $('input').iCheck({
            checkboxClass: 'icheckbox_minimal-green',
            radioClass: 'iradio_minimal-green',
            increaseArea: '20%' // optional
        });

        $('#submit-cv-estado').click(function(event){
            event.preventDefault();
            $.post('estado', $('#cv-estado').serialize(), function(data){
                $.notify({
                    icon: data.icon,
                    message: data.info
                    
                },{
                    type: data.css
                });
            })
        });
    });
</script>
@endsection
