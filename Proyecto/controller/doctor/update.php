<?php
 require_once '../conexion.php';
  $id=$_POST['id'];
  $nombre=$_POST['nombre'];
  $especia=$_POST['especialidad'];
  $turno=$_POST['turno'];
  $tel=$_POST['telefono'];
 $sql= "UPDATE doctores SET nombre='$nombre', especialidad='$especia', turno='$turno', telefono='$tel' WHERE id=$id";
 $query = mysqli_query($mysqli,$sql);
 if ($query) {
 	echo "true";
 }else{
 	echo "false";
 	
 }
?>