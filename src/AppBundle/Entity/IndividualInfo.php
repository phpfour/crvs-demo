<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IndividualInfo
 *
 * @ORM\Table(name="individual_info", indexes={@ORM\Index(name="BIN_BRN", columns={"BIN_BRN"}), @ORM\Index(name="Citizen_NID", columns={"Citizen_NID"})})
 * @ORM\Entity
 */
class IndividualInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="NHPR_ROW_INDEX", type="integer", nullable=true)
     */
    private $nhprRowIndex;

    /**
     * @var integer
     *
     * @ORM\Column(name="Barcode", type="integer", nullable=true)
     */
    private $barcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="Q17SL", type="integer", nullable=true)
     */
    private $q17sl;

    /**
     * @var string
     *
     * @ORM\Column(name="FullName_English", type="string", length=255, nullable=true)
     */
    private $fullnameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="FullName_Bangla", type="string", length=255, nullable=true)
     */
    private $fullnameBangla;

    /**
     * @var string
     *
     * @ORM\Column(name="DOB", type="string", length=255, nullable=true)
     */
    private $dob;

    /**
     * @var string
     *
     * @ORM\Column(name="BirthPlace", type="string", length=255, nullable=true)
     */
    private $birthplace;

    /**
     * @var string
     *
     * @ORM\Column(name="Q20SL", type="string", length=255, nullable=true)
     */
    private $q20sl;

    /**
     * @var string
     *
     * @ORM\Column(name="MotherName_English", type="string", length=255, nullable=true)
     */
    private $mothernameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="MotherName_Bangla", type="string", length=255, nullable=true)
     */
    private $mothernameBangla;

    /**
     * @var string
     *
     * @ORM\Column(name="Q21SL", type="string", length=255, nullable=true)
     */
    private $q21sl;

    /**
     * @var string
     *
     * @ORM\Column(name="FatherName_English", type="string", length=255, nullable=true)
     */
    private $fathernameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="FatherName_Bangla", type="string", length=255, nullable=true)
     */
    private $fathernameBangla;

    /**
     * @var string
     *
     * @ORM\Column(name="Q22SL", type="string", length=255, nullable=true)
     */
    private $q22sl;

    /**
     * @var string
     *
     * @ORM\Column(name="SpouseName_English", type="string", length=255, nullable=true)
     */
    private $spousenameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="SpouseName_Bangla", type="string", length=255, nullable=true)
     */
    private $spousenameBangla;

    /**
     * @var string
     *
     * @ORM\Column(name="BIN_BRN", type="string", length=255, nullable=true)
     */
    private $binBrn;

    /**
     * @var string
     *
     * @ORM\Column(name="Citizen_NID", type="string", length=255, nullable=true)
     */
    private $citizenNid;

    /**
     * @var string
     *
     * @ORM\Column(name="Q25", type="string", length=255, nullable=true)
     */
    private $q25;

    /**
     * @var string
     *
     * @ORM\Column(name="Gender", type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="Religion", type="string", length=255, nullable=true)
     */
    private $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="MaritalStatus", type="string", length=255, nullable=true)
     */
    private $maritalstatus;

    /**
     * @var string
     *
     * @ORM\Column(name="EduQualification", type="string", length=255, nullable=true)
     */
    private $eduqualification;

    /**
     * @var string
     *
     * @ORM\Column(name="Occupation", type="string", length=255, nullable=true)
     */
    private $occupation;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationality", type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="NationalityOthers", type="string", length=255, nullable=true)
     */
    private $nationalityothers;

    /**
     * @var string
     *
     * @ORM\Column(name="Q32", type="string", length=255, nullable=true)
     */
    private $q32;

    /**
     * @var string
     *
     * @ORM\Column(name="Q33", type="string", length=255, nullable=true)
     */
    private $q33;

    /**
     * @var string
     *
     * @ORM\Column(name="Flag1", type="string", length=255, nullable=true)
     */
    private $flag1;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nhprRowIndex
     *
     * @param integer $nhprRowIndex
     * @return IndividualInfo
     */
    public function setNhprRowIndex($nhprRowIndex)
    {
        $this->nhprRowIndex = $nhprRowIndex;

        return $this;
    }

    /**
     * Get nhprRowIndex
     *
     * @return integer 
     */
    public function getNhprRowIndex()
    {
        return $this->nhprRowIndex;
    }

    /**
     * Set barcode
     *
     * @param integer $barcode
     * @return IndividualInfo
     */
    public function setBarcode($barcode)
    {
        $this->barcode = $barcode;

        return $this;
    }

    /**
     * Get barcode
     *
     * @return integer 
     */
    public function getBarcode()
    {
        return $this->barcode;
    }

    /**
     * Set q17sl
     *
     * @param integer $q17sl
     * @return IndividualInfo
     */
    public function setQ17sl($q17sl)
    {
        $this->q17sl = $q17sl;

        return $this;
    }

    /**
     * Get q17sl
     *
     * @return integer 
     */
    public function getQ17sl()
    {
        return $this->q17sl;
    }

    /**
     * Set fullnameEnglish
     *
     * @param string $fullnameEnglish
     * @return IndividualInfo
     */
    public function setFullnameEnglish($fullnameEnglish)
    {
        $this->fullnameEnglish = $fullnameEnglish;

        return $this;
    }

    /**
     * Get fullnameEnglish
     *
     * @return string 
     */
    public function getFullnameEnglish()
    {
        return $this->fullnameEnglish;
    }

    /**
     * Set fullnameBangla
     *
     * @param string $fullnameBangla
     * @return IndividualInfo
     */
    public function setFullnameBangla($fullnameBangla)
    {
        $this->fullnameBangla = $fullnameBangla;

        return $this;
    }

    /**
     * Get fullnameBangla
     *
     * @return string 
     */
    public function getFullnameBangla()
    {
        return $this->fullnameBangla;
    }

    /**
     * Set dob
     *
     * @param string $dob
     * @return IndividualInfo
     */
    public function setDob($dob)
    {
        $this->dob = $dob;

        return $this;
    }

    /**
     * Get dob
     *
     * @return string 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set birthplace
     *
     * @param string $birthplace
     * @return IndividualInfo
     */
    public function setBirthplace($birthplace)
    {
        $this->birthplace = $birthplace;

        return $this;
    }

    /**
     * Get birthplace
     *
     * @return string 
     */
    public function getBirthplace()
    {
        return $this->birthplace;
    }

    /**
     * Set q20sl
     *
     * @param string $q20sl
     * @return IndividualInfo
     */
    public function setQ20sl($q20sl)
    {
        $this->q20sl = $q20sl;

        return $this;
    }

    /**
     * Get q20sl
     *
     * @return string 
     */
    public function getQ20sl()
    {
        return $this->q20sl;
    }

    /**
     * Set mothernameEnglish
     *
     * @param string $mothernameEnglish
     * @return IndividualInfo
     */
    public function setMothernameEnglish($mothernameEnglish)
    {
        $this->mothernameEnglish = $mothernameEnglish;

        return $this;
    }

    /**
     * Get mothernameEnglish
     *
     * @return string 
     */
    public function getMothernameEnglish()
    {
        return $this->mothernameEnglish;
    }

    /**
     * Set mothernameBangla
     *
     * @param string $mothernameBangla
     * @return IndividualInfo
     */
    public function setMothernameBangla($mothernameBangla)
    {
        $this->mothernameBangla = $mothernameBangla;

        return $this;
    }

    /**
     * Get mothernameBangla
     *
     * @return string 
     */
    public function getMothernameBangla()
    {
        return $this->mothernameBangla;
    }

    /**
     * Set q21sl
     *
     * @param string $q21sl
     * @return IndividualInfo
     */
    public function setQ21sl($q21sl)
    {
        $this->q21sl = $q21sl;

        return $this;
    }

    /**
     * Get q21sl
     *
     * @return string 
     */
    public function getQ21sl()
    {
        return $this->q21sl;
    }

    /**
     * Set fathernameEnglish
     *
     * @param string $fathernameEnglish
     * @return IndividualInfo
     */
    public function setFathernameEnglish($fathernameEnglish)
    {
        $this->fathernameEnglish = $fathernameEnglish;

        return $this;
    }

    /**
     * Get fathernameEnglish
     *
     * @return string 
     */
    public function getFathernameEnglish()
    {
        return $this->fathernameEnglish;
    }

    /**
     * Set fathernameBangla
     *
     * @param string $fathernameBangla
     * @return IndividualInfo
     */
    public function setFathernameBangla($fathernameBangla)
    {
        $this->fathernameBangla = $fathernameBangla;

        return $this;
    }

    /**
     * Get fathernameBangla
     *
     * @return string 
     */
    public function getFathernameBangla()
    {
        return $this->fathernameBangla;
    }

    /**
     * Set q22sl
     *
     * @param string $q22sl
     * @return IndividualInfo
     */
    public function setQ22sl($q22sl)
    {
        $this->q22sl = $q22sl;

        return $this;
    }

    /**
     * Get q22sl
     *
     * @return string 
     */
    public function getQ22sl()
    {
        return $this->q22sl;
    }

    /**
     * Set spousenameEnglish
     *
     * @param string $spousenameEnglish
     * @return IndividualInfo
     */
    public function setSpousenameEnglish($spousenameEnglish)
    {
        $this->spousenameEnglish = $spousenameEnglish;

        return $this;
    }

    /**
     * Get spousenameEnglish
     *
     * @return string 
     */
    public function getSpousenameEnglish()
    {
        return $this->spousenameEnglish;
    }

    /**
     * Set spousenameBangla
     *
     * @param string $spousenameBangla
     * @return IndividualInfo
     */
    public function setSpousenameBangla($spousenameBangla)
    {
        $this->spousenameBangla = $spousenameBangla;

        return $this;
    }

    /**
     * Get spousenameBangla
     *
     * @return string 
     */
    public function getSpousenameBangla()
    {
        return $this->spousenameBangla;
    }

    /**
     * Set binBrn
     *
     * @param string $binBrn
     * @return IndividualInfo
     */
    public function setBinBrn($binBrn)
    {
        $this->binBrn = $binBrn;

        return $this;
    }

    /**
     * Get binBrn
     *
     * @return string 
     */
    public function getBinBrn()
    {
        return $this->binBrn;
    }

    /**
     * Set citizenNid
     *
     * @param string $citizenNid
     * @return IndividualInfo
     */
    public function setCitizenNid($citizenNid)
    {
        $this->citizenNid = $citizenNid;

        return $this;
    }

    /**
     * Get citizenNid
     *
     * @return string 
     */
    public function getCitizenNid()
    {
        return $this->citizenNid;
    }

    /**
     * Set q25
     *
     * @param string $q25
     * @return IndividualInfo
     */
    public function setQ25($q25)
    {
        $this->q25 = $q25;

        return $this;
    }

    /**
     * Get q25
     *
     * @return string 
     */
    public function getQ25()
    {
        return $this->q25;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return IndividualInfo
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string 
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set religion
     *
     * @param string $religion
     * @return IndividualInfo
     */
    public function setReligion($religion)
    {
        $this->religion = $religion;

        return $this;
    }

    /**
     * Get religion
     *
     * @return string 
     */
    public function getReligion()
    {
        return $this->religion;
    }

    /**
     * Set maritalstatus
     *
     * @param string $maritalstatus
     * @return IndividualInfo
     */
    public function setMaritalstatus($maritalstatus)
    {
        $this->maritalstatus = $maritalstatus;

        return $this;
    }

    /**
     * Get maritalstatus
     *
     * @return string 
     */
    public function getMaritalstatus()
    {
        return $this->maritalstatus;
    }

    /**
     * Set eduqualification
     *
     * @param string $eduqualification
     * @return IndividualInfo
     */
    public function setEduqualification($eduqualification)
    {
        $this->eduqualification = $eduqualification;

        return $this;
    }

    /**
     * Get eduqualification
     *
     * @return string 
     */
    public function getEduqualification()
    {
        return $this->eduqualification;
    }

    /**
     * Set occupation
     *
     * @param string $occupation
     * @return IndividualInfo
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return string 
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return IndividualInfo
     */
    public function setNationality($nationality)
    {
        $this->nationality = $nationality;

        return $this;
    }

    /**
     * Get nationality
     *
     * @return string 
     */
    public function getNationality()
    {
        return $this->nationality;
    }

    /**
     * Set nationalityothers
     *
     * @param string $nationalityothers
     * @return IndividualInfo
     */
    public function setNationalityothers($nationalityothers)
    {
        $this->nationalityothers = $nationalityothers;

        return $this;
    }

    /**
     * Get nationalityothers
     *
     * @return string 
     */
    public function getNationalityothers()
    {
        return $this->nationalityothers;
    }

    /**
     * Set q32
     *
     * @param string $q32
     * @return IndividualInfo
     */
    public function setQ32($q32)
    {
        $this->q32 = $q32;

        return $this;
    }

    /**
     * Get q32
     *
     * @return string 
     */
    public function getQ32()
    {
        return $this->q32;
    }

    /**
     * Set q33
     *
     * @param string $q33
     * @return IndividualInfo
     */
    public function setQ33($q33)
    {
        $this->q33 = $q33;

        return $this;
    }

    /**
     * Get q33
     *
     * @return string 
     */
    public function getQ33()
    {
        return $this->q33;
    }

    /**
     * Set flag1
     *
     * @param string $flag1
     * @return IndividualInfo
     */
    public function setFlag1($flag1)
    {
        $this->flag1 = $flag1;

        return $this;
    }

    /**
     * Get flag1
     *
     * @return string 
     */
    public function getFlag1()
    {
        return $this->flag1;
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
