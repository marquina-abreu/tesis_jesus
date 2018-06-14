<?php
include_once("../conexion.php");

$usuario=$_POST["usuario"];
$clave=$_POST["clave"];

$sql=$conexion->prepare("SELECT * FROM usuarios  WHERE nombre_usu=:usu AND clave=:clave");
$sql->execute(array(":usu"=>$usuario,":clave"=>$clave));
$res=$sql->fetch();
if ($res) {
	session_start();
	 $_SESSION["usu"]=array("usuario_n"=>$usuario,"car"=>$res["id_carrer"],"i"=>$res["id_usuario"]);
	 echo "<div class='container'><p class='text-success'>BIENVENIDO </p></div>";
	echo"<script>window.location='../Home/';</script>"; 
}else{
	echo "<div class='container'><p class='text-danger'>Usuario o Contraseña incorrectos </p></div>";
}

?>