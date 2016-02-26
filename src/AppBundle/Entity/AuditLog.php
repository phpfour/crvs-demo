<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Xiidea\EasyAuditBundle\Entity\BaseAuditLog;

/**
 * @ORM\Table(name="audit_log")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AuditLogRepository")
 */
class AuditLog extends BaseAuditLog
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * Type Of Event(Internal Type ID)
     *
     * @var string
     * @ORM\Column(name="type_id", type="string", length=200, nullable=false)
     */
    protected $typeId;

    /**
     * Type Of Event
     *
     * @var string
     * @ORM\Column(name="type", type="string", length=500, nullable=true)
     */
    protected $type;

    /**
     * @var string
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    protected $description;

    /**
     * Time Of Event
     * @var \DateTime
     * @ORM\Column(name="event_time", type="datetime")
     */
    protected $eventTime;

    /**
     * @var string
     * @ORM\Column(name="user", type="string", length=255)
     */
    protected $user;

    /**
     * @var string
     * @ORM\Column(name="ip", type="string", length=20, nullable=true)
     */
    protected $ip;

    /**
     * @var string
     * @ORM\Column(name="entity_type", type="string", length=255, nullable=true)
     */
    protected $entityType;

    /**
     * @var string
     * @ORM\Column(name="entity_id", type="integer", nullable=true)
     */
    protected $entityId;

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return AuditLog
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get id
     *
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set id
     *
     * @param mixed $id
     *
     * @return AuditLog
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Get ip
     *
     * @return string
     */
    public function getIp()
    {
        return $this->ip;
    }

    /**
     * Set ip
     *
     * @param string $ip
     *
     * @return AuditLog
     */
    public function setIp($ip)
    {
        $this->ip = $ip;
        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return AuditLog
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get typeId
     *
     * @return string
     */
    public function getTypeId()
    {
        return $this->typeId;
    }

    /**
     * Set typeId
     *
     * @param string $typeId
     *
     * @return AuditLog
     */
    public function setTypeId($typeId)
    {
        $this->typeId = $typeId;
        return $this;
    }

    /**
     * Get user
     *
     * @return string
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set user
     *
     * @param string $user
     *
     * @return AuditLog
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get entityId
     *
     * @return string
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * Set entityId
     *
     * @param string $entityId
     *
     * @return AuditLog
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * Get entityType
     *
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * Set entityType
     *
     * @param string $entityType
     *
     * @return AuditLog
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
        return $this;
    }

}