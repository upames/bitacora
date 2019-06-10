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





 <form method="post" action="registroProductoProcesa.php">
   <input type="text" name="codigo"  align="center" size="50" placeholder="Codigo del producto" required><br><br>
   <input type="text" name="nombre"  align="center" size="50" placeholder="Ingrese un nuevo producto" required><br><br>
   <input type="text" name="cantidad" align="center" size="50" placeholder="cantida del producto" required><br><br>
   <input type="text" name="precio" align="center" size="50" placeholder="Precio del producto" required><br><br>
   <input type="submit" value="Registrar">
 </form>
  </body>
</html>
