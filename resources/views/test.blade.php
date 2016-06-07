@foreach (session('menu') as $item)
	<p>{{ $item->descripcion }}</p>
@endforeach