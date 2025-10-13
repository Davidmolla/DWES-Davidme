<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Lista de Tareas</title>
</head>
<body>
  <h1>Lista de Tareas</h1>
  <a href="/addTask">Añadir Nueva Tarea</a>
  <table border="1" cellpadding="8">
    <tr><th>ID</th><th>Título</th><th>Vencimiento</th><th>Acciones</th></tr>
    <?php foreach ($tareas as $t): ?>
      <tr>
        <td><?= $t['id'] ?></td>
        <td><?= htmlspecialchars($t['titulo']) ?></td>
        <td><?= htmlspecialchars($t['fecha_vencimiento']) ?></td>
        <td>
          <a href="/detalle/<?= $t['id'] ?>">Ver</a> |
          <a href="/deleteTask/<?= $t['id'] ?>">Eliminar</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
