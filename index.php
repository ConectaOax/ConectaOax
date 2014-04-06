<!DOCTYPE html>
<!-- saved from url=(0042)http://getbootstrap.com/examples/carousel/ -->
<html lang="esp"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    


    <title>Conecta Oaxaca</title>
<link rel="shortcut icon" href="imagenes/icono.jpeg">
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" type rel="stylesheet">
    <link href="bootstrap/css/bootstrap.css" type rel="stylesheet">
   <link href="css/estilos.css" rel="stylesheet">
   <script type="text/javascript" language="javascript" src="bootstrap/js/jquery.js"></script>
   <script type="text/javascript" language="javascript" src="bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" language="javascript" src="js/emergentes.js"></script>

    <link href="bootstrap/css/carousel.css" rel="stylesheet">
    
  <style type="text/css"></style><style id="holderjs-style" type="text/css"></style>
  <style type="text/css">
    body
    {
      background-color:#F7D358;
    }
  </style>
</head>
<!-- NAVBAR
================================================== -->

  <body style="">

 
    <div class="navbar-wrapper">
     

      <div class="container">

        <div class="navbar navbar-inverse navbar-static-top" role="navigation">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">Conecta Oaxaca/a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Inicio</a></li>
                <li><a href="moviles.php">Aplicacion Movil</a></li>
                <li><a target="_blank" href="pdf/manual.pdf">Manual</a></li>

                <li><a href="nosotros.php">Acerca de nosotros</a></li>
                <li><a href="contactanos.php">Contactanos</a></li>
                 <li><a href="">Unete</a></li>
                <li><a href="javascript:despliegaModal('visible')">Iniciar sesiòn</a></li>

                </li>
              </ul>
              
             <!--======================== se mañaden las ventanas emergentes==========================-->



             <?php require("ventanasEmergentes.php"); ?>







             
             </div>
          </div>
        </div>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="item active">
          
          <div class="container">
            <div  class="carousel-caption">
             
            <div align = "center"  class="col-lg-4">
              <img class="img-rounded"   data-src="holder.js/650x350" alt="650x350" src="imagenes/logo7.jpg" style="width: 650px; height: 350px;">
            </div>
                              

            
            </div>
          </div>
        </div>
        <div class="item">
          
          <div class="container">
            <div class="carousel-caption">

              <h1>¿QUÈ ES?.</h1>
              
              <div align ="justify"><p>Conecta Oaxaca, es un sistema que permite a la ciudadanía  acceder a servicios desde su teléfono celular. Formado en dos módulos, un portal web y una app para navegar desde tu smartphone.
La app, Agente de tránsito móvil,  obtiene los datos del propietario del vehículo cuando escanea el código de barras que se encuentra en las placas del mismo. Te notifica mediante un mensaje de texto a tu celular, cuando estás a punto de incurrir en una infracción, y de hacerlo, te informa a tu correo electrónico en tiempo real. 
Desde el portal web, puedes hacer denuncias ciudadanas, referente al transporte público, agentes de tránsito y suministro de agua potable.
Conoce la base de los sitios de taxis, su ubicación y el trazado de su ruta..

             </div>
              </div>
          </div>
        </div>
        <div class="item">
          <div class="container">
            <div class="carousel-caption">
              <h1>¿ CÓMO FUNCIONA?</h1>
              


<iframe width="560" height="315" src="//www.youtube.com/embed/JRMOMjCoR58" frameborder="0" allowfullscreen></iframe>

              </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="http://getbootstrap.com/examples/carousel/#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div><!-- /.carousel -->



    <!-- Bloque de imagenes 
    ================================================== -->
    
    <div class="container marketing">

      <!-- Bloque de datos de Denuncia Publica -->
      <div class="row">
        <div class="col-lg-4">
          <h1><font color="#00000">Denuncia Pública</font></h1>
          <a href= "denunciatransporte.php"> <img class="img-circle" data-src="holder.js/250x250" alt="250x250" src="imagenes/denuncua.png" style="width: 250px; height: 250px;"></a>
          <p></p>
        </div><!-- /.col-lg-4 -->
        

     <!-- Bloque de datos de  Tranporte-->
        <div class="col-lg-4">
          <h1><font color="#00000">Transporte</font></h1>
          <a href= "transporte.php"><img class="img-circle" data-src="holder.js/250x250" alt="250x250" src="imagenes/taxi.jpg" style="width: 250px; height: 250px;">
          <p></p>
        </div><!-- /.col-lg-4 -->
        

     
     <!-- Bloque de datos de  servicios publicos-->

        <div class="col-lg-4">
          <h1><font color="#00000">Servicios Publicos</font></h1>
          <img class="img-circle" data-src="holder.js/250x250" alt="250x250" src="imagenes/llave4.jpg" style="width: 250px; height: 250px;">
          <p></p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->



      
      

      <!-- =================== SE AGREGA EL CUERPO INFERIOR =================== -->

      <?php require("cuerpoinferior.php"); ?>

      <!-- FOOTER -->
      <footer>
        
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Carousel Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Carousel Template for Bootstrap_files/bootstrap.min.js"></script>
    <script src="./Carousel Template for Bootstrap_files/docs.min.js"></script>
  

</body></html>