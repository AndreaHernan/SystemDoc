<?php
	require_once '../conexion.php';
	$id= $_POST['id'];
	$sql = "DELETE FROM doctores WHERE id='$id'"; 
	$query= mysqli_query($mysqli,$sql);
	if ($query) {
	echo "true";
	} else {
	echo "false";
	}
?>