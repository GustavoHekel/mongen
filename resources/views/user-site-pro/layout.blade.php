<!doctype html>
<html lang="es">
<head>
    @include('user-site-pro.includes.header.meta')
    @include('user-site-pro.includes.header.css')
    <title>Mongen</title>
</head>
<body>
    <div id="app" class="wrapper">
        @include('user-site-pro.includes.body.sidebar')
        <div class="main-panel">
            @include('user-site-pro.includes.body.main.navbar')
            <div class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </div>
            @include('user-site-pro.includes.body.main.footer')
            <div class="loading-modal"></div>
        </div>
    </div>
</body>
@include('user-site-pro.includes.body.js')
@stack('scripts')
</html>
