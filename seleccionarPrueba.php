<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <center> <table>

    <?php
    $conexion=mysqli_connect("localhost","root","","bitacora") or
                              die("Problemas en la conexión");

                              $consulta = "SELECT * FROM prueba";
                              $respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));

    while ($Datosprueba= mysqli_fetch_array($respuesta)) {
     ?>

<tr>
  <th>
     <a href="seleccionarPrueba.php?prueba=<?php echo utf8_encode($Datosprueba[1]);  ?>"><?php  echo utf8_encode($Datosprueba[1]);  ?></a>
  </th>
</tr>


  <?php  } ?>
 </table></center>




  </body>
</html>


<?php


@$pruebas=$_GET['prueba'];
$prueba=utf8_decode($pruebas);

if($prueba !=""){

$consultas = "SELECT codigo,titulo,autor,nombre_prueba,nombre_modulo from modificaciones inner join modulo on modificaciones.id_modulo=modulo.id_modulo inner join prueba WHERE  modificaciones.id_prueba=prueba.id_prueba AND nombre_prueba='$prueba'";
$respuestas= mysqli_query($conexion,$consultas)or die("Problemas en el select".mysqli_error($conexion));
?>
<center> <table  class="tabla">
  <tr>
    <th height="30" scope="col">Codigo</th>
    <th  height="30" scope="col">Titulo</th>
    <th  height="30" scope="col">autor</th>
    <th   height="30" scope="col">prueba</th>
    <th  height="20" scope="col">modulo</th>
   </tr>
<tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr></tr>

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
  <tr><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td><td><hr></td></tr></tr>

<?php } ?>
</table></center>
<?php } ?>
