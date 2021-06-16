<?php
    include("../conexion.php");
    $nombre = $_POST['nombre'];
    $AP = $_POST['AP'];
    $AM = $_POST['AM'];
    $telefono = $_POST['telefono'];
    $direccion = $_POST['direccion'];
    $Correo = $_POST['correo'];
    $sql = "INSERT INTO clientes VALUES(null,'$nombre','$AP','$AM',$telefono,'$direccion','$Correo');";
    $query = mysqli_query($mysqli,$sql);
    if ($query) {
        echo "true";
    }else{
        echo "false";
    }
?>