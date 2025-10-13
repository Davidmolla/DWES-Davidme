<?php
namespace App\Core;

use mysqli;

class Database {
    private static ?mysqli $connection = null;

    private function __construct() {}

    public static function getConnection(): mysqli {
        if (self::$connection === null) {
            $config = json_decode(file_get_contents(__DIR__ . '/../../config/dbConfig.json'), true);
            self::$connection = new mysqli(
                $config['host'],
                $config['user'],
                $config['password'],
                $config['database']
            );

            if (self::$connection->connect_error) {
                die("Error de conexión: " . self::$connection->connect_error);
            }
        }
        return self::$connection;
    }
}
?>
