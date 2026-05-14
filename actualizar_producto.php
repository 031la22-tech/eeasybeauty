<?php

include("conexion.php");

$id = $_POST['id'];

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$stock = $_POST['stock'];

$sql = "

UPDATE productos

SET

nombre = ?,
precio = ?,
stock = ?

WHERE id = ?

";

$params = array(
    $nombre,
    $precio,
    $stock,
    $id
);

$query = sqlsrv_query(
    $conn,
    $sql,
    $params
);

if($query){

    echo "Producto actualizado";

}else{

    echo "Error";

}

?>