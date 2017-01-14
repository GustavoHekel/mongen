<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ $user->nombre }}</title>
        <!-- Latest compiled and minified CSS -->
    	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous"> -->
        <!-- <link rel="stylesheet" href="http://localhost/mongen/public/dist/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
        <style>
            {{ include(public_path() . '/dist/bower_components/bootstrap/dist/css/bootstrap.min.css') }}
            /*{{ include(public_path() . '/dist/css/homero.css') }}*/
        </style>
        <!-- <link rel="stylesheet" href="{{ asset("dist/css/homero.css")}}"> -->
        <!-- <link rel="stylesheet" href="http://localhost/mongen/public/dist/css/homero.css"> -->
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="row" style="border: solid 1px red;">
                        <div class="col-md-4 sidebar">

                            <!-- FOTO DE PERFIL -->
                            <div class="row">
                                <div class="col-md-12 no-padding">
                                    <img class="img-responsive" src="{{ asset("dist/img/profile-pics/" . $user->avatar)}}">
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
                            <div class="row studies">
                                <div class="col-md-12">
                                    <p class="section">EDUCACIÓN</p>
                                    <br>
                                    @foreach($user->estudios as $estudio)
                                    <div class="row">
                                        <div class="col-md-12">
                                            <p class="period">{{ $estudio->year_from }} - {{ $estudio->year_to or 'Actualidad'}}</p>
                                            <p class="career">{{ $estudio->carrera }}</p>
                                            <p class="institute">{{ $estudio->instituto }}</p>
                                            <hr>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>
                            </div>

                            <div class="row social-networks">
                                <div class="col-md-12">
                                    <p class="section">REDES SOCIALES</p>
                                    <br>
                                    @foreach($user->red->redes as $red => $link)
                                        @if ($link != '')
                                        <p>
                                            <span class="network">{{ $red }}:</span>
                                            <span class="link">{{ $link }}</span>
                                        </p>
                                        @endif
                                    @endforeach
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
