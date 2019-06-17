<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <title></title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
  </head>
  <body>

   <div class="search-box">
       <a class="search-btn" href="seleccionarUsuario.php?e=1">

         <img src="usuariod.png" height="50" width="50">
         <span class="phone">Erick</span>
       </a>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <a class="search-btn" href="seleccionarUsuario.php?n=2"><img src="usuariod.png" height="50" width="50"></a>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
         <a class="search-btn" href="seleccionarUsuario.php?d=3"><img src="usuariod.png" height="50" width="50"></a>
   </div>




<?php


@$e = $_GET['e'];
@$n = $_GET['n'];
@$d = $_GET['d'];

$conexion=mysqli_connect("localhost","root","","bitacora") or
                          die("Problemas en la conexión");
if($e != ""){
$consulta = "SELECT * FROM modificaciones WHERE autor LIKE'%Erick%'";

$respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));
?>
<div class="tabla">
<center> <table>
<thead>


  <tr whidth="20">
    <td  >Identidicader del Commit</td>
    <td>Titulo</td>
    <td>Autor</td>
    <td>Fecha</td>
    <td>Entrada</td>
    <td>Salida</td>
   </tr>
   </thead>
<?php
while($DatosCommit= mysqli_fetch_array($respuesta)) {
?>
  <tr>
     <td whidth="20"><?php echo utf8_encode($DatosCommit[1]); ?></td>
     <td><?php echo utf8_encode($DatosCommit[2]); ?></td>
     <td><?php echo utf8_encode($DatosCommit[3]); ?></td>
     <td><?php echo utf8_encode($DatosCommit[4]); ?></td>
     <td><?php echo utf8_encode($DatosCommit[5]); ?></td>
     <td><?php echo utf8_encode($DatosCommit[6]); ?></td>
 </tr>

<?php } ?>
</table></center>
</div>
<?php
}
if($n != ""){
$consulta = "SELECT * FROM modificaciones WHERE autor LIKE'%Nestor%'";

$respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));
?>
<div class="tabla">
<center> <table>
  <thead>
    <tr>
      <td>Identidicader del Commit</td>
      <td>Titulo</td>
      <td>Autor</td>
      <td>Fecha</td>
      <td>Entrada</td>
      <td>Salida</td>
    </tr>
  </thead>


<?php
while($DatosCommit= mysqli_fetch_array($respuesta)) {
?>
<tr>
   <td><?php echo utf8_encode($DatosCommit[1]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[2]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[3]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[4]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[5]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[6]); ?></td>
</tr>

<?php } ?>
</table></center>
</div>
<?php
}
if($d != ""){
$consulta = "SELECT * FROM modificaciones WHERE autor LIKE'%Dolores%'";

$respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));
?>
<div class="tabla">
<center> <table>
<thead>
  <tr>
    <td>Identidicader del Commit</td>
    <td>Titulo</td>
    <td>Autor</td>
    <td>Fecha</td>
    <td>Entrada</td>
    <td>Salida</td>
  </tr>
</thead>


<?php
while($DatosCommit= mysqli_fetch_array($respuesta)) {
?>
<tr>
   <td><?php echo utf8_encode($DatosCommit[1]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[2]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[3]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[4]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[5]); ?></td>
   <td><?php echo utf8_encode($DatosCommit[6]); ?></td>
</tr>

<?php } ?>
</table></center>
</div>
<?php
}
mysqli_close($conexion);
 ?>
</body>
</html>
