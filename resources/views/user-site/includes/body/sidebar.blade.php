<div class="sidebar" data-color="black" data-image="{{ asset("dist/plugins/light_bootstrap/assets/img/sidebar-5.jpg")}}">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="http://www.creative-tim.com" class="simple-text">
                Mongen
            </a>
        </div>
        <ul class="nav">
        @foreach ($items as $item)
            @if ($item->activo)
            <li class="active">
            @else
            <li>
                @endif
                <a href="{{ $item->ruta }}">
                    <i class="{{ $item->icono }}"></i>
                    <p>{{ $item->descripcion }}</p>
                </a>
            </li>
        @endforeach
        </ul>
    </div>
</div>
