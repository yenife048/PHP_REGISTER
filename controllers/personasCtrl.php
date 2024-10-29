<?php

// Inclusión de archivos
include_once("../conexion.php");

// Creacion de objeto con el uso de la clase DB__CONNECT
$db = new DB_CONNECT();

// Verificacion de la propiedad 'conn'
if ($db->conn) { 
    echo 'Base de datos conectada';
} else {
    echo 'Error al conectar a la base de datos';
}

// Cerrar conexión
// $db->close();