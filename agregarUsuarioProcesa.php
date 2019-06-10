<?php

$password = $_POST['password'];
$passeordE = password_hash($password, PASSWORD_DEFAULT);

$conexion=mysqli_connect("localhost","root","","encriptarBlowfish") or
        die("Problemas en la conexión");
        mysqli_query($conexion,"INSERT INTO usuario(idUsuario,nombre_Usuario,email,password)
        values('$_REQUEST[codigo]','$_REQUEST[usuario]','$_REQUEST[correo]','$passeordE')")or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);

$mensaje = "El usuario fue dado de alta: ";
echo "<script>";
echo "alert('$mensaje');";
echo "window.location = 'index.php';";
echo "</script>";


 ?>
