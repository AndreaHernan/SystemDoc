<?php
   	include("../conexion.php");
    $sql = 'SELECT * FROM clientes';
    $query= mysqli_query($mysqli,$sql);
    $res = array();
    while ($row=mysqli_fetch_array($query)) {
    $res[]=['id'=>$row[0],'nombre'=>$row[1],'AP'=>$row[2],'AM'=>$row[3],'telefono'=>$row[4],'direccion'=>$row[5],'Correo'=>$row[6]];
    }
    echo json_encode($res);
?>