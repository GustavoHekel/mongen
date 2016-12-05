@extends('user-site-pro.mi-cv.index')
@section('seccion')
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
