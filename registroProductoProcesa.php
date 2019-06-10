<?php
$conexion=mysqli_connect("localhost","root","","encriptarBlowfish") or
        die("Problemas en la conexión");
        mysqli_query($conexion,"INSERT INTO producto(id_Codigo,nombre_producto,cantidad,precio)
        values('$_REQUEST[codigo]','$_REQUEST[nombre]','$_REQUEST[cantidad]','$_REQUEST[precio]')")or die("Problemas en el select".mysqli_error($conexion));
mysqli_close($conexion);

$mensaje = "El producto fue agregado de manera satisfactoria";
echo "<script>";
echo "alert('$mensaje');";
echo "window.location = 'registroProducto.php';";
echo "</script>";

 ?>
