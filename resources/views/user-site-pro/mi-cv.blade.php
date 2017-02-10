@extends('user-site-pro.layout')
@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
			@foreach (Session::get('secciones') as $seccion)
				<a href="{{ url($seccion->url) }}" class="list-group-item"><i class="fa {{ $seccion->icono }}"></i> {{ $seccion->descripcion }}</a>
			@endforeach
			</div>
		</div>
		<div class="col-md-9">
			@yield('seccion')
			<!-- <app-cv-table-with-actions></app-cv-table-with-actions> -->
		</div>
	</div>
@endsection

@push('scripts')
<script>

$(function(){
	var startSeccion = window.location.href.lastIndexOf("/") + 1;
	var pageUrlSeccion = window.location.href.substr(startSeccion);
	$('.list-group a').each(function(){
		var anchorUrlSeccion = $(this).attr('href').substr($(this).attr('href').lastIndexOf("/") + 1);
		if (anchorUrlSeccion == pageUrlSeccion){
			$(this).addClass('active');
		}
	});
});

</script>
@endpush
