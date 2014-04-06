 <!-- ============== Ventana emergente de login  ============= -->
  <p></p>

<div id="ventanamodal">
 <div class="jumbotron"  id="ventana">
  <form  class="form-signin" METHOD="POST"  action="prueba.php">

          <form class="form-signin" role="form">
                <h2 class="form-signin-heading">Iniciar sesion</h2>
                <input type="email" class="form-control" placeholder="Email address" required="" autofocus="">
                <input type="password" class="form-control" placeholder="Password" required="">
                <label class="checkbox">
                  <input type="checkbox" value="remember-me"> Recordar mi contraceña
                </label>
                <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
          </form>
        <br>
            
              
              
          <div align ="center">

               <button onClick="javascript:despliegaModal('hidden')" type="button" class="btn btn-default btn-lg">
                  <span class="glyphicon glyphicon-remove-circle"></span>Cancelar
               </button>
          </div>
   </form>
   <p></p>
 </div>
</div>

<!-- ============== Ventana emergente de MAPA DE CRUZ ROJA  ============= -->

<div id="despliegaModalLetraB">
 <div class="jumbotron"  id="ventana">
  <table align = "center" bgcolor= "#00FFFF">
    <tr >
      <td bgcolor= "#ffffff"><img src="imagenes/crm.gif" width= "60" height = "70">
      </td>
      <td bgcolor= "#ffffff"><h3>Cruz Roja Mexicana</h3>
      </td>
    </tr>
  </table>
     
          <?php require("mapacruzroja.php"); ?>

               <form  class="form-signin" METHOD="POST"  action="prueba.php">

          
            
              
              
          <div align ="center">

               <button onClick="javascript:despliegaModalb('hidden')" type="button" class="btn btn-default btn-lg">
                  <span class="glyphicon glyphicon-remove-circle"></span>Cancelar
               </button>
          </div>
   </form>
   <p></p>
 </div>
</div>





