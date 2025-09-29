<?php

class DatabaseConnection
{
    private static $instancia = null;  // Almacena la única instancia
    private static $conexion;  // Almacena el objeto mysqli
    private const SERVER = "mariadb-server";
    private const USERNAME = "root";
    private const PASSWORD = "root";
    private const DB = "AP1";

    // Constructor
    private function __construct()
    {
        $this->getConnection();
    }

    // Metodo para la instancia de la conexion de la base de datos
    public static function getInstance()
    {
        if (self::$instancia === null) {
            self::$instancia = new DatabaseConnection();
        }
        return self::$instancia;
    }

    // Metodo para evitar el clon
    private function __clone()
    {
    }

    // Metodo para conseguir conexion mysqli
    public function getConnection()
    {
        self::$conexion = new mysqli(self::SERVER, self::USERNAME, self::PASSWORD, self::DB);

        // Verificar si la conexión fue exitosa
        if (self::$conexion->connect_error) {
            die("Error de conexión: " . self::$conexion->connect_error);
        }
    }

    public function executeSQL($sql)
    {
        return self::$conexion->query($sql)->fetch_all(MYSQLI_ASSOC);
    }
}
