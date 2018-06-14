<?php 
include_once("../conexion.php");
$m=$_POST["m"];
$u=$_POST["u"];

$sql=$conexion->query("INSERT INTO materia_inscrita (id_materia_i,id_usuario_i) VALUES ($m,$u)");
if ($sql) {
	echo "<script>
		M.toast({html: 'Materia registrada con exito!'});
	</script>";
}else{
	echo "<script>
		M.toast({html: 'La materia ya se encuentra inscrita!'});
	</script>";
}
?>