<?php
namespace AP42\Repository;

use Doctrine\ORM\EntityRepository;
use AP42\Entity\Operation;

class OperationRepository extends EntityRepository
{
    public function findAllOperations(): array
    {
        return $this->findAll();
    }
}
