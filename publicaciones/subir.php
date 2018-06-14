<?php
include_once("../conexion.php");
include_once("config.php");

$u=$_POST["u"];
$m=$_POST["m"];
$ti=$_POST["ti"];
$i=$_FILES["i"]["tmp_name"];
$a=$_POST["a"];
$ii=$_FILES["i"]["name"];

$unlo = $blog_config["dest"] .  $_FILES["i"]["name"];
move_uploaded_file($i, $unlo);  

$sql=$conexion->query("INSERT INTO publicaciones (id_publicacion,nombre_pu,img,asunto,id_mat,id_usu) VALUES (null,'$ti','$ii','$a',$m,$u)");

if ($sql) {
	header("location:exito/");
}else{
	echo "error";
}
?>
