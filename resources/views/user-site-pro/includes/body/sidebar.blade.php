<div class="sidebar" data-color="orange" data-image="{{ asset("dist/plugins/light_bootstrap_pro/img/full-screen-image-3.jpg")}}">
  <div class="logo">
    <a href="http://www.creative-tim.com" class="logo-text">
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
                    Tania Andrew
                    <b class="caret"></b>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li><a href="#">My Profile</a></li>
                        <li><a href="#">Edit Profile</a></li>
                        <li><a href="#">Settings</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="nav">
          @foreach (session('menu') as $item)
              <li class="{{$item->activo}}">
                  <a href="{{ url($item->ruta) }}">
                      <i class="{{ $item->icono }}"></i>
                      <p>{{ $item->descripcion }}</p>
                  </a>
              </li>
          @endforeach
        </ul>
  </div>
</div>
