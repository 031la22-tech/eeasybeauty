<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$host = "sql5.freesqldatabase.com";
$usuario = "sql5826887";
$password = "sdAucDGhT3";
$bd = "sql5826887";

$conn = mysqli_connect(
    $host,
    $usuario,
    $password,
    $bd
);

if(!$conn){

    die("Error de conexión: " . mysqli_connect_error());

}

echo "Conexión exitosa";

?>