<?php
namespace App\Models;

use App\Core\Database;

class Tarea {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function obtenerTodas(): array {
        $result = $this->db->query("SELECT * FROM tareas ORDER BY id ASC");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function obtenerPorId(int $id): ?array {
        $stmt = $this->db->prepare("SELECT * FROM tareas WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        $res = $stmt->get_result()->fetch_assoc();
        return $res ?: null;
    }

    public function guardar(string $titulo, string $descripcion, string $fecha): bool {
        $stmt = $this->db->prepare("INSERT INTO tareas (titulo, descripcion, fecha_vencimiento) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $titulo, $descripcion, $fecha);
        return $stmt->execute();
    }

    public function eliminar(int $id): bool {
        $stmt = $this->db->prepare("DELETE FROM tareas WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
