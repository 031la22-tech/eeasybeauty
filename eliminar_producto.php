<?php

include("conexion.php");

$id = $_POST['id'];

$sql = "DELETE FROM productos WHERE id = ?";

$params = array($id);

$query = sqlsrv_query(
    $conn,
    $sql,
    $params
);

if($query){

    echo "Producto eliminado";

}else{

    echo "Error";

}

?>