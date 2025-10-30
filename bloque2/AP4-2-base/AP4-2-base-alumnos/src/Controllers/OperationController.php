<?php
namespace AP42\Controllers;

use AP42\Core\EntityManager;
use AP42\Entity\Operation;

class OperationController
{
    private $repo;

    public function __construct()
    {
        $em = (new EntityManager())->getEntityManager();
        $this->repo = $em->getRepository(Operation::class);
    }

    public function list()
    {
        $operations = $this->repo->findAll();

        echo "<h1>Operations</h1>";
        echo "<ul>";
        foreach ($operations as $op) {
            echo "<li>{$op->getName()} - User: {$op->getUser()->getName()} - Result: {$op->getResult()}</li>";
        }
        echo "</ul>";
    }
}
