<?php
require("conection.php"); //Incluir los datos de la conexion que estan en el archivo constants.php

$mysqli = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME); //Crear la conexion a la base de datos 
echo "estoy dentro...?";
if ($mysqli===false){
    die ("ERROR: no se establecio la conexion" ." ". mysqli_connect_error());
  }
?>
<?php form action="index.php" method="post">
Nombre: <input type="text" name="nombre"><br>
Email: <input type="text" name="email"><br>
Enviar <input type="submit" name="enviar">
</form>
<?php
if(isset($_POST['enviar'])) {
    if(empty($_POST["nombre"])){
        echo "El nombre es requerido";
    } else {
    $nombre = $_POST["nombre"];
}
    // Más código...
}?>