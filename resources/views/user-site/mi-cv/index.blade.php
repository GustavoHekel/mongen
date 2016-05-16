@extends('user-site.index')
@section('content')
	<div class="list-group">
	@foreach ($secciones as $seccion)
		<a href="{{ $seccion->url }}" class="list-group-item"><i class="fa {{ $seccion->icono }}"></i> {{ $seccion->descripcion }}</a>
	@endforeach
	</div>
@endsection