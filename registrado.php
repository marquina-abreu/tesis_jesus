<?php
include_once("conexion.php");

$carrera=$_POST["carrera"];
$usuario=$_POST["usua"];
$clave=$_POST["clave"];
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$correo=$_POST["correo"];
$telefono=$_POST["telefono"];

$sql=$conexion->query("SELECT * FROM usuarios WHERE nombre_usu='$usuario' LIMIT 1");
$res=$sql->fetch();
if ($res) {
	echo "usuario ya registrado";
}else{
	$li=$conexion->query("INSERT INTO usuarios (id_usuario,nombre_usu,clave,nombre,apellido,telefono,correo,id_carrer)VALUES (null,'$usuario','$clave','$nombre','$apellido','$telefono','$correo',$carrera)");
	if ($li) {
		echo "Usuario Registrado con exito";
	}
}

?>