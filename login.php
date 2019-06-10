<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <link rel="stylesheet" href="estilo.css">
    	<link rel="stylesheet" href="estilo2.css">
    <nav class="navbar navbar-inverse navbar-fixed-top">
       <div class="container">
         <div id="navbar" class="collapse navbar-collapse">
           <ul class="nav navbar-nav">
             <li><a href="index.php">P&aacutegina Principal</a></li>
             <li><a href="agregarUsuarioinfo.php">Registrar</a></li>
             <li><a href="login.php">Iniciar sesi&oacuten</a></li>
           </ul>
         </div>
       </div>
     </nav>
     <div class="container">
       <div class="row">

         <form method="post" action="loginProcesa.php">
           <input type="text" name="usuario"  align="center" size="50" placeholder="Ingrese su usuario"><br><br>
           <input type="password" name="password" align="center" size="50" placeholder="Ingrese su password"><br><br>
              <input type="submit" value="Iniciar Sesión">
         </form>
  </body>
</html>
