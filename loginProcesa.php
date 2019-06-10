<?php

$password = $_POST['password'];
$usuario = $_POST['usuario'];

$consulta = "SELECT password FROM usuario WHERE nombre_Usuario='$usuario'";


$conexion=mysqli_connect("localhost","root","","encriptarBlowfish") or
        die("Problemas en la conexión");
        $respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));
        $passwordCifrado= mysqli_fetch_array($respuesta);

$contra = $passwordCifrado[0];


        if(password_verify($password, $contra)){
          $mensaje = "Se encontro similitud de contraseña, decifrando es igual ".$password." a ".$contra;
          echo "<script>";
          echo "alert('$mensaje');";
          echo "window.location = 'dentroDeSesion.php';";
          echo "</script>";
        }else {
          $mensaje = "No se puede acceder revisa que tus datos sean correctos";
          echo "<script>";
          echo "alert('$mensaje');";
          echo "window.location = 'login.php';";
          echo "</script>";
        }
mysqli_close($conexion);





 ?>
