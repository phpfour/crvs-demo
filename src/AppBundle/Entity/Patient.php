<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Patient
 *
 * @ORM\Table(name="patient")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PatientRepository")
 */
class Patient
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="husbandName", type="string", length=255, nullable=true)
     */
    private $husbandName;

    /**
     * @var string
     *
     * @ORM\Column(name="husbandNidNumber", type="string", length=255, nullable=true)
     */
    private $husbandNidNumber;

    /**
     * @var int
     *
     * @ORM\Column(name="age", type="smallint", nullable=true)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="bloodGroup", type="string", length=5, nullable=true)
     */
    private $bloodGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="nidNumber", type="string", length=255, nullable=true)
     */
    private $nidNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="roomNumber", type="smallint", nullable=true)
     */
    private $roomNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="admitDate", type="date", nullable=true)
     */
    private $admitDate;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Patient
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set husbandName
     *
     * @param string $husbandName
     * @return Patient
     */
    public function setHusbandName($husbandName)
    {
        $this->husbandName = $husbandName;

        return $this;
    }

    /**
     * Get husbandName
     *
     * @return string 
     */
    public function getHusbandName()
    {
        return $this->husbandName;
    }

    /**
     * Set age
     *
     * @param integer $age
     * @return Patient
     */
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return integer 
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Set bloodGroup
     *
     * @param string $bloodGroup
     * @return Patient
     */
    public function setBloodGroup($bloodGroup)
    {
        $this->bloodGroup = $bloodGroup;

        return $this;
    }

    /**
     * Get bloodGroup
     *
     * @return string 
     */
    public function getBloodGroup()
    {
        return $this->bloodGroup;
    }

    /**
     * Set nidNumber
     *
     * @param string $nidNumber
     * @return Patient
     */
    public function setNidNumber($nidNumber)
    {
        $this->nidNumber = $nidNumber;

        return $this;
    }

    /**
     * Get nidNumber
     *
     * @return string 
     */
    public function getNidNumber()
    {
        return $this->nidNumber;
    }

    /**
     * Set roomNumber
     *
     * @param string $roomNumber
     * @return Patient
     */
    public function setRoomNumber($roomNumber)
    {
        $this->roomNumber = $roomNumber;

        return $this;
    }

    /**
     * Get roomNumber
     *
     * @return string 
     */
    public function getRoomNumber()
    {
        return $this->roomNumber;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return Patient
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getHusbandNidNumber()
    {
        return $this->husbandNidNumber;
    }

    /**
     * @param string $husbandNidNumber
     *
     * @return Patient
     */
    public function setHusbandNidNumber($husbandNidNumber)
    {
        $this->husbandNidNumber = $husbandNidNumber;
        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getAdmitDate()
    {
        return $this->admitDate;
    }

    /**
     * @param \DateTime $admitDate
     *
     * @return Patient
     */
    public function setAdmitDate($admitDate)
    {
        $this->admitDate = $admitDate;
        return $this;
    }
}
