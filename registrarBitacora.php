<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilo.css">
      <link rel="stylesheet" href="estilo2.css">
  </head>
  <body>


    <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container">
         <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
             <li><a href="registrarBitacora.php">Registrar bitacora</a></li>
             <li><a href="fecha.php">Buscar por fecha</a></li>
              <li><a href="seleccionarUsuario.php">Bucar por autor</a></li>
             <li><a href="seleccionarPrueba.php">Buscar por prueba</a></li>
               <li><a href="modulo.php">Buscar por modulo</a></li>
           </ul>
         </div>
       </div>
     </nav>


 <form method="post" action="agregarBitacoraProcesa.php">
   <input type="text" name="codigo"  align="center" size="50" placeholder="Codigo" required><br><br>
   <input type="text" name="titulo"  align="center" size="50" placeholder="Ingrese titulo" required><br><br>
   <input type="text" name="autor" align="center" size="50" placeholder="Ingrese autor" required><br><br>
   <input class="col-md-6 form-control" type="date" name="fecha" align="center" size="50" required/><br><br>
   <input type="text" name="entrada" align="center" size="50" placeholder="Ingrese entrada" required><br><br>
   <input type="text" name="salida" align="center" size="50" placeholder="Ingrese salida" required><br><br>

   <select name="prueba2">
     <?php
       $consulta = "SELECT * FROM prueba";

       $conexion=mysqli_connect("localhost","root","toorgarita","bitacora") or
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

   <select name="modulo2">
     <?php
       $consulta1 = "SELECT * FROM modulo";

       $conexion1=mysqli_connect("localhost","root","toorgarita","bitacora") or
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
