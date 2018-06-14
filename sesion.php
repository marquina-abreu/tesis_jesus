<?php
@session_start();
$usuario=$_SESSION['usu'];

if (!$_SESSION['usu']) {
	header("Location: ../");
}



?>
