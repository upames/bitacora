<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilos.css">
    <link rel="stylesheet" href="estilo2.css">
    <title></title>
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
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

<div class="circuloPosicion">
   <div class="search-box">
       <a class="search-btn" href="seleccionarUsuario.php?e=1">


         <span class="phone">Erick</span>
       </a>

       <a class="search-btn" href="seleccionarUsuario.php?n=2">

         <span class="phone">Nestor</span>
       </a>

         <a class="search-btn" href="seleccionarUsuario.php?d=3">

           <span class="phone">Dolores</span>
         </a>
   </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>


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
