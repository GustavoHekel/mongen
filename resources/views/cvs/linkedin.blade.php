<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>{{ $user->nombre }}</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset("dist/css/homero.css")}}">
    <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> -->
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="{{ $col_config }}">
                <div class="row" style="height: 100%">
                    <div class="col-xs-3 sidebar">

                        <!-- FOTO DE PERFIL -->
                        <div class="row profile-pic">
                            <div class="col-xs-12 no-padding">
                                <img class="img-responsive" src="{{ asset("dist/img/profile-pics/" . $user->avatar)}}">
                            </div>
                        </div>

                        <!-- NOMBRE Y OCUPACION -->
                        <div class="row my-data">
                            <div class="col-xs-12">
                                <p class="name">{{ $user->nombre }}</p>
                                <p class="ocupation">Full stack developer</p>
                            </div>
                        </div>

                        <!-- EDUCACION -->
                        <div class="row studies">
                            <div class="col-xs-12">
                                <p class="section">EDUCACIÓN</p>
                                @foreach($user->estudios as $estudio)
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p class="period">{{ $estudio->year_from }} - {{ $estudio->year_to or 'Actualidad'}}</p>
                                        <p class="career">{{ $estudio->carrera }}</p>
                                        <p class="institute">{{ $estudio->instituto }}</p>
                                        <hr>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <!-- CURSOS -->
                        <div class="row studies">
                            <div class="col-xs-12">
                                <p class="section">CURSOS</p>
                                @foreach($user->cursos as $curso)
                                <div class="row">
                                    <div class="col-xs-12">
                                        <p class="period">{{ $curso->year_from }} - {{ $curso->year_to or 'Actualidad'}}</p>
                                        <p class="career">{{ $curso->nombre }}</p>
                                        <p class="institute">{{ $curso->instituto }}</p>
                                        <hr>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="row social-networks">
                            <div class="col-xs-12">
                                <p class="section">REDES SOCIALES</p>
                                @foreach($user->red->redes as $red => $link)
                                @if ($link != '')
                                <p class="network-detail">
                                    <span class="network">{{ $red }}:</span>
                                    <span class="link">{{ $link }}</span>
                                </p>
                                @endif
                                @endforeach
                            </div>
                        </div>


                    </div>
                    <div class="col-xs-9 main-container">

                        <!-- EXTRACTO -->
                        <div class="row extract">
                            <div class="col-xs-12">
                                <p class="section">
                                    EXTRACTO
                                </p>
                                <p class="presentation">
                                    <span id="pic"></span>
                                    <span id="div"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed semper metus ac libero vehicula, vitae congue risus vehicula. Vestibulum nisl massa, sagittis ut felis quis, accumsan iaculis justo. Praesent ullamcorper ornare lacinia. Phasellus tortor nunc, faucibus vel eros nec, dictum laoreet quam. In vel malesuada risus. Aenean auctor, odio et bibendum euismod, dolor mauris tincidunt mauris, quis convallis elit metus quis metus. Vestibulum viverra quam nec convallis consequat. Sed sit amet tincidunt augue. Nunc condimentum elit non lectus mollis sollicitudin.
                                </p>
                            </div>
                        </div>

                        <!-- CONTACTO -->
                        <div class="row contact">
                            <div class="col-xs-6">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x"></i>
                                    <i class="fa fa-phone fa-stack-1x fa-inverse"></i>
                                </span>
                                011 3012 1510
                                <br>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x"></i>
                                    <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                                </span>
                                {{ $user->email }}
                            </div>
                            <div class="col-xs-6">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x"></i>
                                    <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>
                                </span>
                                <span class="state">{{ $user->provincia->nombre}}</span>, <span class="country">{{ $user->pais->nombre}}</span>
                                <br>
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-square fa-stack-2x"></i>
                                    <i class="fa fa-birthday-cake fa-stack-1x fa-inverse"></i>
                                </span>
                                {{ $user->fecha_nacimiento->format('d/m/Y') }}
                            </div>
                        </div>

                        <!-- EXPERIENCIA -->
                        <div class="row experience">
                            <div class="col-xs-12">
                                <p class="section">
                                    EXPERIENCIA
                                </p>
                                @foreach($user->trabajos as $trabajo)
                                <p class="short-description">{{ $trabajo->puesto }} - {{ $trabajo->lugar }}</p>
                                <p class="period">{{ $trabajo->month_from}}/{{ $trabajo->year_from}} -
                                    @if ($trabajo->year_to != null)
                                    {{ $trabajo->month_to }}/{{ $trabajo->year_to}}
                                    @else
                                    ACTUALIDAD
                                    @endif
                                </p>
                                <p class="description">{{ $trabajo->detalle }}</p>
                                @endforeach
                            </div>
                        </div>

                        <!-- SKILLS -->
                        <div class="row skills">
                            <div class="col-xs-6">
                                <p class="section">
                                    HABILIDADES TÉCNICAS
                                </p>
                                <br>
                                @foreach ($user->skills as $skill)
                                <div class="row">
                                    <div class="col-xs-4 skill-container">
                                        <p class="skill-name">{{ $skill->nombre }}</p>
                                    </div>
                                    <div class="col-xs-8 skill-container">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-linkedin" style="width: {{ $skill->nivel * 10 }}%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        <!-- </div> -->

                        <!-- SKILLS -->
                        <!-- <div class="row idiomas"> -->
                            <div class="col-xs-6">
                                <p class="section">
                                    IDIOMAS
                                </p>
                                <br>
                                @foreach ($user->idiomas as $idioma)
                                <div class="row">
                                    <div class="col-xs-4 skill-container">
                                        <p class="skill-name">{{ $idioma->idioma }}</p>
                                    </div>
                                    <div class="col-xs-8 skill-container">
                                        <div class="progress">
                                            <div class="progress-bar progress-bar-linkedin" style="width: {{ $idioma->nivel * 10 }}%;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        <!-- AFICIONES -->
                        <div class="row hobbies">
                            <div class="col-xs-12">
                                <p class="section">
                                    AFICIONES
                                </p>
                                <br>
                                <p class="hobbies-description">
                                    @foreach($user->intereses as $interes)
                                    {{ $interes->descripcion }} /
                                    @endforeach
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.js"></script>
    <script type="text/javascript" src="{{ asset("dist/js/homero.js") }}"></script>
</body>
</html>
