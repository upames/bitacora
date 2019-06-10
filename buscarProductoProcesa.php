<?php

$consulta = "SELECT * FROM producto WHERE id_Codigo='$_REQUEST[codigo]'";

$conexion=mysqli_connect("localhost","root","","encriptarBlowfish") or
        die("Problemas en la conexión");
        $respuesta= mysqli_query($conexion,$consulta)or die("Problemas en el select".mysqli_error($conexion));
        $passwordCifrado= mysqli_fetch_array($respuesta);

$contra = $passwordCifrado[0];


        if($contra==""){
          $mensaje = "No existe el producto";
          echo "<script>";
          echo "alert('$mensaje');";
          echo "window.location = 'index.php';";
          echo "</script>";
        }else {
          $mensaje = "Nombre: ".$passwordCifrado[1]." Cantidad: ".$passwordCifrado[2]." Precio: ".$passwordCifrado[3];
          echo "<script>";
          echo "alert('$mensaje');";
          echo "window.location = 'buscarProducto.php';";
          echo "</script>";
        }
mysqli_close($conexion);




 ?>
