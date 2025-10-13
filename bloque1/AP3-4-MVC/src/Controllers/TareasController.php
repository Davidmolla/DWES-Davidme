<?php
namespace App\Controllers;

use App\Models\Tarea;

class TareasController {
    private Tarea $model;

    public function __construct() {
        $this->model = new Tarea();
    }

    public function index(): void {
        $tareas = $this->model->obtenerTodas();
        require __DIR__ . '/../Views/listaTareas.php';
    }

    public function detalle($id): void {
        $tarea = $this->model->obtenerPorId((int)$id);
        require __DIR__ . '/../Views/detalleTarea.php';
    }

    public function addTask(): void {
        require __DIR__ . '/../Views/addTarea.php';
    }

    public function saveTask(): void {
        $titulo = $_POST['titulo'] ?? '';
        $descripcion = $_POST['descripcion'] ?? '';
        $fecha = $_POST['fecha_vencimiento'] ?? '';

        $this->model->guardar($titulo, $descripcion, $fecha);
        header("Location: /");
    }

    public function deleteTask($id): void {
        $this->model->eliminar((int)$id);
        header("Location: /");
    }
}
?>
