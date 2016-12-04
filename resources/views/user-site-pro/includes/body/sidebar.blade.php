<div class="sidebar" data-color="black" data-image="{{ asset("dist/plugins/light_bootstrap_pro/img/full-screen-image-2.jpg")}}">
  <div class="logo">
    <a href="#" class="logo-text">
      Mongen
    </a>
  </div>
  <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
                <img src="{{ asset("dist/plugins/light_bootstrap_pro/img/default-avatar.png")}}" />
            </div>
            <div class="info">
                <a data-toggle="collapse" href="#collapseExample" class="collapsed">
                    {{ session('nombre') }}
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li><a href="#">Perfil</a></li>
                        <li><a href="#">Ajustes</a></li>
                        <li><a href="#">Salir</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
            @foreach (session('modulos') as $modulo)
                <li>
                    <a href="{{ url($modulo->ruta) }}">
                        <i class="{{ $modulo->icono }}"></i>
                        <p>{{ $modulo->descripcion }}</p>
                    </a>
                </li>
            @endforeach
        </ul>
  </div>
</div>
