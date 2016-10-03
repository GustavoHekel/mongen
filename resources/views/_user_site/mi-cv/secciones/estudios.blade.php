@extends('user-site.mi-cv.index')
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
        <div class="content table-responsive table-full-width">
            <table class="table table-bordered" id="table">
                <tr>
                    <th>Instituto</th>
                </tr>
            </table>
        </div>
    </div>
</div>

<script>
$(function() {
    $('#table').DataTable({
        processing: true,
        serverSide: true,
        ajax: 'estudios/listado/' + {{ Auth::user()->id }},
        columns: [
            { data: 'instituto', name: 'instituto' }
        ]
    });
});
</script>

@endsection
