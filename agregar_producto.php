<?php

include("conexion.php");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];
$imagen = $_POST['imagen'];

$sql = "

INSERT INTO productos
(nombre,precio,stock,imagen)

VALUES
(?,?,?,?)

";

$params = array(
    $nombre,
    $precio,
    $stock,
    $imagen
);

$query = sqlsrv_query(
    $conn,
    $sql,
    $params
);

if($query){

    echo "Producto agregado";

}else{

    echo "Error";

}

?>