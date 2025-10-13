<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Detalle de Tarea</title>
</head>
<body>
  <?php if ($tarea): ?>
    <h1><?= htmlspecialchars($tarea['titulo']) ?></h1>
    <p><strong>Descripción:</strong> <?= htmlspecialchars($tarea['descripcion']) ?></p>
    <p><strong>Fecha de vencimiento:</strong> <?= htmlspecialchars($tarea['fecha_vencimiento']) ?></p>
  <?php else: ?>
    <p>Tarea no encontrada.</p>
  <?php endif; ?>
  <a href="/">Volver al listado</a>
</body>
</html>
