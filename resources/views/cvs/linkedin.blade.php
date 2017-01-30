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
                                <!-- <p class="ocupation">Full stack developer</p> -->
                                <p class="ocupation">Hincha de Racing</p>
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
                                        <p class="period">{{ $curso->year_from }}</p>
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
                                    Actualmente me desempeño en el area de operaciones fluviales de una compañia naviera.
                                    Analista de operaciones de carga y descarga de barcazas con carga liquida y seca traccionadas por remolcadores en varios puertos Argentinos upriver, Uruguay, Paraguay Brasil y Bolivia.
                                    Entrega de provisiones a los remolcadores.
                                    Actualizacion a los clientes sobre las posiciones de sus cargas.
                                    Ingreso y analisis de facturas dentro del sistema de la compañia de todos los gastos portuarios de las operaciones llevadas adelante por la flota en Argentina y Uruguay.
                                    En los últimos 8 años he trabajado en el rubro maritimo desempeñando mis actividades en una Agencia Maritima con oficina central en Buenos Aires y sucursales en Rosario, San Lorenzo y Campana.
                                    Me considero una persona comprometida, responsable, optimista, sociable, con capacidad de gestión y coordinación, con muchas ganas de progresar y tener nuevas responsabilidades para poder dejar lo mejor de mi en cada proyecto o tareas que lleve a cabo.
                                    En constante crecimiento personal y profesionalmente,
                                    Cursando el 3º año de la Licenciatura en Transporte y logistica
                                    adquiriendo nuevos conocimientos y aptitudes que me van a dejar cumplir
                                    con los objetivos de la mejor manera posible a nivel profesional.
                                    Abierto a escuchar nuevas propuestas

                                    <!-- Desarrollador Full Stack con más de 6 años de experiencia en el rubro.
                                    Siempre estoy buscando nuevos desafíos que me lleven a conocer las mejores prácticas, las últimas tecnologías y los mejores talentos.
                                    Mis tareas habituales incluyen desarrollo tanto del frontend como del backend, diseño de bases de datos y análisis de código.
                                    Me considero una persona muy exigente conmigo mismo lo que me lleva a buscar un nivel de excelencia en todo lo que hago.
                                    Mi principal objetivo personal es mantenerme actualizado en un mundo tan cambiante y demandante como es el de el desarrollo web.
                                    Actualmente me encuentro cursando el 3er año de la carrera Ingeniería en Sistemas de Información en la Universidad Tecnológi -->
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
                                    <div class="col-xs-6 skill-container">
                                        <p class="skill-name">{{ $skill->nombre }}</p>
                                    </div>
                                    <div class="col-xs-6 skill-container">
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
                                    <div class="col-xs-6 skill-container">
                                        <p class="skill-name">{{ $idioma->idioma }}</p>
                                    </div>
                                    <div class="col-xs-6 skill-container">
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
