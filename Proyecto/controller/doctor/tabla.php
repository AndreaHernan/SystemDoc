<?php
include("../conexion.php");

$sql ='SELECT * FROM doctores';
$query = mysqli_query($mysqli,$sql);
$res = array();
while ( $row=mysqli_fetch_array($query)) {
	$res[]=['id'=>$row[0],'nombre'=>$row[1],'especialidad'=>$row[2],'turno'=>$row[3],'telefono'=>$row[4]];
	}
	 echo json_encode($res);
?>