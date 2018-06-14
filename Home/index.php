<?php
include_once("../sesion.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestor de Archivos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="../fonts.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/materialize.min.css">
	<script src="../jq/jquery-3.2.1.min.js"></script>

</head>
<body>

<div class="navbar-fixed">
<nav style="background-color:#004d4d;">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="">Inicio</a></li>
        <li><a href="../secciones/">Secciones</a></li>
        <li><a href="../materias_inscritas/">Materias inscritas</a></li>
        <li><a href="../logout.php" >Cerrar Sesión</a></li>
      </ul>
    </div>
  </nav>
  </div>

  <ul id="mobile-demo" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="../images/cuadro.jpg">
      </div>
      <a href="#user"><img class="circle" src="../images/user.png"></a>
      <a href="#name"><span class="white-text name"><?php echo $usuario["usuario_n"]; ?></span></a>
    </div></li>
    <li><a href=""><i class="material-icons">home</i>Inicio</a></li>
    <li><a href="../secciones/"><i class="material-icons">list</i>Secciones</a></li>
    <li><a href="../materias_inscritas/"><i class="material-icons">add_circle</i>Materias inscritas</a></li>
    <li><div class="divider"></div></li>
    <li><a href="../logout.php" class=""><i class="material-icons">settings_power</i>Cerrar Sesión</a></li>
    
  </ul>
  
<br><br><br>


<br>
<div class="container">
  <div class="row">
  <div class="col s12 l8">
  <center>
    <h5 class="header">Bienvenido a Gestor de archivos URBE</h5>
    <br>
    <img src="../images/file-manager.png" style="width:170px; height:175px;" class="responsive-img">
    </center>
  </div>
  </div>
</div>

   
<script src="../js/jss.js"></script>
<script src="../js/materialize.min.js"></script>	
</body>
</html>