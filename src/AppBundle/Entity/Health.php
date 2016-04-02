<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Health
 *
 * @ORM\Table(name="health", indexes={@ORM\Index(name="Birth_Certificate_no", columns={"Birth_Certificate_no"})})
 * @ORM\Entity
 */
class Health
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Form_no", type="integer", nullable=true)
     */
    private $formNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="QSL_No", type="bigint", nullable=true)
     */
    private $qslNo;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_English", type="string", length=255, nullable=true)
     */
    private $nameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_of_Birth", type="string", length=255, nullable=true)
     */
    private $dateOfBirth;

    /**
     * @var integer
     *
     * @ORM\Column(name="Place_of_Birth", type="integer", nullable=true)
     */
    private $placeOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="Gender", type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="Birth_Certificate_no", type="string", length=255, nullable=true)
     */
    private $birthCertificateNo;

    /**
     * @var string
     *
     * @ORM\Column(name="Religion", type="string", length=255, nullable=true)
     */
    private $religion;

    /**
     * @var string
     *
     * @ORM\Column(name="If_Other_Religion", type="string", length=255, nullable=true)
     */
    private $ifOtherReligion;

    /**
     * @var string
     *
     * @ORM\Column(name="Mobile_No", type="string", length=255, nullable=true)
     */
    private $mobileNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="Occupation", type="integer", nullable=true)
     */
    private $occupation;

    /**
     * @var string
     *
     * @ORM\Column(name="Marital_Status", type="string", length=255, nullable=true)
     */
    private $maritalStatus;

    /**
     * @var string
     *
     * @ORM\Column(name="Hasband_or_Wife_Name_English", type="string", length=255, nullable=true)
     */
    private $hasbandOrWifeNameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="Hasband_or_Wife_NID_BRN_No", type="string", length=255, nullable=true)
     */
    private $hasbandOrWifeNidBrnNo;

    /**
     * @var string
     *
     * @ORM\Column(name="Hasband_or_Wife_Mobile", type="string", length=255, nullable=true)
     */
    private $hasbandOrWifeMobile;

    /**
     * @var string
     *
     * @ORM\Column(name="Fathers_Name_English", type="string", length=255, nullable=true)
     */
    private $fathersNameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="Fathers_NID_No", type="string", length=255, nullable=true)
     */
    private $fathersNidNo;

    /**
     * @var string
     *
     * @ORM\Column(name="If_Father_Death_Yers", type="string", length=255, nullable=true)
     */
    private $ifFatherDeathYers;

    /**
     * @var string
     *
     * @ORM\Column(name="Mothers_Name_English", type="string", length=255, nullable=true)
     */
    private $mothersNameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="Mothers_NID_No", type="string", length=255, nullable=true)
     */
    private $mothersNidNo;

    /**
     * @var string
     *
     * @ORM\Column(name="If_Mother_Date_Yers", type="string", length=255, nullable=true)
     */
    private $ifMotherDateYers;

    /**
     * @var string
     *
     * @ORM\Column(name="Persent_Address", type="string", length=255, nullable=true)
     */
    private $persentAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="Word_Union", type="string", length=255, nullable=true)
     */
    private $wordUnion;

    /**
     * @var string
     *
     * @ORM\Column(name="If_Persent_Permanent_Address_Same", type="string", length=255, nullable=true)
     */
    private $ifPersentPermanentAddressSame;

    /**
     * @var string
     *
     * @ORM\Column(name="Permanent_Address", type="string", length=255, nullable=true)
     */
    private $permanentAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="Permanent_Word_Union", type="string", length=255, nullable=true)
     */
    private $permanentWordUnion;

    /**
     * @var string
     *
     * @ORM\Column(name="Permanent_Upzila_Thana", type="string", length=255, nullable=true)
     */
    private $permanentUpzilaThana;

    /**
     * @var string
     *
     * @ORM\Column(name="Permanent_Zila", type="string", length=255, nullable=true)
     */
    private $permanentZila;

    /**
     * @var string
     *
     * @ORM\Column(name="Permanent_Division", type="string", length=255, nullable=true)
     */
    private $permanentDivision;

    /**
     * @var string
     *
     * @ORM\Column(name="Permanent_Post_Code", type="string", length=255, nullable=true)
     */
    private $permanentPostCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Enumerators_NID", type="string", length=255, nullable=true)
     */
    private $enumeratorsNid;

    /**
     * @var string
     *
     * @ORM\Column(name="Enumerators_Date", type="string", length=255, nullable=true)
     */
    private $enumeratorsDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Baiomatric_NID_No", type="string", length=255, nullable=true)
     */
    private $baiomatricNidNo;

    /**
     * @var string
     *
     * @ORM\Column(name="baiomatric_date", type="string", length=255, nullable=true)
     */
    private $baiomatricDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="Present_Thana", type="integer", nullable=true)
     */
    private $presentThana;

    /**
     * @var integer
     *
     * @ORM\Column(name="Present_Zila", type="integer", nullable=true)
     */
    private $presentZila;

    /**
     * @var string
     *
     * @ORM\Column(name="Present_Division", type="string", length=255, nullable=true)
     */
    private $presentDivision;

    /**
     * @var integer
     *
     * @ORM\Column(name="Present_Posetcode", type="integer", nullable=true)
     */
    private $presentPosetcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="Row_Index", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowIndex;



    /**
     * Set formNo
     *
     * @param integer $formNo
     * @return Health
     */
    public function setFormNo($formNo)
    {
        $this->formNo = $formNo;

        return $this;
    }

    /**
     * Get formNo
     *
     * @return integer 
     */
    public function getFormNo()
    {
        return $this->formNo;
    }

    /**
     * Set qslNo
     *
     * @param integer $qslNo
     * @return Health
     */
    public function setQslNo($qslNo)
    {
        $this->qslNo = $qslNo;

        return $this;
    }

    /**
     * Get qslNo
     *
     * @return integer 
     */
    public function getQslNo()
    {
        return $this->qslNo;
    }

    /**
     * Set nameEnglish
     *
     * @param string $nameEnglish
     * @return Health
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
     * Set dateOfBirth
     *
     * @param string $dateOfBirth
     * @return Health
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;

        return $this;
    }

    /**
     * Get dateOfBirth
     *
     * @return string 
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * Set placeOfBirth
     *
     * @param integer $placeOfBirth
     * @return Health
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    /**
     * Get placeOfBirth
     *
     * @return integer 
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * Set gender
     *
     * @param string $gender
     * @return Health
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
     * Set birthCertificateNo
     *
     * @param string $birthCertificateNo
     * @return Health
     */
    public function setBirthCertificateNo($birthCertificateNo)
    {
        $this->birthCertificateNo = $birthCertificateNo;

        return $this;
    }

    /**
     * Get birthCertificateNo
     *
     * @return string 
     */
    public function getBirthCertificateNo()
    {
        return $this->birthCertificateNo;
    }

    /**
     * Set religion
     *
     * @param string $religion
     * @return Health
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
     * Set ifOtherReligion
     *
     * @param string $ifOtherReligion
     * @return Health
     */
    public function setIfOtherReligion($ifOtherReligion)
    {
        $this->ifOtherReligion = $ifOtherReligion;

        return $this;
    }

    /**
     * Get ifOtherReligion
     *
     * @return string 
     */
    public function getIfOtherReligion()
    {
        return $this->ifOtherReligion;
    }

    /**
     * Set mobileNo
     *
     * @param string $mobileNo
     * @return Health
     */
    public function setMobileNo($mobileNo)
    {
        $this->mobileNo = $mobileNo;

        return $this;
    }

    /**
     * Get mobileNo
     *
     * @return string 
     */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * Set occupation
     *
     * @param integer $occupation
     * @return Health
     */
    public function setOccupation($occupation)
    {
        $this->occupation = $occupation;

        return $this;
    }

    /**
     * Get occupation
     *
     * @return integer 
     */
    public function getOccupation()
    {
        return $this->occupation;
    }

    /**
     * Set maritalStatus
     *
     * @param string $maritalStatus
     * @return Health
     */
    public function setMaritalStatus($maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;

        return $this;
    }

    /**
     * Get maritalStatus
     *
     * @return string 
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * Set hasbandOrWifeNameEnglish
     *
     * @param string $hasbandOrWifeNameEnglish
     * @return Health
     */
    public function setHasbandOrWifeNameEnglish($hasbandOrWifeNameEnglish)
    {
        $this->hasbandOrWifeNameEnglish = $hasbandOrWifeNameEnglish;

        return $this;
    }

    /**
     * Get hasbandOrWifeNameEnglish
     *
     * @return string 
     */
    public function getHasbandOrWifeNameEnglish()
    {
        return $this->hasbandOrWifeNameEnglish;
    }

    /**
     * Set hasbandOrWifeNidBrnNo
     *
     * @param string $hasbandOrWifeNidBrnNo
     * @return Health
     */
    public function setHasbandOrWifeNidBrnNo($hasbandOrWifeNidBrnNo)
    {
        $this->hasbandOrWifeNidBrnNo = $hasbandOrWifeNidBrnNo;

        return $this;
    }

    /**
     * Get hasbandOrWifeNidBrnNo
     *
     * @return string 
     */
    public function getHasbandOrWifeNidBrnNo()
    {
        return $this->hasbandOrWifeNidBrnNo;
    }

    /**
     * Set hasbandOrWifeMobile
     *
     * @param string $hasbandOrWifeMobile
     * @return Health
     */
    public function setHasbandOrWifeMobile($hasbandOrWifeMobile)
    {
        $this->hasbandOrWifeMobile = $hasbandOrWifeMobile;

        return $this;
    }

    /**
     * Get hasbandOrWifeMobile
     *
     * @return string 
     */
    public function getHasbandOrWifeMobile()
    {
        return $this->hasbandOrWifeMobile;
    }

    /**
     * Set fathersNameEnglish
     *
     * @param string $fathersNameEnglish
     * @return Health
     */
    public function setFathersNameEnglish($fathersNameEnglish)
    {
        $this->fathersNameEnglish = $fathersNameEnglish;

        return $this;
    }

    /**
     * Get fathersNameEnglish
     *
     * @return string 
     */
    public function getFathersNameEnglish()
    {
        return $this->fathersNameEnglish;
    }

    /**
     * Set fathersNidNo
     *
     * @param string $fathersNidNo
     * @return Health
     */
    public function setFathersNidNo($fathersNidNo)
    {
        $this->fathersNidNo = $fathersNidNo;

        return $this;
    }

    /**
     * Get fathersNidNo
     *
     * @return string 
     */
    public function getFathersNidNo()
    {
        return $this->fathersNidNo;
    }

    /**
     * Set ifFatherDeathYers
     *
     * @param string $ifFatherDeathYers
     * @return Health
     */
    public function setIfFatherDeathYers($ifFatherDeathYers)
    {
        $this->ifFatherDeathYers = $ifFatherDeathYers;

        return $this;
    }

    /**
     * Get ifFatherDeathYers
     *
     * @return string 
     */
    public function getIfFatherDeathYers()
    {
        return $this->ifFatherDeathYers;
    }

    /**
     * Set mothersNameEnglish
     *
     * @param string $mothersNameEnglish
     * @return Health
     */
    public function setMothersNameEnglish($mothersNameEnglish)
    {
        $this->mothersNameEnglish = $mothersNameEnglish;

        return $this;
    }

    /**
     * Get mothersNameEnglish
     *
     * @return string 
     */
    public function getMothersNameEnglish()
    {
        return $this->mothersNameEnglish;
    }

    /**
     * Set mothersNidNo
     *
     * @param string $mothersNidNo
     * @return Health
     */
    public function setMothersNidNo($mothersNidNo)
    {
        $this->mothersNidNo = $mothersNidNo;

        return $this;
    }

    /**
     * Get mothersNidNo
     *
     * @return string 
     */
    public function getMothersNidNo()
    {
        return $this->mothersNidNo;
    }

    /**
     * Set ifMotherDateYers
     *
     * @param string $ifMotherDateYers
     * @return Health
     */
    public function setIfMotherDateYers($ifMotherDateYers)
    {
        $this->ifMotherDateYers = $ifMotherDateYers;

        return $this;
    }

    /**
     * Get ifMotherDateYers
     *
     * @return string 
     */
    public function getIfMotherDateYers()
    {
        return $this->ifMotherDateYers;
    }

    /**
     * Set persentAddress
     *
     * @param string $persentAddress
     * @return Health
     */
    public function setPersentAddress($persentAddress)
    {
        $this->persentAddress = $persentAddress;

        return $this;
    }

    /**
     * Get persentAddress
     *
     * @return string 
     */
    public function getPersentAddress()
    {
        return $this->persentAddress;
    }

    /**
     * Set wordUnion
     *
     * @param string $wordUnion
     * @return Health
     */
    public function setWordUnion($wordUnion)
    {
        $this->wordUnion = $wordUnion;

        return $this;
    }

    /**
     * Get wordUnion
     *
     * @return string 
     */
    public function getWordUnion()
    {
        return $this->wordUnion;
    }

    /**
     * Set ifPersentPermanentAddressSame
     *
     * @param string $ifPersentPermanentAddressSame
     * @return Health
     */
    public function setIfPersentPermanentAddressSame($ifPersentPermanentAddressSame)
    {
        $this->ifPersentPermanentAddressSame = $ifPersentPermanentAddressSame;

        return $this;
    }

    /**
     * Get ifPersentPermanentAddressSame
     *
     * @return string 
     */
    public function getIfPersentPermanentAddressSame()
    {
        return $this->ifPersentPermanentAddressSame;
    }

    /**
     * Set permanentAddress
     *
     * @param string $permanentAddress
     * @return Health
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
     * Set permanentWordUnion
     *
     * @param string $permanentWordUnion
     * @return Health
     */
    public function setPermanentWordUnion($permanentWordUnion)
    {
        $this->permanentWordUnion = $permanentWordUnion;

        return $this;
    }

    /**
     * Get permanentWordUnion
     *
     * @return string 
     */
    public function getPermanentWordUnion()
    {
        return $this->permanentWordUnion;
    }

    /**
     * Set permanentUpzilaThana
     *
     * @param string $permanentUpzilaThana
     * @return Health
     */
    public function setPermanentUpzilaThana($permanentUpzilaThana)
    {
        $this->permanentUpzilaThana = $permanentUpzilaThana;

        return $this;
    }

    /**
     * Get permanentUpzilaThana
     *
     * @return string 
     */
    public function getPermanentUpzilaThana()
    {
        return $this->permanentUpzilaThana;
    }

    /**
     * Set permanentZila
     *
     * @param string $permanentZila
     * @return Health
     */
    public function setPermanentZila($permanentZila)
    {
        $this->permanentZila = $permanentZila;

        return $this;
    }

    /**
     * Get permanentZila
     *
     * @return string 
     */
    public function getPermanentZila()
    {
        return $this->permanentZila;
    }

    /**
     * Set permanentDivision
     *
     * @param string $permanentDivision
     * @return Health
     */
    public function setPermanentDivision($permanentDivision)
    {
        $this->permanentDivision = $permanentDivision;

        return $this;
    }

    /**
     * Get permanentDivision
     *
     * @return string 
     */
    public function getPermanentDivision()
    {
        return $this->permanentDivision;
    }

    /**
     * Set permanentPostCode
     *
     * @param string $permanentPostCode
     * @return Health
     */
    public function setPermanentPostCode($permanentPostCode)
    {
        $this->permanentPostCode = $permanentPostCode;

        return $this;
    }

    /**
     * Get permanentPostCode
     *
     * @return string 
     */
    public function getPermanentPostCode()
    {
        return $this->permanentPostCode;
    }

    /**
     * Set enumeratorsNid
     *
     * @param string $enumeratorsNid
     * @return Health
     */
    public function setEnumeratorsNid($enumeratorsNid)
    {
        $this->enumeratorsNid = $enumeratorsNid;

        return $this;
    }

    /**
     * Get enumeratorsNid
     *
     * @return string 
     */
    public function getEnumeratorsNid()
    {
        return $this->enumeratorsNid;
    }

    /**
     * Set enumeratorsDate
     *
     * @param string $enumeratorsDate
     * @return Health
     */
    public function setEnumeratorsDate($enumeratorsDate)
    {
        $this->enumeratorsDate = $enumeratorsDate;

        return $this;
    }

    /**
     * Get enumeratorsDate
     *
     * @return string 
     */
    public function getEnumeratorsDate()
    {
        return $this->enumeratorsDate;
    }

    /**
     * Set baiomatricNidNo
     *
     * @param string $baiomatricNidNo
     * @return Health
     */
    public function setBaiomatricNidNo($baiomatricNidNo)
    {
        $this->baiomatricNidNo = $baiomatricNidNo;

        return $this;
    }

    /**
     * Get baiomatricNidNo
     *
     * @return string 
     */
    public function getBaiomatricNidNo()
    {
        return $this->baiomatricNidNo;
    }

    /**
     * Set baiomatricDate
     *
     * @param string $baiomatricDate
     * @return Health
     */
    public function setBaiomatricDate($baiomatricDate)
    {
        $this->baiomatricDate = $baiomatricDate;

        return $this;
    }

    /**
     * Get baiomatricDate
     *
     * @return string 
     */
    public function getBaiomatricDate()
    {
        return $this->baiomatricDate;
    }

    /**
     * Set presentThana
     *
     * @param integer $presentThana
     * @return Health
     */
    public function setPresentThana($presentThana)
    {
        $this->presentThana = $presentThana;

        return $this;
    }

    /**
     * Get presentThana
     *
     * @return integer 
     */
    public function getPresentThana()
    {
        return $this->presentThana;
    }

    /**
     * Set presentZila
     *
     * @param integer $presentZila
     * @return Health
     */
    public function setPresentZila($presentZila)
    {
        $this->presentZila = $presentZila;

        return $this;
    }

    /**
     * Get presentZila
     *
     * @return integer 
     */
    public function getPresentZila()
    {
        return $this->presentZila;
    }

    /**
     * Set presentDivision
     *
     * @param string $presentDivision
     * @return Health
     */
    public function setPresentDivision($presentDivision)
    {
        $this->presentDivision = $presentDivision;

        return $this;
    }

    /**
     * Get presentDivision
     *
     * @return string 
     */
    public function getPresentDivision()
    {
        return $this->presentDivision;
    }

    /**
     * Set presentPosetcode
     *
     * @param integer $presentPosetcode
     * @return Health
     */
    public function setPresentPosetcode($presentPosetcode)
    {
        $this->presentPosetcode = $presentPosetcode;

        return $this;
    }

    /**
     * Get presentPosetcode
     *
     * @return integer 
     */
    public function getPresentPosetcode()
    {
        return $this->presentPosetcode;
    }

    /**
     * Get rowIndex
     *
     * @return integer 
     */
    public function getRowIndex()
    {
        return $this->rowIndex;
    }
}
