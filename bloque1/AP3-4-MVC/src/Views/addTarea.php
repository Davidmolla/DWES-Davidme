<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Nueva Tarea</title>
</head>
<body>
  <h1>Añadir Nueva Tarea</h1>
  <form action="/saveTask" method="post">
    <label>Título:</label><br>
    <input type="text" name="titulo" required><br><br>
    <label>Descripción:</label><br>
    <textarea name="descripcion" required></textarea><br><br>
    <label>Fecha de vencimiento:</label><br>
    <input type="date" name="fecha_vencimiento" required><br><br>
    <button type="submit">Guardar</button>
  </form>
  <a href="/">Volver</a>
</body>
</html>
