<?php

// Definir clase
class DB_CONNECT
{
    // datos y propiedades de conexión
    private $servername = "localhost";
    private $username = "root";
    private $password = "Nu2tria";
    private $database = "register_people";

    // Propiedad publica en donde se almacenara la conexión:
    public $conn;

    //Metodo __constructor para establecer la conexión automaticamente
    public function __construct()
    {
        $this->conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->database
        );

        if ($this->conn->connect_error) {
            die("No se realizo la conexión " . $this->conn->connect_error);
        }
    }

    // Metodo para cerrar conexión
    public function close()
    {
        $this->conn->close();
    }
}