@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="card">
        <div class="header">
            <h4 class="title">
                Titulo estudios
            </h4>
            <p class="category">
                Subtitulo estudios
            </p>
        </div>
        <div class="content">
            <table class="table table-bordered" id="table"
                data-toggle="table"
                data-url="estudios/listado"
                data-side-pagination="server"
                data-pagination="true"
                data-search="true">
                <thead>
                    <tr>
                        <th data-field="instituto">Instituto</th>
                    </tr>                    
                </thead>
            </table>
        </div>
    </div>
</div>

@endsection
@push('scripts')
<script>
$(function() {
    $('#table').dataTable({
        ajax: 'estudios/listado',
        columns: [
            { data: 'instituto' }
        ]
    })
});
</script>
@endpush
