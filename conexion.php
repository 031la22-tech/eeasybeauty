<?php

$serverName = "localhost\\SQLEXPRESS";

$connectionOptions = array(

    "Database" => "EasyBeauty",
    "TrustServerCertificate" => true

);

$conn = sqlsrv_connect(
    $serverName,
    $connectionOptions
);

if($conn){

    echo "Conexión exitosa";

}else{

    die(print_r(sqlsrv_errors(), true));

}

?>