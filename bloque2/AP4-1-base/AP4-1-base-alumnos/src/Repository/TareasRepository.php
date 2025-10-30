<?php

namespace Src\Repository;

use Doctrine\ORM\EntityRepository;
use Src\Entity\Tareas;

class TareasRepository extends EntityRepository
{
    public function findAllTareas(): array
    {
        return $this->findAll();
    }

    public function findTareaById(int $id): ?Tareas
    {
        return $this->find($id);
    }

    public function save(Tareas $tarea): void
    {
        $this->_em->persist($tarea);
        $this->_em->flush();
    }

    public function delete(Tareas $tarea): void
    {
        $this->_em->remove($tarea);
        $this->_em->flush();
    }
}
