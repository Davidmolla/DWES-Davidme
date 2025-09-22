<?php

$host = "mariadb-server";   )
$user = "root";
$pass = "rootpassword";
$db   = ".db_mysql";

try {
    //Conexion base
    $conn = new mysqli($host, $user, $pass, $db);


    // Leer Usuarios
    $sql = "SELECT id, nombre, estado FROM usuarios";
    $result = $conn->query($sql);

    if (!$result) {
        throw new Exception("Error al leer usuarios: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        while ($fila = $result->fetch_assoc()) {
            echo "El usuario " . $fila["nombre"] . " tiene la id: " . $fila["id"] . " y su estado es: " . $fila["estado"] . "<br>";
        }
    } else {
        echo "No hay usuarios en la tabla.<br>";
    }

    echo "<br>";


    // Añadir Usuario
    $nuevoNombre = "NuevoUsuario";
    $nuevoEstado = "activo";

    $sqlInsert = "INSERT INTO usuarios (nombre, estado) VALUES ('$nuevoNombre', '$nuevoEstado')";
    if (!$conn->query($sqlInsert)) {
        throw new Exception("Error al insertar: " . $conn->error);
    }
    $nuevaId = $conn->insert_id;
    echo "Usuario insertado con la id: " . $nuevaId . "<br>";


    // Actualizar
    $nuevoEstadoActualizado = "inactivo"; // nuevo valor del estado
    $sqlUpdate = "UPDATE usuarios SET estado='$nuevoEstadoActualizado' WHERE id=$nuevaId";

    if (!$conn->query($sqlUpdate)) {
        throw new Exception("Error al actualizar: " . $conn->error);
    }
    echo "Usuario con id " . $nuevaId . " actualizado correctamente.<br>";


    // Borrar Usuario
    $sqlDelete = "DELETE FROM usuarios WHERE id=$nuevaId";

    if (!$conn->query($sqlDelete)) {
        throw new Exception("Error al borrar: " . $conn->error);
    }
    echo "Usuario con id " . $nuevaId . " borrado correctamente.<br>";


    //  Control Errores
    die("Se ha producido un error: " . $e->getMessage() .
        ". En la línea: " . $e->getLine());
} finally {
    // Cierre Conexion
    if (isset($conn) && $conn instanceof mysqli) {
        $conn->close();
        echo "<br>Conexión cerrada.";
    }
}
?>