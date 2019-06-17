<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Iniciar Sesion</title>
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





 <form method="post" action="sesionCodigoBarrasProcesa.php">
   <input type="text" name="codigo"  align="center" size="50" placeholder="Codigo de barras" autofocus><br><br>
   <input type="submit" value="Iniciar Sesion">

 </form>
  </body>
</html>