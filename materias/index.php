<?php
include_once("../conexion.php");
include_once("../sesion.php");

$se=$_POST["all_section"];
$sq=$conexion->prepare("SELECT * FROM materias WHERE id_secc=:c");
$sq->execute(array(":c"=>$se));
$mat=$sq->fetchAll();

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

<div class="row">
  <div class="col s12 l6">
    <h4>Lista de las materias :</h4>
    <table class="table">
      <thead>
        <tr>
          <th><center><h5>Materias</h5></center></th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($mat as $materia): ?>
        <tr>
          <td><center><?php echo utf8_encode($materia["nombre_mat"]); ?></center></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
      
    </table>
    <br>
  </div>
</div>
<div class="row">
  <div class="col s12 l6">
    <h4>Inscribir Materia</h4>
    <div id="lbmss"></div>
    <div class="input-field col s12">
    <select id="m">
      <option  disabled>Elija su opción</option>
      <?php foreach($mat as $ma): ?>
      <option value="<?php echo $ma["id_materia"];?>"><?php echo utf8_encode($ma["nombre_mat"]); ?></option>
      <?php endforeach;?>
    </select>
    <label>Seleccione las materias</label>
    <input type="hidden" id="u" value="<?php echo $usuario["i"]; ?>">
  </div>
  <center><button id="agm" class="waves-effect waves-light btn-small"><i class="material-icons right">add</i>Agregar materia</button></center>
  <br>
    <center><a href="../secciones/" class="waves-effect waves-light red btn-small"><i class="material-icons right">arrow_back</i>Volver</a>
    </center>
  </div> 
</div>

<script src="../js/jss.js"></script>
<script src="../js/materialize.min.js"></script>  
</body>
</html>