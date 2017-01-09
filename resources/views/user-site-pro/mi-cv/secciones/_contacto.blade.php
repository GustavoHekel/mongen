@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="header">Emails</div>
            <div class="content">
                <form class="form-horizontal">
                    @foreach ($emails as $key => $email)
                    <div class="form-group">
                        <label class="col-md-3 control-label">Email #{{ $key }}</label>
                        <div class="col-md-9">
                            <input type="text" name="email[{{$email->id_email}}]" placeholder="Email" class="form-control" value="{{ $email->email }}">
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="header">Teléfonos</div>
            <div class="content">
                <form class="form-horizontal">
                    @foreach ($telefonos as $key => $telefono)
                    <div class="form-group">
                        <label class="col-md-3 control-label">Teléfono #{{ $key }}</label>
                        <div class="col-md-9">
                            <input type="text" name="telefono[{{$telefono->id_telefono}}]" placeholder="Teléfono" class="form-control" value="{{ $telefono->numero }}">
                        </div>
                    </div>
                    @endforeach
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
