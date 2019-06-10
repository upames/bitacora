<?php

$nombre=$_GET["passwordCifrado"];
?>

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
             <li><a href="dentroDeSesion.php">P&aacutegina Principal</a></li>
           </ul>
         </div>
       </div>
     </nav>
     <div class="container">
       <div class="row">

       <center><h1>¡BIENVENIDO <?php echo $nombre ?>!</h1></center>
       <center><h1>Iniciaste sesiòn</h1></center>
  </body>
</html>
