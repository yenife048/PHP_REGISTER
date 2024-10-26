<?php

$servername = "localhost";
$database = "register_people";
$username = "root";
$password = "Nu2tria";

//Crear conexion

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn){
    die ("No se realizo la conexion a la base de datos ". mysqli_connect_error());
}
echo "Conexion exitosa";
mysqli_close($conn );


?>