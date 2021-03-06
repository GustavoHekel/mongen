<nav class="navbar navbar-default">
  <div class="container-fluid">
        <div class="navbar-minimize">
		    <button id="minimizeSidebar" class="btn btn-info btn-fill btn-round btn-icon">
			    <i class="fa fa-ellipsis-v visible-on-sidebar-regular"></i>
			    <i class="fa fa-navicon visible-on-sidebar-mini"></i>
		    </button>
        </div>
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      @yield('page-title')
    </div>
    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav navbar-right">

        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="notification">5</span>
            <p class="hidden-md hidden-lg">
              Notifications
              <b class="caret"></b>
            </p>
          </a>
          <ul class="dropdown-menu">
            <li><a href="#">Notification 1</a></li>
            <li><a href="#">Notification 2</a></li>
            <li><a href="#">Notification 3</a></li>
            <li><a href="#">Notification 4</a></li>
            <li><a href="#">Another notification</a></li>
          </ul>
        </li>

        <li class="dropdown dropdown-with-icons">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-list"></i>
            <p class="hidden-md hidden-lg">
              More
              <b class="caret"></b>
            </p>
          </a>
          <ul class="dropdown-menu dropdown-with-icons">
            <li>
              <a href="/mensajes">
                <i class="pe-7s-mail"></i> Mensajes
              </a>
            </li>
            <li>
              <a href="/ayuda">
                <i class="pe-7s-help1"></i> Ayuda
              </a>
            </li>
            <li class="divider"></li>
            <li>
              <a href="/logout" class="text-danger">
                <i class="pe-7s-close-circle"></i> Salir
              </a>
            </li>
          </ul>
        </li>

      </ul>
    </div>
  </div>
</nav>
