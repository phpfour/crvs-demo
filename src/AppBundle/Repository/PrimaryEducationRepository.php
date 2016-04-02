<?php

namespace AppBundle\Repository;

use Sylius\Bundle\ResourceBundle\Doctrine\ORM\EntityRepository;

/**
 * UserRepository
 *
 * @author Devnet Product Team
 */
class PrimaryEducationRepository extends EntityRepository
{
    public function findWithAllRelated($rowIndex)
    {
        return $this
            ->getQueryBuilder()
            ->select($this->getAlias(), 'h')
            ->andWhere($this->getAlias().'.rowIndex = '.intval($rowIndex))
            ->leftJoin('AppBundle:Health', 'h', 'with', $this->getAlias().'.birthCertificate = h.birthCertificateNo')
            ->getQuery()
            //->getSQL()
            //->getOneOrNullResult()
            ->getResult()
        ;
    }
} 