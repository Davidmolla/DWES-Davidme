<?php
namespace AP42\Repository;

use Doctrine\ORM\EntityRepository;
use AP42\Entity\User;

class UserRepository extends EntityRepository
{
    public function findAllUsers(): array
    {
        return $this->findAll();
    }
}
