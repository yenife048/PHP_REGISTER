<?php

// Inclusión de archivos
include_once("../conexion.php");

// Creacion de objeto con el uso de la clase DB__CONNECT
$db = new DB_CONNECT();

// Verificacion de la propiedad 'conn'
if ($db->conn) {
    // echo 'Base de datos conectada';
} else {
    echo 'Error al conectar a la base de datos';
}

// Probar existencia de datos en el post
// print_r($_POST);

// Obtener datos del post
$nombres = isset($_POST['nombres']) ? $_POST['nombres'] : '';
$apellidos = isset($_POST['apellidos']) ? $_POST['apellidos'] : '';
$edad = isset($_POST['edad']) ? $_POST['edad'] : '';
$sede_id = isset($_POST['sede']) ? $_POST['sede'] : '';
$area_id = isset($_POST['area']) ? $_POST['area'] : '';
// Obtener la accion del boton
$accion = isset($_POST['accion']) ? $_POST['accion'] : '';

// validar existencia de "$accion"
if ($accion != '') {
    // switch para "$accion"
    switch ($accion) {
        case 'enviar':
            // se prepara la consulta y se guarda en "$sql"
            $sql = 'INSERT INTO personas (nombres, apellidos, edad, sede_id, area_id) VALUES (?, ?, ?, ?, ?)';

            // se prepara la consulta / declaracion
            $consulta = $db->conn->prepare($sql);

            // vinculacion de parametros:
            $consulta->bind_param('ssiii', $nombres, $apellidos, $edad, $sede_id, $area_id);

            // se ejecuta la declaración
            $consulta->execute();

            // verificar si la sentencia fue exitosa
            if ($consulta->affected_rows > 0) {
                // echo 'Registro insertado exitosamente';
            } else {
                echo 'Error al insertar el registro: ' . $db->conn->error;
            }

            // Cerrar la consulta
            // $consulta->close();
            break;
    
        default:
            print_r('Error accion no especificada');
            break;
    }
}

// Cerrar conexión
// $db->close();