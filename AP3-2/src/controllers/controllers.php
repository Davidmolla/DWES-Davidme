<?php
require_once __DIR__ . '/../models/Tarea.php';

class TareasController {
    private $model;

    public function __construct() {
        $this->model = new Tarea();
    }

    public function listar() {
        $tareas = $this->model->getAll();
        require __DIR__ . '/../views/ListadoTareas.php';
    }
}
?>
