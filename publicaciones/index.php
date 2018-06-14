<?php
include_once("../conexion.php");
include_once("../sesion.php");
$car=$_POST["carrera"];
if (empty($car)) {
  header("location:../materias_inscritas/");
}

$sql=$conexion->prepare("SELECT * FROM publicaciones WHERE id_mat=:i");
$sql->execute(array(":i"=>$car));
$res=$sql->fetchAll();
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
  <script src="../js/JqueryValidate.js"></script>

</head>
<body>

<div class="navbar-fixed">
<nav style="background-color:#004d4d;">
    <div class="nav-wrapper">
      <a href="#!" class="brand-logo"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="../Home/">Inicio</a></li>
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
    <li><a href="../Home/"><i class="material-icons">home</i>Inicio</a></li>
    <li><a href="../secciones/"><i class="material-icons">list</i>Secciones</a></li>
    <li><a href="../materias_inscritas/"><i class="material-icons">add_circle</i>Materias inscritas</a></li>
    <li><div class="divider"></div></li>
    <li><a href="../logout.php" class=""><i class="material-icons">settings_power</i>Cerrar Sesión</a></li>
    
  </ul>
  
<br><br><br>


<br>
<div class="row">
    <br>
<?php
if(!empty($res)){
 ?>
<?php foreach($res as $r): ?>
<div class="row">
    <div class="col s12 m6">
      <div class="card">
        <div class="card-image">
        <center>
          <img src="../images/public/<?php echo $r["img"] ?>" class="responsive-img" />
          </center>
          <span class="card-title"><?php echo $r["nombre_pu"]; ?></span>
        </div>
        <div class="card-content">
          <p><?php echo $r["asunto"]; ?></p>
        </div>
        <div class="card-action">
          <a>Publicada el: <?php echo $r["fecha"]; ?></a>
        </div>
      </div>
    </div>
  </div>
<?php endforeach; ?>
<?php } else {
  echo "<center><h5>Se el primero en publicar !</h5></center><br><br><br>";
} ?>
  <div class="row">
    <div class="col s12 l5">
    <form action="subir.php" enctype="multipart/form-data" id="sbimg" method="POST">
    <label>Subir imagen:</label>
      <input type="file"  name="i" id="i">
      <input type="hidden" value="<?php echo $usuario["i"]; ?>" name="u">
      <input type="hidden" value="<?php echo $car; ?>" name="m">
      <br><br>
      <div class="input-field ">
          <input type="text" id="ti"  name="ti" class="validate">
          <label for="ti">Titulo:</label>
        </div>
      <div class="input-field ">
          <textarea id="a" name="a" class="validate"></textarea>
          <label for="a">Asunto:</label>
        </div>
      <br><br>
      <center>
      <button type="submit" class="waves-effect waves-light btn-small"><i class="material-icons right">add</i>Compartir foto</button>
      <br><br>
      <a href="../materias_inscritas/" class="waves-effect waves-light red btn-small"><i class="material-icons right">arrow_back</i>Volver</a>
      </center>
      </div>
      
    </form>
  <br>
  
  </div>
  </div>
<br>



<script src="../js/jss.js"></script>
<script src="../js/validar.js"></script>
<script src="../js/materialize.min.js"></script>  
</body>
</html>