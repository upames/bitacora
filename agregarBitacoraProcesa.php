<?php

$codigo= $_POST['codigo'];
$titulo= $_POST['titulo'];
$autor= $_POST['autor'];
$fecha= $_POST['fecha'];
$entrada= $_POST['entrada'];
$salida= $_POST['salida'];
$prueba= $_POST['prueba2'];
$modulo= $_POST['modulo2'];

$conexion=mysqli_connect("localhost","root","","bitacora") or
        die("Problemas en la conexión");
        mysqli_query($conexion,"INSERT INTO modificaciones(codigo,titulo,autor,fecha,entrada,salida,id_prueba,id_modulo)
        values('$_REQUEST[codigo]','$_REQUEST[usuario]','$_REQUEST[correo]','$passeordE')")or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);

$mensaje = "El usuario fue dado de alta: ";
echo "<script>";
echo "alert('$mensaje');";
echo "window.location = 'index.php';";
echo "</script>";


 ?>