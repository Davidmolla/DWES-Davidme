<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Tareas</title>
    <style>
        table { border-collapse: collapse; width: 60%; margin: 20px auto; }
        th, td { border: 1px solid #333; padding: 8px; text-align: left; }
        th { background-color: #eee; }
    </style>
</head>
<body>
<h1 style="text-align:center;">Listado de Tareas</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Título</th>
        <th>Descripción</th>
        <th>Completada</th>
    </tr>
    <?php foreach ($tareas as $tarea): ?>
        <tr>
            <td><?= $tarea['id'] ?></td>
            <td><?= htmlspecialchars($tarea['titulo']) ?></td>
            <td><?= htmlspecialchars($tarea['descripcion']) ?></td>
            <td><?= $tarea['completada'] ? 'Sí' : 'No' ?></td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
