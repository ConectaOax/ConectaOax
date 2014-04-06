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


                <li><a href="nosotros.php">Acerca de nosotros</a></li>

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
        <h1 align="center"> <font color="#00000">Bienvenido</font> </h1>
        <h2 align ="center"><font color="#00000">Realiza tu denuncia, tus datos estan protegidos</font></h2>

      <form >
        <table align = "center">
          <tr>
            <td>
              <h3><font color="#00000">Selecciona la categoria:   </font></h3>
            </td>
            <td>
              <p></p>
                <select class="form-control">
                  <option><h3>Transporte Publico<h3></option>
                  <option><h3>Suministro Agua Potable<h3></option>
                  
                  <option>Agentes de transito</option>
                  
                  <option>Recolectores de Basura</option>
                </select>
              
         
            </td>

          </tr>
          <tr>
            <td>
              <h3><font color="#00000">Nombre:</font></h3>
            </td>
            <td>
              <input type ="text" class="form-control" id = "nombre" name ="nombre">
            </td>
          </tr>
          <tr>
            <td>
              <h3><font color="#00000">Apellido Paterno:</font></h3>
            </td>
            <td>
              <input type ="text" class="form-control" id = "apellido" name ="apellido">
            </td>
          </tr>
          <tr>
            <td>
              <h3><font color="#00000">Apellido Materno:</font></h3>
            </td>
            <td>
              <input type ="text" class="form-control" id = "materno" name ="materno">
            </td>
          </tr>
          <tr>
            <td>
              <h3>
                <font color="#00000">Denuncia:</font>

              </h3>
              <br>
              <br>
              <br>
            </td>
            <td>
              <textarea id="denuncia" class="form-control" rows="8" cols="50"> </textarea>
            </td>
          </tr>
        </table>
        <br>
        <table align="center">
          <tr>
            <td>
              <button class="btn btn-danger" id="enviar" onClick="alerta()">Enviar</button>
            </td>
            <td>
              <p></p>
            </td>
            
          </tr>
        </table>
       
    </form>

    <table align ="center">
      <tr>
        <td>
          <a href="index.php"><h3>Regresar</h3></a>
        </td>
      </tr>
    </table>

      




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