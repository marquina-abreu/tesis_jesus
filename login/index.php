<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Gestor de Archivos - Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link href="../fonts.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/materialize.min.css">
	<script src="../jq/jquery-3.2.1.min.js"></script>

</head>
<body>

<center>
<div class="">
<br><br><br>
  <div class="row">
  <div class="col s12 l7">
    <img src="../images/user.png" style="width:100px; height:110px;" class="responsive-img">
    <br>
    
      <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input id="icon_prefix1" type="text" class="validate" data-length="13">
          <label for="icon_prefix1">Usuario</label>
        </div>
      <div class="input-field col s12">
          <i class="material-icons prefix">vpn_key</i>
          <input id="icon_prefix2" type="password" class="validate" data-length="20">
          <label for="icon_prefix2">Contraseña</label>
        </div>
        <br>
        <div id="lab"></div>
    <a  id="logear" class="waves-effect waves-light btn"><i class="material-icons right">cloud</i>Iniciar Sesión</a>
    <br><br>
    <a >¿Olvido su Contraseña?</a>
  </div>
  </div>
</div>
</center>

<script src="../js/jss.js"></script>
<script src="../js/materialize.min.js"></script>	
</body>
</html>