<?php

$codigo= $_POST['codigo'];
$titulo= $_POST['titulo'];
$autor= $_POST['autor'];
$fecha= $_POST['fecha'];
$entrada= $_POST['entrada'];
$salida= $_POST['salida'];
$prueba= $_POST['prueba2'];
$modulo= $_POST['modulo2'];

$conexion=mysqli_connect("localhost","root","toorgarita","bitacora") or
        die("Problemas en la conexión");
        mysqli_query($conexion,"INSERT INTO modificaciones(codigo,titulo,autor,fecha,entrada,salida,id_prueba,id_modulo)
        values('$codigo','$titulo','$autor','$fecha','$entrada','$salida','$prueba','$modulo')")or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);

$mensaje = "Se agregaron los datos";
echo "<script>";
echo "alert('$mensaje');";
echo "window.location = 'registrarBitacora.php';";
echo "</script>";

 ?>