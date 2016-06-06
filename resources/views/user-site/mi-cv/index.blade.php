@extends('user-site.index')
@section('content')
	<div class="row">
		<div class="col-md-3">
			<div class="list-group">
			@foreach ($secciones as $seccion)
				<a href="{{ url($seccion->url) }}" class="list-group-item {{ $seccion->activo }}"><i class="fa {{ $seccion->icono }}"></i> {{ $seccion->descripcion }}</a>
			@endforeach
			</div>
		</div>
		<div class="col-md-9">
			@yield('seccion')
		</div>
	</div>
@endsection 
