<?php
class Database {
    private $host = "mariadb-server";
    private $user = "root";
    private $pass = "rootpassword";
    private $db   = ".db_mysql";
    private $conn;

    public function __construct() {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->pass, $this->db);
            if ($this->conn->connect_error) {
                throw new Exception("Error de conexión: " . $this->conn->connect_error);
            }
            echo "Conectado a la base de datos<br><br>";
        } catch (Exception $e) {
            die("Se ha producido un error: " . $e->getMessage() . ". En la línea: " . $e->getLine());
        }
    }

    public function select($query) {
        try {
            $result = $this->conn->query($query);
            if (!$result) {
                throw new Exception("Error en SELECT: " . $this->conn->error);
            }
            return $result;
        } catch (Exception $e) {
            die("Se ha producido un error: " . $e->getMessage() . ". En la línea: " . $e->getLine());
        }
    }

    public function insert($query) {
        try {
            if (!$this->conn->query($query)) {
                throw new Exception("Error en INSERT: " . $this->conn->error);
            }
            return $this->conn->insert_id;
        } catch (Exception $e) {
            die("Se ha producido un error: " . $e->getMessage() . ". En la línea: " . $e->getLine());
        }
    }

    public function update($query) {
        try {
            if (!$this->conn->query($query)) {
                throw new Exception("Error en UPDATE: " . $this->conn->error);
            }
            return true;
        } catch (Exception $e) {
            die("Se ha producido un error: " . $e->getMessage() . ". En la línea: " . $e->getLine());
        }
    }

    public function delete($query) {
        try {
            if (!$this->conn->query($query)) {
                throw new Exception("Error en DELETE: " . $this->conn->error);
            }
            return true;
        } catch (Exception $e) {
            die("Se ha producido un error: " . $e->getMessage() . ". En la línea: " . $e->getLine());
        }
    }

    public function close() {
        if ($this->conn) {
            $this->conn->close();
            echo "<br>Conexion cerrada";
        }
    }
}

try {
    $db = new Database();

    $result = $db->select("SELECT id, nombre, estado FROM usuarios");
    if ($result->num_rows > 0) {
        while ($fila = $result->fetch_assoc()) {
            echo "El usuario " . $fila["nombre"] . " tiene la id: " . $fila["id"] . " y su estado es: " . $fila["estado"] . "<br>";
        }
    } else {
        echo "No hay usuarios en la tabla<br>";
    }

    echo "<br>";

    $nuevoNombre = "UsuarioPOO";
    $nuevoEstado = "activo";
    $nuevaId = $db->insert("INSERT INTO usuarios (nombre, estado) VALUES ('$nuevoNombre', '$nuevoEstado')");
    echo "Usuario insertado con la id: $nuevaId<br>";

    $nuevoEstadoActualizado = "inactivo";
    $db->update("UPDATE usuarios SET estado='$nuevoEstadoActualizado' WHERE id=$nuevaId");
    echo "Usuario con id $nuevaId actualizado correctamente<br>";

    $db->delete("DELETE FROM usuarios WHERE id=$nuevaId");
    echo "Usuario con id $nuevaId borrado correctamente<br>";

} catch (Exception $e) {
    die("Se ha producido un error: " . $e->getMessage() . ". En la línea: " . $e->getLine());
} finally {
    if (isset($db)) {
        $db->close();
    }
}
?>
