@extends('user-site-pro.mi-cv.index')
@section('seccion')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">
                    Foto de perfil
                </h4>
            </div>
            <div class="content">
                <img src="{{ asset("dist/img/profile-pics/gustavohekel.jpg")}}" alt="" id="image">
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>

$(function(){

    $('#image').cropper({
        aspectRatio: 16 / 9,
        crop: function(e) {
            // Output the result data for cropping image.
            console.log(e.x);
            console.log(e.y);
            console.log(e.width);
            console.log(e.height);
            console.log(e.rotate);
            console.log(e.scaleX);
            console.log(e.scaleY);
        }
    });

});

</script>
@endpush
