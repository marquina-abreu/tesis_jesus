<?php
include_once("conexion.php");

$sql=$conexion->query("SELECT * from carreras");
$r=$sql->fetchAll();


?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Gestor de Archivos</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="fonts.css" rel="stylesheet">
	<link rel="stylesheet" href="css/materialize.min.css">
	<script src="jq/jquery-3.2.1.min.js"></script>
  <script src="js/JqueryValidate.js"></script>

</head>
<body>
<br>
<br>
<div class="row">
    <form class="col s12" action="registrado.php" id="rgus" method="POST">
    <div class="row">
     <div class="input-field col s12 l8">
      <i class="material-icons prefix">list</i>
       <select name="carrera" id="carrera">
          <option value="" disabled>Carreras</option>
       <?php foreach($r as $ca): ?>
          <option value="<?php echo $ca["id_carrera"];?>"><?php echo utf8_encode($ca["nombre_car"]);?></option>
        <?php endforeach; ?>
      </select>
        <label>Elija su Carrera</label>
    </div>
    </div>
      <div class="row">
        <div class="input-field col s12 l8">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix" type="text" name="usua" class="validate" data-length="13">
          <label for="icon_prefix">Usuario</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l8">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_prefix2" type="password" name="clave" class="validate" data-length="20">
          <label for="icon_prefix2">Clave</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l8">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix3" type="text" name="nombre" class="validate" data-length="10">
          <label for="icon_prefix3">Nombre</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l8">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix4" type="text" name="apellido" class="validate" data-length="10">
          <label for="icon_prefix4">Apellido</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12 l8">
          <i class="material-icons prefix">work</i>
          <input id="icon_prefix5" type="text" name="correo" class="validate" data-length="30">
          <label for="icon_prefix5">Correo</label>
        </div>
      </div>
      <div class="row">
      <div class="input-field col s12 l8">
          <i class="material-icons prefix">phone</i>
          <input id="icon_telephone" type="tel" name="telefono" class="validate" data-length="11">
          <label for="icon_telephone">Telefono</label>
        </div>
      </div>
    <div class="row">
      <div class="col s12 m7 x12">
      <center>
      <button type="submit" class="waves-effect waves-light btn-small"><i class="material-icons left">send</i>Registrar</button>
      <br><br>
      <a href="./" class="waves-effect waves-light red btn-small"><i class="material-icons right">arrow_back</i>Volver</a>
      </center>
      </div>
    </div>
    </form>
    <br>
  </div>
  <br>
<script src="js/validar.js"></script>
<script src="js/jss.js"></script>
<script src="js/materialize.min.js"></script>	
</body>
</html>