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
            <div>
                <ul class="list-group">
                    @foreach($estados as $estado)
                        <li class="list-group-item">
                            <span>
                                @if ($usuario->estado->estado == $estado->id)
                                    <input type="radio" name="estado" checked="checked">
                                @else
                                    <input type="radio" name="estado">
                                @endif
                            </span>
                            <span class="text-{{ $estado->estilo }}">
                                {{$estado->descripcion}}
                            </span>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="footer">
                
            </div>
        </div>
    </div>
</div>


<script type="text/javascript">
    $(document).ready(function(){
        $("input").iCheck({
            checkboxClass: 'icheckbox_minimal-green',
            radioClass: 'iradio_minimal-green',
            increaseArea: '20%' // optional
        });
    });
</script>
@endsection
