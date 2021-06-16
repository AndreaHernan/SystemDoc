<?php
include("../conexion.php");
$nombre= $_POST['nombre'];
$especial= $_POST['especialidad'];
$turno= $_POST['turno'];
$telefono= $_POST['telefono'];
$sql = "INSERT INTO doctores VALUES(null, $nombre, $especial, $turno, $telefono);";
 $query = mysqli_query($mysqli,$sql);
 	if ($query) {
        echo "true";
    }else{
        echo "false";
    }
?>