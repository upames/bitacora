<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="estilo.css">
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

<br><br><br><br><br><br><br><br>


  </body>
</html>

<?php
$busqueda=$_POST['bucar'];
$query ="SELECT * FROM modificaciones WHERE fecha='$busqueda' ";

$conexion=mysqli_connect("localhost","root","","bitacora") or die("Problemas en la conexión");
$respuesta=mysqli_query($conexion,$query)or die("Problemas en el select".mysqli_error($conexion));
?>
<center> <table class="table table-hover">
           <thead>
       <tr>
         <td> Commit</td>
         <td>Codigo</td>
         <td>Titulo</td>
         <td>Autor</td>
         <td>Fecha</td>
         <td>Entrada</td>
         <td>Salida</td>
         <td>Prueba</td>
         <td>Modulo</td>
       </tr>
       </thead>
<?php
 while($ros= mysqli_fetch_array($respuesta)){
$contra = $ros[0];
echo "<tr>";
echo'<td>'.utf8_encode($ros[0]).'</td>';
echo'<td>'.$ros[1].'</td>';
echo'<td>'.utf8_encode($ros[2]).'</td>';
echo'<td>'.$ros[3].'</td>';
echo'<td>'.$ros[4].'</td>';
echo'<td>'.utf8_encode($ros[5]).'</td>';
echo'<td>'.utf8_encode($ros[6]).'</td>';
echo'<td>'.$ros[7].'</td>';
echo'<td>'.$ros[8].'</td>';
echo "</tr>";}
mysqli_close($conexion);
?>
</table></center>
