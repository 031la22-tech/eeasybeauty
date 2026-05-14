<?php

include("conexion.php");

$id = $_POST['id'];

$sql = "DELETE FROM productos
WHERE id='$id'";

if(mysqli_query($conn, $sql)){

    echo "Producto eliminado";

}else{

    echo "Error";

}

?>