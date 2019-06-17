<?php

$consulta = "SELECT * FROM usuario WHERE idUsuario='$_REQUEST[codigo]'";

$conexion=mysqli_connect("localhost","root","","encriptarBlowfish") or
        die("Problemas en la conexión");
        $respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));
        $passwordCifrado= mysqli_fetch_array($respuesta);

$contra = $passwordCifrado[0];


        if($contra==""){
          $mensaje = "No existe un usuario con ese codigo";
          echo "<script>";
          echo "alert('$mensaje');";
          echo "window.location = 'index.php';";
          echo "</script>";
        }else {
          echo "<script>";
          echo "window.location = 'dentroDeSesion.php';";
          echo "</script>";

          header("Location: dentroDeSesion.php?passwordCifrado=$passwordCifrado[1]");
        }
mysqli_close($conexion);




 ?>
