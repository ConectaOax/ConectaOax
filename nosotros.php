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

   <script type="text/javascript">
     function alerta()
     {
      alert("su demanda fue enviada exitosamente");
     }
   </script>

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
              <a class="navbar-brand" href="index.php">Conecta Oaxaca</a>
            </div>
            <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li ><a href="index.php">Inicio</a></li>
                                <li><a href="moviles.php">Aplicacion Movil</a></li>

              <li><a target="_blank" href="pdf/manual.pdf">Manual</a></li>


                <li class="active"><a href="">Acerca de nosotros</a></li>

<li><a href="contactanos.php">Contactanos</a></li>
                 <li><a href="javascript:despliegaModal('visible')">Unete</a></li>
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



<br>
<br>
<br>


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <br>
        <br>
       
        <h1 align ="center"><font color="#00000">Misión</font></h1>
        
       
    
    <table align ="center" width="50%">
      <tr>
        <td>
          <div align ="justify"><p><h3><font color="#000">Estar más de cerca con los servicios de seguridad vial que se ofrecen a los ciudadanos, a través de la prevención y denuncias, con tecnologías móviles que ayuden a mejorar la vida en sociedad.</font></h3>
        </td>
      </tr>
    </table>





    <br>
        <br>
       
        <h1 align ="center"><font color="#00000">Visiòn</font></h1>
        
       
    
    <table align ="center" width="50%">
      <tr>
        <td>
          <div align ="justify"><p><h3><font color="#000">Brindar un servicio público de calidad y alternativas viales mediante aplicaciones para teléfonos celulares inteligentes. A fin de responder de manera eficaz y eficiente a las demandas de los ciudadanos.</font></h3>
        </td>
      </tr>
    </table>
             </div>

      




      <!-- =================== SE AGREGA EL CUERPO INFERIOR =================== -->

      <?php require("cuerpoinferior.php"); ?>



      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="http://getbootstrap.com/examples/carousel/#">Back to top</a></p>
        <p>© 2014 Company, Inc. · <a href="http://getbootstrap.com/examples/carousel/#">Privacy</a> · <a href="http://getbootstrap.com/examples/carousel/#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="./Carousel Template for Bootstrap_files/jquery.min.js"></script>
    <script src="./Carousel Template for Bootstrap_files/bootstrap.min.js"></script>
    <script src="./Carousel Template for Bootstrap_files/docs.min.js"></script>
  

</body></html>