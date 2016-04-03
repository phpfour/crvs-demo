<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Birth
 *
 * @ORM\Table(name="birth")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BirthRepository")
 */
class Birth
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
     * @var int
     *
     * @ORM\Column(name="brnNumber", type="integer", nullable=true)
     */
    private $brnNumber;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date", nullable=true)
     */
    private $birthDate;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="smallint", nullable=true)
     */
    private $weight;

    /**
     * @var string
     *
     * @ORM\Column(name="bloodGroup", type="string", length=5, nullable=true)
     */
    private $bloodGroup;

    /**
     * @var bool
     *
     * @ORM\Column(name="hasAsthma", type="boolean", nullable=true)
     */
    private $hasAsthma;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=1, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nameEnglish", type="string", length=255, nullable=true)
     */
    private $nameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="fatherName", type="string", length=255, nullable=true)
     */
    private $fatherName;

    /**
     * @var string
     *
     * @ORM\Column(name="fatherNameEnglish", type="string", length=255, nullable=true)
     */
    private $fatherNameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="fatherNID", type="string", length=255, nullable=true)
     */
    private $fatherNID;

    /**
     * @var string
     *
     * @ORM\Column(name="fatherNationality", type="string", length=255, nullable=true)
     */
    private $fatherNationality;

    /**
     * @var string
     *
     * @ORM\Column(name="motherName", type="string", length=255, nullable=true)
     */
    private $motherName;

    /**
     * @var string
     *
     * @ORM\Column(name="motherNameEnglish", type="string", length=255, nullable=true)
     */
    private $motherNameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="motherNID", type="string", length=255, nullable=true)
     */
    private $motherNID;

    /**
     * @var string
     *
     * @ORM\Column(name="motherNationality", type="string", length=255, nullable=true)
     */
    private $motherNationality;

    /**
     * @var string
     *
     * @ORM\Column(name="presentAddress", type="string", length=255, nullable=true)
     */
    private $presentAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="birthPlace", type="string", length=255, nullable=true)
     */
    private $birthPlace;

    /**
     * @var string
     *
     * @ORM\Column(name="permanentAddress", type="string", length=255, nullable=true)
     */
    private $permanentAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="origin", type="string", length=255, nullable=true)
     */
    private $origin;

    /**
     * @var Patient
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Patient")
     */
    private $patient;

    /**
     * @var int
     *
     * @ORM\Column(name="birthDistrict", type="smallint", nullable=true)
     */
    private $birthDistrict;

    /**
     * @var string
     *
     * @ORM\Column(name="birthCountry", type="string", length=2, nullable=true)
     */
    private $birthCountry;

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
     * @return Birth
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
     * Set nameEnglish
     *
     * @param string $nameEnglish
     * @return Birth
     */
    public function setNameEnglish($nameEnglish)
    {
        $this->nameEnglish = $nameEnglish;

        return $this;
    }

    /**
     * Get nameEnglish
     *
     * @return string 
     */
    public function getNameEnglish()
    {
        return $this->nameEnglish;
    }

    /**
     * Set fatherName
     *
     * @param string $fatherName
     * @return Birth
     */
    public function setFatherName($fatherName)
    {
        $this->fatherName = $fatherName;

        return $this;
    }

    /**
     * Get fatherName
     *
     * @return string 
     */
    public function getFatherName()
    {
        return $this->fatherName;
    }

    /**
     * Set fatherNameEnglish
     *
     * @param string $fatherNameEnglish
     * @return Birth
     */
    public function setFatherNameEnglish($fatherNameEnglish)
    {
        $this->fatherNameEnglish = $fatherNameEnglish;

        return $this;
    }

    /**
     * Get fatherNameEnglish
     *
     * @return string 
     */
    public function getFatherNameEnglish()
    {
        return $this->fatherNameEnglish;
    }

    /**
     * Set fatherNID
     *
     * @param string $fatherNID
     * @return Birth
     */
    public function setFatherNID($fatherNID)
    {
        $this->fatherNID = $fatherNID;

        return $this;
    }

    /**
     * Get fatherNID
     *
     * @return string 
     */
    public function getFatherNID()
    {
        return $this->fatherNID;
    }

    /**
     * Set motherName
     *
     * @param string $motherName
     * @return Birth
     */
    public function setMotherName($motherName)
    {
        $this->motherName = $motherName;

        return $this;
    }

    /**
     * Get motherName
     *
     * @return string 
     */
    public function getMotherName()
    {
        return $this->motherName;
    }

    /**
     * Set motherNameEnglish
     *
     * @param string $motherNameEnglish
     * @return Birth
     */
    public function setMotherNameEnglish($motherNameEnglish)
    {
        $this->motherNameEnglish = $motherNameEnglish;

        return $this;
    }

    /**
     * Get motherNameEnglish
     *
     * @return string 
     */
    public function getMotherNameEnglish()
    {
        return $this->motherNameEnglish;
    }

    /**
     * Set motherNID
     *
     * @param string $motherNID
     * @return Birth
     */
    public function setMotherNID($motherNID)
    {
        $this->motherNID = $motherNID;

        return $this;
    }

    /**
     * Get motherNID
     *
     * @return string 
     */
    public function getMotherNID()
    {
        return $this->motherNID;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     * @return Birth
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return integer 
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set bloodGroup
     *
     * @param string $bloodGroup
     * @return Birth
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
     * Set hasAsthma
     *
     * @param boolean $hasAsthma
     * @return Birth
     */
    public function setHasAsthma($hasAsthma)
    {
        $this->hasAsthma = $hasAsthma;

        return $this;
    }

    /**
     * Get hasAsthma
     *
     * @return boolean 
     */
    public function getHasAsthma()
    {
        return $this->hasAsthma;
    }

    /**
     * Set presentAddress
     *
     * @param string $presentAddress
     * @return Birth
     */
    public function setPresentAddress($presentAddress)
    {
        $this->presentAddress = $presentAddress;

        return $this;
    }

    /**
     * Get presentAddress
     *
     * @return string 
     */
    public function getPresentAddress()
    {
        return $this->presentAddress;
    }

    /**
     * Set permanentAddress
     *
     * @param string $permanentAddress
     * @return Birth
     */
    public function setPermanentAddress($permanentAddress)
    {
        $this->permanentAddress = $permanentAddress;

        return $this;
    }

    /**
     * Get permanentAddress
     *
     * @return string 
     */
    public function getPermanentAddress()
    {
        return $this->permanentAddress;
    }

    /**
     * Set brnNumber
     *
     * @param integer $brnNumber
     * @return Birth
     */
    public function setBrnNumber($brnNumber)
    {
        $this->brnNumber = $brnNumber;

        return $this;
    }

    /**
     * Get brnNumber
     *
     * @return integer 
     */
    public function getBrnNumber()
    {
        return $this->brnNumber;
    }

    /**
     * Set birthDate
     *
     * @param \DateTime $birthDate
     * @return Birth
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate
     *
     * @return \DateTime 
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @return Patient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param Patient $patient
     *
     * @return Birth
     */
    public function setPatient($patient)
    {
        $this->patient = $patient;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param string $origin
     *
     * @return Birth
     */
    public function setOrigin($origin)
    {
        $this->origin = $origin;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     *
     * @return Birth
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return string
     */
    public function getFatherNationality()
    {
        return $this->fatherNationality;
    }

    /**
     * @param string $fatherNationality
     *
     * @return Birth
     */
    public function setFatherNationality($fatherNationality)
    {
        $this->fatherNationality = $fatherNationality;
        return $this;
    }

    /**
     * @return string
     */
    public function getMotherNationality()
    {
        return $this->motherNationality;
    }

    /**
     * @param string $motherNationality
     *
     * @return Birth
     */
    public function setMotherNationality($motherNationality)
    {
        $this->motherNationality = $motherNationality;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthPlace()
    {
        return $this->birthPlace;
    }

    /**
     * @param string $birthPlace
     *
     * @return Birth
     */
    public function setBirthPlace($birthPlace)
    {
        $this->birthPlace = $birthPlace;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthCountry()
    {
        return $this->birthCountry;
    }

    /**
     * @param string $birthCountry
     *
     * @return Birth
     */
    public function setBirthCountry($birthCountry)
    {
        $this->birthCountry = $birthCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getBirthDistrict()
    {
        return $this->birthDistrict;
    }

    /**
     * @param string $birthDistrict
     *
     * @return Birth
     */
    public function setBirthDistrict($birthDistrict)
    {
        $this->birthDistrict = $birthDistrict;
        return $this;
    }
}
