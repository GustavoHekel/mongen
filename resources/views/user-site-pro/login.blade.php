<!doctype html>
<html lang="es">
<head>
    @include('user-site-pro.includes.header.meta')
    @include('user-site-pro.includes.header.css')
	<title>Mongen. - Login</title>
</head>
<body>

<nav class="navbar navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Mongen.</a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li>
                   <a href="/registro">
                        Registrarse
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>


<div class="wrapper wrapper-full-page" id="app">
    <div class="full-page login-page" data-color="black" data-image="{{ asset("dist/plugins/light_bootstrap_pro/img/full-screen-image-4.jpg")}}">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form method="post" action="login">
                        {{ csrf_field() }}
                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-center">Login</div>
                                <div class="content">
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input name="email" type="email" placeholder="Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input name="password" type="password" placeholder="Password" class="form-control">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-default btn-wd">Login</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    	<footer class="footer footer-transparent">
            <div class="container">
                <nav class="pull-left">
                    <ul>
                        <li>
                            <a href="/">
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Conocénos
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Planes
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </footer>
    </div>
</div>

</body>

@include('user-site-pro.includes.body.js')
<script type="text/javascript">
    $().ready(function(){
        lbd.checkFullPageBackgroundImage();

        setTimeout(function(){
            // after 1000 ms we add the class animated to the login/register card
            $('.card').removeClass('card-hidden');
        }, 700)
    });
</script>

</html>
