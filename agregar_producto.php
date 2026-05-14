<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$imagen = $_POST['imagen'];

$sql = "INSERT INTO productos
(nombre, precio, stock, imagen)

VALUES
('$nombre','$precio','$stock','$imagen')";

if(mysqli_query($conn, $sql)){

    echo "Producto agregado correctamente";

}else{

    echo "Error";

}

?>