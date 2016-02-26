<?php
/*
 * This file is part of the IBBL project.
 *
 * (c) Mohammad Emran Hasan <phpfour@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AppBundle\Repository;

use AppBundle\Event\AuditLogEvent;
use Doctrine\ORM\QueryBuilder;
use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * EmployeeRepository
 *
 * @author Anis uddin Ahmad <anisniit@@gmail.com>
 */
class AuditLogRepository extends EntityRepository
{

    public function getByAudit($auditId, $type = null)
    {
        $audit  = $this->_em->find('AppBundle:Audit', $auditId);

        return $this->createQueryBuilder('l')
            ->select('l.id, l.typeId, l.type, l.eventTime, l.user, l.ip')
            ->where("l.description LIKE :query")
            ->orderBy('l.id', 'desc')
            ->setParameter('query', '%'. AuditLogEvent::getIdentity($audit) .'%')
            ->getQuery()
            ->getResult();
    }

    public function getByType($type)
    {
        $query = $this->createListBuilder();
        $this->setTypeFilter($query, $type);

        return self::getPaginator($query);
    }

    private function createListBuilder()
    {
        return $this->createQueryBuilder('l')
                    ->select('l.id, l.typeId, l.type, l.eventTime, l.user, l.ip')
                    ->orderBy('l.eventTime', 'DESC');
    }

    private function setTypeFilter(QueryBuilder $query, $type)
    {
        $query->where('l.typeId IN (:typeList) ');
        switch ($type) {
            case "security":
                $query->setParameter('typeList', [
                    'security.interactive_login',
                    'security.authentication.failure',
                    'fos_user.security.implicit_login',
                    'fos_user.change_password.edit.completed',
                ]);
                break;
            default:
                $query->setParameter('typeList', [$type]);
        }
    }

} 