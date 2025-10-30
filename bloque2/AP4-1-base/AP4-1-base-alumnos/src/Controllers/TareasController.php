<?php
namespace Src\Controllers;

use AP41\Core\EntityManager;
use Src\Entity\Tareas;

class TareasController
{
    private $entityManager;
    private $repo;

    public function __construct()
    {
        // Crear instancia de tu EntityManager
        $this->entityManager = (new EntityManager())->getEntityManager();

        // Cargar el repositorio de la entidad Tareas
        $this->repo = $this->entityManager->getRepository(Tareas::class);
    }

    public function listar()
    {
        $tareas = $this->repo->findAllTareas();
        require __DIR__ . '/../Views/ListadoTareas.php';
    }

    public function detalle($id)
    {
        $tarea = $this->repo->findTareaById($id);
        require __DIR__ . '/../Views/DetalleTarea.php';
    }

    public function crear($data)
    {
        $tarea = new Tareas();
        $tarea->setTitulo($data['titulo']);
        $tarea->setDescripcion($data['descripcion'] ?? null);
        $tarea->setFechaCreacion(new \DateTime());
        $tarea->setCompletada(false);

        $this->repo->save($tarea);
    }

    public function eliminar($id)
    {
        $tarea = $this->repo->find($id);
        if ($tarea) {
            $this->repo->delete($tarea);
        }
    }
}
