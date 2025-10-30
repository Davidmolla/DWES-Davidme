<?php
namespace AP42\Controllers;

use AP42\Core\EntityManager;
use AP42\Entity\User;

class UserController
{
    private $repo;

    public function __construct()
    {
        $em = (new EntityManager())->getEntityManager();
        $this->repo = $em->getRepository(User::class);
    }

    public function list()
    {
        $users = $this->repo->findAll();
        echo "<h1>Users</h1>";
        echo "<ul>";
        foreach ($users as $user) {
            $status = $user->isActive() ? 'Activo' : 'Desactivado';
            echo "<li>{$user->getName()} - {$status}</li>";
        }
        echo "</ul>";
    }
}
<?php
