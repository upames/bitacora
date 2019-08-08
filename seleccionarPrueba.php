<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilos.css">
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
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <div class="circuloPosicion">
    <div class="search-box">

    <?php
    $conexion=mysqli_connect("localhost","root","","bitacora") or
                              die("Problemas en la conexión");

                              $consulta = "SELECT * FROM prueba";
                              $respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));

    while ($Datosprueba= mysqli_fetch_array($respuesta)) {
     ?>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
     <a class="search-btn" href="seleccionarPrueba.php?prueba=<?php echo utf8_encode($Datosprueba[1]);  ?>"><?php  echo utf8_encode($Datosprueba[1]);  ?></a>&nbsp;&nbsp;&nbsp;




  <?php  } ?>


 </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>


  </body>
</html>


<?php


@$pruebas=$_GET['prueba'];
$prueba=utf8_decode($pruebas);

if($prueba !=""){

$consultas = "SELECT codigo,titulo,autor,nombre_prueba,nombre_modulo from modificaciones inner join modulo on modificaciones.id_modulo=modulo.id_modulos inner join prueba WHERE  modificaciones.id_prueba=prueba.id_prueba AND nombre_prueba='$prueba'";
$respuestas= mysqli_query($conexion,$consultas)or die("Problemas en el select".mysqli_error($conexion));
?>
<center> <table  class="tabla">
<thead>
  <tr>
    <th height="30" scope="col">Codigo</th>
    <th  height="30" scope="col">Titulo</th>
    <th  height="30" scope="col">autor</th>
    <th   height="30" scope="col">prueba</th>
    <th  height="20" scope="col">modulo</th>
   </tr>
</thead>

<?php

while ($DatosCommit= mysqli_fetch_array($respuestas)) {
  ?>
    <tr>
       <td height="30"><?php echo utf8_encode($DatosCommit[0]); ?></td>
       <td  height="30"><?php echo utf8_encode($DatosCommit[1]); ?></td>
       <td  height="30"><?php echo utf8_encode($DatosCommit[2]); ?></td>
       <td  height="30"><?php echo utf8_encode($DatosCommit[3]); ?></td>
       <td height="20"><?php echo utf8_encode($DatosCommit[4]); ?></td>
   </tr>

<?php } ?>
</table></center>
<?php } ?>
