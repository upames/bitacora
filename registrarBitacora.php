<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <link rel="stylesheet" href="estilo.css">
    <link rel="stylesheet" href="estilo2.css">
      <nav>
              <ul class="nav navbar-nav">
                <li><a href="index.php">P&aacutegina Principal</a></li>
                <li><a href="agregarUsuarioinfo.php">Registrar</a></li>
                <li><a href="login.php">Iniciar sesi&oacuten</a></li>
              </ul>
        </nav>


 <form method="post" action="agregarBitacoraProcesa.php">
   <input type="text" name="codigo"  align="center" size="50" placeholder="Codigo" required><br><br>
   <input type="text" name="titulo"  align="center" size="50" placeholder="Ingrese titulo" required><br><br>
   <input type="text" name="autor" align="center" size="50" placeholder="Ingrese autor" required><br><br>
   <input type="text" name="fecha" align="center" size="50" placeholder="Ingrese fecha" required><br><br>
   <input type="text" name="entrada" align="center" size="50" placeholder="Ingrese entrada" required><br><br>
   <input type="text" name="salida" align="center" size="50" placeholder="Ingrese salida" required><br><br>

   <select>
     <?php
       $consulta = "SELECT * FROM prueba";

       $conexion=mysqli_connect("localhost","root","","bitacora") or
        die("Problemas en la conexión");
        $respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));

        mysqli_close($conexion);
        

        while ($pruebas= mysqli_fetch_array($respuesta)) 
        {
          $valor=$pruebas['id_prueba'];
          $valor2=$pruebas['nombre_prueba'];

          echo "<option value=".$valor.">".$valor2."</option>\n";
        }


     ?>

   </select>

   <select>
     <?php
       $consulta1 = "SELECT * FROM modulo";

       $conexion1=mysqli_connect("localhost","root","","bitacora") or
        die("Problemas en la conexión");
        $respuesta1= mysqli_query($conexion1,$consulta1)or die("Problemas en el select".mysqli_error($conexion1));

        mysqli_close($conexion1);
        

        while ($pruebas1= mysqli_fetch_array($respuesta1)) 
        {
          $valor1=$pruebas1['id_modulo'];
          $valor12=$pruebas1['nombre_modulo'];

          echo "<option value=".$valor1.">".$valor12."</option>\n";
        }


     ?>

   </select>
   <input type="submit" value="Registrar">

 </form>
  </body>
</html>