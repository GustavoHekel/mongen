<!-- Header -->
<header id="header" class="alt">
    <h1><a href="/">Mongen.</a></h1>
    <nav id="nav">
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/planes">Planes</a></li>
            <li><a href="/ejemplos">Ejemplos</a></li>
            @if (Auth::guest())
            <li><a href="/login" class="button">Login</a></li>
            @else
            <li><a href="/dashboard" class="button">Mi cuenta</a></li>
            @endif
        </ul>
    </nav>
</header>
