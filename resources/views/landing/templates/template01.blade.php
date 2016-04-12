<!DOCTYPE html>
<html>
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<style>
   #portada{
        height: 400px;
        width: 100%;
        text-align: center;
        vertical-align:text-bottom;
        padding-top: 50px;
        background: rgb(30, 50, 128);
        background: -moz-linear-gradient(29deg, rgb(30, 50, 128) 24%, rgb(90, 155, 255) 100%);
        background: -webkit-linear-gradient(29deg, rgb(30, 50, 128) 24%, rgb(90, 155, 255) 100%);
        background: -o-linear-gradient(29deg, rgb(30, 50, 128) 24%, rgb(90, 155, 255) 100%);
        background: -ms-linear-gradient(29deg, rgb(30, 50, 128) 24%, rgb(90, 155, 255) 100%);
        background: linear-gradient(119deg, rgb(30, 50, 128) 24%, rgb(90, 155, 255) 100%);
   }
   
   h1{
        text-align: center;
       
   }
   
   h2{
       
        text-shadow: 4px 4px 2px rgba(150, 150, 150, 1);
        text-align: center;

       
   }

   .titulo{
       
       text-align:center;
       font-size: 28px;
       color:#005983;
       font-family: cursive ;
      
       
   }

   .dato{
       
       text-align:center;
       font-size: 28px;
       color:#122b40;
       font-family: cursive ;
 
       
   }
   
   .cuadro{
        background-color: #c9cccf;
        margin-top:15px;
        border-radius: 30px;
        -webkit-box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75);
        -moz-box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75);
        box-shadow: 7px 7px 5px 0px rgba(50, 50, 50, 0.75);
   }

   .barra{
       
       margin-top: 10px;       
   }
   
   .datobarra{
       
       height: 40px;
       text-align:center;

   }
   
   #datosPersonales{
       
       height: 700px;
       
   }
   
   #skills{
       
       height: 700px;
       
   }

</style>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
  .carousel-inner > .item > slide01,
  .carousel-inner > .item > a > slide01 {
      width: 70%;
      margin: auto;
  }
  </style>

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 

</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div id="portada">
            <img src="images/house.jpg" class="img-circle" alt="DrHouse" width="304px" >
            <h1>Gregory House <small>(55 años)</small></h1>
        </div>
    </div>
    </div>





<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
    <li data-target="#myCarousel" data-slide-to="5"></li>

  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      
      <div class="container-fluid slide01">
        <div id="datosPersonales" class="row">
            <h2>Datos Personales</h2>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        Fecha de nacimiento
                </div>
                <div class="dato col-md-6">
                        23/02/1950
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                       Email
                </div>
                <div class="dato col-md-6">
                        drhouse@gmail.com
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        Estado civil
                </div>
                <div class="dato col-md-6">
                        Soltero
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        Fecha de nacimiento
                </div>
                <div class="dato col-md-6">
                        23 de febrero de 1950
                </div>
            </div>
        </div>  
    </div>
      
      
    </div>
      
      <div class="item">
      
      <div class="container-fluid slide01">
        <div id="datosPersonales" class="row">
            <h2>Presentación</h2>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-12">
Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui                </div>
            </div>
            </div>
        </div>  
    </div>
      
<div class="item">
      
      <div class="container-fluid slide01">
        <div id="datosPersonales" class="row">
            <h2>Estudios</h2>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        Terciario
                </div>
                <div class="dato col-md-6">
                       Sed ut perspiciatis unde omnis iste natus error sit voluptatem


                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                       Universitario
                </div>
                <div class="dato col-md-6">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem

                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                    Curso 1
                </div>
                <div class="dato col-md-6">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem

                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                    Curso2
                </div>
                <div class="dato col-md-6">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem

                </div>
            </div>
        </div>  
    </div>
      
      
    </div>
    <div class="item">
             
    <div class="container-fluid" >
        <div id="skills" class="row">
            <h2>Skills</h2>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        Php
                </div>
                <div class="datobarra col-md-6">
                    <div class="progress barra">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        Html
                </div>
                <div class="datobarra col-md-6">
                    <div class="progress barra">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        Css
                </div>
                <div class="datobarra col-md-6">
                    <div class="progress barra">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:60%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        Java
                </div>
                <div class="datobarra col-md-6">
                    <div class="progress barra">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:50%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        JavaScript
                </div>
                <div class="datobarra col-md-6">
                    <div class="progress barra">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:30%">
                            <span class="sr-only">70% Complete</span>
                        </div>
                    </div>
                </div>
            </div>
           
         
        </div>  
    </div>
    </div>
      <div class="item">
      
      <div class="container-fluid slide01">
        <div id="datosPersonales" class="row">
            <h2>Experiencia laboral</h2>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                        Experiencia 1
                </div>
                <div class="dato col-md-6">
                       Sed ut perspiciatis unde omnis iste natus error sit voluptatem


                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                       Experiencia 2
                </div>
                <div class="dato col-md-6">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem

                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                    Experiencia 1               
                </div>
                <div class="dato col-md-6">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem

                </div>
            </div>
            <div class="col-md-8 col-md-offset-2 cuadro">
                <div class="titulo col-md-6">
                    Experiencia 1
                </div>
                <div class="dato col-md-6">
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem

                </div>
            </div>
        </div>  
    </div>
      
      
    </div>

   
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  


</body>
</html>