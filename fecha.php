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
<?php

$consulta = "SELECT * FROM modificaciones";

$conexion=mysqli_connect("localhost","root","","bitacora") or
        die("Problemas en la conexión");
        $respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));
?>
<div id="productos">
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
</div>
</body>
</html>
