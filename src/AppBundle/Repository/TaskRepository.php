<?php

namespace AppBundle\Repository;

use AppBundle\Entity\Task;
use AppBundle\Entity\User;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * TaskRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class TaskRepository extends EntityRepository
{
    public function lockTask(Task $task, User $user)
    {
        $task->setLockedBy($user);

        $this->getEntityManager()->persist($task);
        $this->getEntityManager()->flush();
    }
}