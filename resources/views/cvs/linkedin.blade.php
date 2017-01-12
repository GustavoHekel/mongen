<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $user->nombre }}</title>
        <!-- Latest compiled and minified CSS -->
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset("dist/css/homero.css")}}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row" style="border: solid 1px red;">
                        <div class="col-md-4 sidebar">

                            <!-- FOTO DE PERFIL -->
                            <div class="row">
                                <div class="col-md-12">
                                    <img class="img-responsive img-thumbnail" src="{{ asset("dist/img/profile-pics/" . $user->avatar)}}">
                                </div>
                            </div>

                            <!-- NOMBRE Y OCUPACION -->
                            <div class="row my-data">
                                <div class="col-md-12">
                                    <p class="name">{{ $user->nombre }}</p>
                                    <p class="ocupation">Full stack developer</p>
                                </div>
                            </div>

                            <!-- EDUCACION -->
                            <div class="row">
                                <div class="col-md-12">

                                </div>
                            </div>


                        </div>
                        <div class="col-md-8 main-container">
                            hola
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
