<?php

include("conexion.php");

$sql = "SELECT * FROM productos";

$query = sqlsrv_query($conn, $sql);

$productos = array();

while($fila = sqlsrv_fetch_array($query, SQLSRV_FETCH_ASSOC)){

    $productos[] = $fila;

}

echo json_encode($productos);

?>