<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PrimaryEducation
 *
 * @ORM\Table(name="primary_education", indexes={@ORM\Index(name="Birth_Certificate", columns={"Birth_Certificate"}), @ORM\Index(name="Fathers_NID", columns={"Fathers_NID"})})
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PrimaryEducationRepository")
 */
class PrimaryEducation
{
    /**
     * @var string
     *
     * @ORM\Column(name="Form_no", type="string", length=255, nullable=true)
     */
    private $formNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="QSL_No", type="bigint", nullable=true)
     */
    private $qslNo;

    /**
     * @var integer
     *
     * @ORM\Column(name="School_ID", type="bigint", nullable=true)
     */
    private $schoolId;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_Bangla", type="string", length=255, nullable=true)
     */
    private $nameBangla;

    /**
     * @var string
     *
     * @ORM\Column(name="Name_English", type="string", length=255, nullable=true)
     */
    private $nameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="Birth_Certificate", type="string", length=255, nullable=true)
     */
    private $birthCertificate;

    /**
     * @var string
     *
     * @ORM\Column(name="Place_of_Birth", type="string", length=255, nullable=true)
     */
    private $placeOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="Date_of_Birth", type="string", length=255, nullable=true)
     */
    private $dateOfBirth;

    /**
     * @var string
     *
     * @ORM\Column(name="Gender", type="string", length=255, nullable=true)
     */
    private $gender;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationality", type="string", length=255, nullable=true)
     */
    private $nationality;

    /**
     * @var string
     *
     * @ORM\Column(name="Nationality_Others", type="string", length=255, nullable=true)
     */
    private $nationalityOthers;

    /**
     * @var integer
     *
     * @ORM\Column(name="Present_Education_Qualification", type="integer", nullable=true)
     */
    private $presentEducationQualification;

    /**
     * @var string
     *
     * @ORM\Column(name="Annual_Examination_Pass", type="string", length=255, nullable=true)
     */
    private $annualExaminationPass;

    /**
     * @var string
     *
     * @ORM\Column(name="Relagion", type="string", length=255, nullable=true)
     */
    private $relagion;

    /**
     * @var string
     *
     * @ORM\Column(name="Others_Religion", type="string", length=255, nullable=true)
     */
    private $othersReligion;

    /**
     * @var string
     *
     * @ORM\Column(name="Number_of_Siblings", type="string", length=255, nullable=true)
     */
    private $numberOfSiblings;

    /**
     * @var string
     *
     * @ORM\Column(name="Fathers_Name_Bangla", type="string", length=255, nullable=true)
     */
    private $fathersNameBangla;

    /**
     * @var string
     *
     * @ORM\Column(name="Fathers_Name_English", type="string", length=255, nullable=true)
     */
    private $fathersNameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="Fathers_NID", type="string", length=255, nullable=true)
     */
    private $fathersNid;

    /**
     * @var string
     *
     * @ORM\Column(name="Fathers_Mobile_No", type="string", length=255, nullable=true)
     */
    private $fathersMobileNo;

    /**
     * @var string
     *
     * @ORM\Column(name="Fathers_Death_Date", type="string", length=255, nullable=true)
     */
    private $fathersDeathDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Mothers_Name_Bangla", type="string", length=255, nullable=true)
     */
    private $mothersNameBangla;

    /**
     * @var string
     *
     * @ORM\Column(name="Mothers_Name_English", type="string", length=255, nullable=true)
     */
    private $mothersNameEnglish;

    /**
     * @var string
     *
     * @ORM\Column(name="Mothers_NID", type="string", length=255, nullable=true)
     */
    private $mothersNid;

    /**
     * @var string
     *
     * @ORM\Column(name="Mothers_Mobile_No", type="string", length=255, nullable=true)
     */
    private $mothersMobileNo;

    /**
     * @var string
     *
     * @ORM\Column(name="Mothers_Death_Date", type="string", length=255, nullable=true)
     */
    private $mothersDeathDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Disability", type="string", length=255, nullable=true)
     */
    private $disability;

    /**
     * @var string
     *
     * @ORM\Column(name="Others_Disability", type="string", length=255, nullable=true)
     */
    private $othersDisability;

    /**
     * @var string
     *
     * @ORM\Column(name="Blood_Group", type="string", length=255, nullable=true)
     */
    private $bloodGroup;

    /**
     * @var string
     *
     * @ORM\Column(name="Visible_Identifi_Sign", type="string", length=255, nullable=true)
     */
    private $visibleIdentifiSign;

    /**
     * @var string
     *
     * @ORM\Column(name="Present_Address", type="string", length=255, nullable=true)
     */
    private $presentAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="Present_Word_Union", type="string", length=255, nullable=true)
     */
    private $presentWordUnion;

    /**
     * @var string
     *
     * @ORM\Column(name="26_Present___Parmanent_Address", type="string", length=255, nullable=true)
     */
    private $PresentParmanentAddress;

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
     * @var integer
     *
     * @ORM\Column(name="Permanent_Thana", type="integer", nullable=true)
     */
    private $permanentThana;

    /**
     * @var integer
     *
     * @ORM\Column(name="Permanent_Zila", type="integer", nullable=true)
     */
    private $permanentZila;

    /**
     * @var integer
     *
     * @ORM\Column(name="Permanent_Division", type="integer", nullable=true)
     */
    private $permanentDivision;

    /**
     * @var integer
     *
     * @ORM\Column(name="Permanent_Post_Code", type="integer", nullable=true)
     */
    private $permanentPostCode;

    /**
     * @var string
     *
     * @ORM\Column(name="Siblings_Name_Bangla1", type="string", length=255, nullable=true)
     */
    private $siblingsNameBangla1;

    /**
     * @var string
     *
     * @ORM\Column(name="Siblings_Name_English_1", type="string", length=255, nullable=true)
     */
    private $siblingsNameEnglish1;

    /**
     * @var string
     *
     * @ORM\Column(name="Birth_Date_1", type="string", length=255, nullable=true)
     */
    private $birthDate1;

    /**
     * @var string
     *
     * @ORM\Column(name="Siblings_Name_Bangla_2", type="string", length=255, nullable=true)
     */
    private $siblingsNameBangla2;

    /**
     * @var string
     *
     * @ORM\Column(name="Siblings_Name_English_2", type="string", length=255, nullable=true)
     */
    private $siblingsNameEnglish2;

    /**
     * @var string
     *
     * @ORM\Column(name="Birth_Date_2", type="string", length=255, nullable=true)
     */
    private $birthDate2;

    /**
     * @var string
     *
     * @ORM\Column(name="Siblings_name_bangla_3", type="string", length=255, nullable=true)
     */
    private $siblingsNameBangla3;

    /**
     * @var string
     *
     * @ORM\Column(name="Siblings_Name_English_3", type="string", length=255, nullable=true)
     */
    private $siblingsNameEnglish3;

    /**
     * @var string
     *
     * @ORM\Column(name="Birth_Date_3", type="string", length=255, nullable=true)
     */
    private $birthDate3;

    /**
     * @var string
     *
     * @ORM\Column(name="Siblings_Name_Bangla_4", type="string", length=255, nullable=true)
     */
    private $siblingsNameBangla4;

    /**
     * @var string
     *
     * @ORM\Column(name="Siblings_Name_English_4", type="string", length=255, nullable=true)
     */
    private $siblingsNameEnglish4;

    /**
     * @var string
     *
     * @ORM\Column(name="Birth_Date_4", type="string", length=255, nullable=true)
     */
    private $birthDate4;

    /**
     * @var string
     *
     * @ORM\Column(name="Lawful_Guardian_Name", type="string", length=255, nullable=true)
     */
    private $lawfulGuardianName;

    /**
     * @var string
     *
     * @ORM\Column(name="Lawful_Guardian_NID", type="string", length=255, nullable=true)
     */
    private $lawfulGuardianNid;

    /**
     * @var string
     *
     * @ORM\Column(name="Relation_With_Student", type="string", length=255, nullable=true)
     */
    private $relationWithStudent;

    /**
     * @var string
     *
     * @ORM\Column(name="Schools_EIIN", type="string", length=255, nullable=true)
     */
    private $schoolsEiin;

    /**
     * @var string
     *
     * @ORM\Column(name="School_Name", type="string", length=255, nullable=true)
     */
    private $schoolName;

    /**
     * @var string
     *
     * @ORM\Column(name="School_Address", type="string", length=255, nullable=true)
     */
    private $schoolAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="Class_Teacher_Name", type="string", length=255, nullable=true)
     */
    private $classTeacherName;

    /**
     * @var integer
     *
     * @ORM\Column(name="Class_Teacher_NID", type="bigint", nullable=true)
     */
    private $classTeacherNid;

    /**
     * @var string
     *
     * @ORM\Column(name="Class_Teacher_Date", type="string", length=255, nullable=true)
     */
    private $classTeacherDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Head_Teacher_Name", type="string", length=255, nullable=true)
     */
    private $headTeacherName;

    /**
     * @var integer
     *
     * @ORM\Column(name="Head_Teacher_NID", type="bigint", nullable=true)
     */
    private $headTeacherNid;

    /**
     * @var string
     *
     * @ORM\Column(name="Head_Teacher_Date", type="string", length=255, nullable=true)
     */
    private $headTeacherDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Data_Entry_Oparetor_NID", type="string", length=255, nullable=true)
     */
    private $dataEntryOparetorNid;

    /**
     * @var string
     *
     * @ORM\Column(name="Data_Entry_Oparetor_Date", type="string", length=255, nullable=true)
     */
    private $dataEntryOparetorDate;

    /**
     * @var string
     *
     * @ORM\Column(name="Biomatric_Info_Collector_Nid", type="string", length=255, nullable=true)
     */
    private $biomatricInfoCollectorNid;

    /**
     * @var string
     *
     * @ORM\Column(name="Biomatric_Info_Collector_Date", type="string", length=255, nullable=true)
     */
    private $biomatricInfoCollectorDate;

    /**
     * @var integer
     *
     * @ORM\Column(name="Thana", type="integer", nullable=true)
     */
    private $thana;

    /**
     * @var integer
     *
     * @ORM\Column(name="Zila", type="integer", nullable=true)
     */
    private $zila;

    /**
     * @var string
     *
     * @ORM\Column(name="Division", type="string", length=255, nullable=true)
     */
    private $division;

    /**
     * @var integer
     *
     * @ORM\Column(name="Postcode", type="integer", nullable=true)
     */
    private $postcode;

    /**
     * @var integer
     *
     * @ORM\Column(name="Thana_School", type="integer", nullable=true)
     */
    private $thanaSchool;

    /**
     * @var integer
     *
     * @ORM\Column(name="Zila_School", type="integer", nullable=true)
     */
    private $zilaSchool;

    /**
     * @var string
     *
     * @ORM\Column(name="Division_School", type="string", length=255, nullable=true)
     */
    private $divisionSchool;

    /**
     * @var integer
     *
     * @ORM\Column(name="Postcode_School", type="integer", nullable=true)
     */
    private $postcodeSchool;

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
     * @param string $formNo
     * @return PrimaryEducation
     */
    public function setFormNo($formNo)
    {
        $this->formNo = $formNo;

        return $this;
    }

    /**
     * Get formNo
     *
     * @return string 
     */
    public function getFormNo()
    {
        return $this->formNo;
    }

    /**
     * Set qslNo
     *
     * @param integer $qslNo
     * @return PrimaryEducation
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
     * Set schoolId
     *
     * @param integer $schoolId
     * @return PrimaryEducation
     */
    public function setSchoolId($schoolId)
    {
        $this->schoolId = $schoolId;

        return $this;
    }

    /**
     * Get schoolId
     *
     * @return integer 
     */
    public function getSchoolId()
    {
        return $this->schoolId;
    }

    /**
     * Set nameBangla
     *
     * @param string $nameBangla
     * @return PrimaryEducation
     */
    public function setNameBangla($nameBangla)
    {
        $this->nameBangla = $nameBangla;

        return $this;
    }

    /**
     * Get nameBangla
     *
     * @return string 
     */
    public function getNameBangla()
    {
        return $this->nameBangla;
    }

    /**
     * Set nameEnglish
     *
     * @param string $nameEnglish
     * @return PrimaryEducation
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
     * Set birthCertificate
     *
     * @param string $birthCertificate
     * @return PrimaryEducation
     */
    public function setBirthCertificate($birthCertificate)
    {
        $this->birthCertificate = $birthCertificate;

        return $this;
    }

    /**
     * Get birthCertificate
     *
     * @return string 
     */
    public function getBirthCertificate()
    {
        return $this->birthCertificate;
    }

    /**
     * Set placeOfBirth
     *
     * @param string $placeOfBirth
     * @return PrimaryEducation
     */
    public function setPlaceOfBirth($placeOfBirth)
    {
        $this->placeOfBirth = $placeOfBirth;

        return $this;
    }

    /**
     * Get placeOfBirth
     *
     * @return string 
     */
    public function getPlaceOfBirth()
    {
        return $this->placeOfBirth;
    }

    /**
     * Set dateOfBirth
     *
     * @param string $dateOfBirth
     * @return PrimaryEducation
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
     * Set gender
     *
     * @param string $gender
     * @return PrimaryEducation
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
     * Set nationality
     *
     * @param string $nationality
     * @return PrimaryEducation
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
     * Set nationalityOthers
     *
     * @param string $nationalityOthers
     * @return PrimaryEducation
     */
    public function setNationalityOthers($nationalityOthers)
    {
        $this->nationalityOthers = $nationalityOthers;

        return $this;
    }

    /**
     * Get nationalityOthers
     *
     * @return string 
     */
    public function getNationalityOthers()
    {
        return $this->nationalityOthers;
    }

    /**
     * Set presentEducationQualification
     *
     * @param integer $presentEducationQualification
     * @return PrimaryEducation
     */
    public function setPresentEducationQualification($presentEducationQualification)
    {
        $this->presentEducationQualification = $presentEducationQualification;

        return $this;
    }

    /**
     * Get presentEducationQualification
     *
     * @return integer 
     */
    public function getPresentEducationQualification()
    {
        return $this->presentEducationQualification;
    }

    /**
     * Set annualExaminationPass
     *
     * @param string $annualExaminationPass
     * @return PrimaryEducation
     */
    public function setAnnualExaminationPass($annualExaminationPass)
    {
        $this->annualExaminationPass = $annualExaminationPass;

        return $this;
    }

    /**
     * Get annualExaminationPass
     *
     * @return string 
     */
    public function getAnnualExaminationPass()
    {
        return $this->annualExaminationPass;
    }

    /**
     * Set relagion
     *
     * @param string $relagion
     * @return PrimaryEducation
     */
    public function setRelagion($relagion)
    {
        $this->relagion = $relagion;

        return $this;
    }

    /**
     * Get relagion
     *
     * @return string 
     */
    public function getRelagion()
    {
        return $this->relagion;
    }

    /**
     * Set othersReligion
     *
     * @param string $othersReligion
     * @return PrimaryEducation
     */
    public function setOthersReligion($othersReligion)
    {
        $this->othersReligion = $othersReligion;

        return $this;
    }

    /**
     * Get othersReligion
     *
     * @return string 
     */
    public function getOthersReligion()
    {
        return $this->othersReligion;
    }

    /**
     * Set numberOfSiblings
     *
     * @param string $numberOfSiblings
     * @return PrimaryEducation
     */
    public function setNumberOfSiblings($numberOfSiblings)
    {
        $this->numberOfSiblings = $numberOfSiblings;

        return $this;
    }

    /**
     * Get numberOfSiblings
     *
     * @return string 
     */
    public function getNumberOfSiblings()
    {
        return $this->numberOfSiblings;
    }

    /**
     * Set fathersNameBangla
     *
     * @param string $fathersNameBangla
     * @return PrimaryEducation
     */
    public function setFathersNameBangla($fathersNameBangla)
    {
        $this->fathersNameBangla = $fathersNameBangla;

        return $this;
    }

    /**
     * Get fathersNameBangla
     *
     * @return string 
     */
    public function getFathersNameBangla()
    {
        return $this->fathersNameBangla;
    }

    /**
     * Set fathersNameEnglish
     *
     * @param string $fathersNameEnglish
     * @return PrimaryEducation
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
     * Set fathersNid
     *
     * @param string $fathersNid
     * @return PrimaryEducation
     */
    public function setFathersNid($fathersNid)
    {
        $this->fathersNid = $fathersNid;

        return $this;
    }

    /**
     * Get fathersNid
     *
     * @return string 
     */
    public function getFathersNid()
    {
        return $this->fathersNid;
    }

    /**
     * Set fathersMobileNo
     *
     * @param string $fathersMobileNo
     * @return PrimaryEducation
     */
    public function setFathersMobileNo($fathersMobileNo)
    {
        $this->fathersMobileNo = $fathersMobileNo;

        return $this;
    }

    /**
     * Get fathersMobileNo
     *
     * @return string 
     */
    public function getFathersMobileNo()
    {
        return $this->fathersMobileNo;
    }

    /**
     * Set fathersDeathDate
     *
     * @param string $fathersDeathDate
     * @return PrimaryEducation
     */
    public function setFathersDeathDate($fathersDeathDate)
    {
        $this->fathersDeathDate = $fathersDeathDate;

        return $this;
    }

    /**
     * Get fathersDeathDate
     *
     * @return string 
     */
    public function getFathersDeathDate()
    {
        return $this->fathersDeathDate;
    }

    /**
     * Set mothersNameBangla
     *
     * @param string $mothersNameBangla
     * @return PrimaryEducation
     */
    public function setMothersNameBangla($mothersNameBangla)
    {
        $this->mothersNameBangla = $mothersNameBangla;

        return $this;
    }

    /**
     * Get mothersNameBangla
     *
     * @return string 
     */
    public function getMothersNameBangla()
    {
        return $this->mothersNameBangla;
    }

    /**
     * Set mothersNameEnglish
     *
     * @param string $mothersNameEnglish
     * @return PrimaryEducation
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
     * Set mothersNid
     *
     * @param string $mothersNid
     * @return PrimaryEducation
     */
    public function setMothersNid($mothersNid)
    {
        $this->mothersNid = $mothersNid;

        return $this;
    }

    /**
     * Get mothersNid
     *
     * @return string 
     */
    public function getMothersNid()
    {
        return $this->mothersNid;
    }

    /**
     * Set mothersMobileNo
     *
     * @param string $mothersMobileNo
     * @return PrimaryEducation
     */
    public function setMothersMobileNo($mothersMobileNo)
    {
        $this->mothersMobileNo = $mothersMobileNo;

        return $this;
    }

    /**
     * Get mothersMobileNo
     *
     * @return string 
     */
    public function getMothersMobileNo()
    {
        return $this->mothersMobileNo;
    }

    /**
     * Set mothersDeathDate
     *
     * @param string $mothersDeathDate
     * @return PrimaryEducation
     */
    public function setMothersDeathDate($mothersDeathDate)
    {
        $this->mothersDeathDate = $mothersDeathDate;

        return $this;
    }

    /**
     * Get mothersDeathDate
     *
     * @return string 
     */
    public function getMothersDeathDate()
    {
        return $this->mothersDeathDate;
    }

    /**
     * Set disability
     *
     * @param string $disability
     * @return PrimaryEducation
     */
    public function setDisability($disability)
    {
        $this->disability = $disability;

        return $this;
    }

    /**
     * Get disability
     *
     * @return string 
     */
    public function getDisability()
    {
        return $this->disability;
    }

    /**
     * Set othersDisability
     *
     * @param string $othersDisability
     * @return PrimaryEducation
     */
    public function setOthersDisability($othersDisability)
    {
        $this->othersDisability = $othersDisability;

        return $this;
    }

    /**
     * Get othersDisability
     *
     * @return string 
     */
    public function getOthersDisability()
    {
        return $this->othersDisability;
    }

    /**
     * Set bloodGroup
     *
     * @param string $bloodGroup
     * @return PrimaryEducation
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
     * Set visibleIdentifiSign
     *
     * @param string $visibleIdentifiSign
     * @return PrimaryEducation
     */
    public function setVisibleIdentifiSign($visibleIdentifiSign)
    {
        $this->visibleIdentifiSign = $visibleIdentifiSign;

        return $this;
    }

    /**
     * Get visibleIdentifiSign
     *
     * @return string 
     */
    public function getVisibleIdentifiSign()
    {
        return $this->visibleIdentifiSign;
    }

    /**
     * Set presentAddress
     *
     * @param string $presentAddress
     * @return PrimaryEducation
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
     * Set presentWordUnion
     *
     * @param string $presentWordUnion
     * @return PrimaryEducation
     */
    public function setPresentWordUnion($presentWordUnion)
    {
        $this->presentWordUnion = $presentWordUnion;

        return $this;
    }

    /**
     * Get presentWordUnion
     *
     * @return string 
     */
    public function getPresentWordUnion()
    {
        return $this->presentWordUnion;
    }

    /**
     * Set PresentParmanentAddress
     *
     * @param string $PresentParmanentAddress
     * @return PrimaryEducation
     */
    public function setPresentParmanentAddress($PresentParmanentAddress)
    {
        $this->PresentParmanentAddress = $PresentParmanentAddress;

        return $this;
    }

    /**
     * Get PresentParmanentAddress
     *
     * @return string 
     */
    public function getPresentParmanentAddress()
    {
        return $this->PresentParmanentAddress;
    }

    /**
     * Set permanentAddress
     *
     * @param string $permanentAddress
     * @return PrimaryEducation
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
     * @return PrimaryEducation
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
     * Set permanentThana
     *
     * @param integer $permanentThana
     * @return PrimaryEducation
     */
    public function setPermanentThana($permanentThana)
    {
        $this->permanentThana = $permanentThana;

        return $this;
    }

    /**
     * Get permanentThana
     *
     * @return integer 
     */
    public function getPermanentThana()
    {
        return $this->permanentThana;
    }

    /**
     * Set permanentZila
     *
     * @param integer $permanentZila
     * @return PrimaryEducation
     */
    public function setPermanentZila($permanentZila)
    {
        $this->permanentZila = $permanentZila;

        return $this;
    }

    /**
     * Get permanentZila
     *
     * @return integer 
     */
    public function getPermanentZila()
    {
        return $this->permanentZila;
    }

    /**
     * Set permanentDivision
     *
     * @param integer $permanentDivision
     * @return PrimaryEducation
     */
    public function setPermanentDivision($permanentDivision)
    {
        $this->permanentDivision = $permanentDivision;

        return $this;
    }

    /**
     * Get permanentDivision
     *
     * @return integer 
     */
    public function getPermanentDivision()
    {
        return $this->permanentDivision;
    }

    /**
     * Set permanentPostCode
     *
     * @param integer $permanentPostCode
     * @return PrimaryEducation
     */
    public function setPermanentPostCode($permanentPostCode)
    {
        $this->permanentPostCode = $permanentPostCode;

        return $this;
    }

    /**
     * Get permanentPostCode
     *
     * @return integer 
     */
    public function getPermanentPostCode()
    {
        return $this->permanentPostCode;
    }

    /**
     * Set siblingsNameBangla1
     *
     * @param string $siblingsNameBangla1
     * @return PrimaryEducation
     */
    public function setSiblingsNameBangla1($siblingsNameBangla1)
    {
        $this->siblingsNameBangla1 = $siblingsNameBangla1;

        return $this;
    }

    /**
     * Get siblingsNameBangla1
     *
     * @return string 
     */
    public function getSiblingsNameBangla1()
    {
        return $this->siblingsNameBangla1;
    }

    /**
     * Set siblingsNameEnglish1
     *
     * @param string $siblingsNameEnglish1
     * @return PrimaryEducation
     */
    public function setSiblingsNameEnglish1($siblingsNameEnglish1)
    {
        $this->siblingsNameEnglish1 = $siblingsNameEnglish1;

        return $this;
    }

    /**
     * Get siblingsNameEnglish1
     *
     * @return string 
     */
    public function getSiblingsNameEnglish1()
    {
        return $this->siblingsNameEnglish1;
    }

    /**
     * Set birthDate1
     *
     * @param string $birthDate1
     * @return PrimaryEducation
     */
    public function setBirthDate1($birthDate1)
    {
        $this->birthDate1 = $birthDate1;

        return $this;
    }

    /**
     * Get birthDate1
     *
     * @return string 
     */
    public function getBirthDate1()
    {
        return $this->birthDate1;
    }

    /**
     * Set siblingsNameBangla2
     *
     * @param string $siblingsNameBangla2
     * @return PrimaryEducation
     */
    public function setSiblingsNameBangla2($siblingsNameBangla2)
    {
        $this->siblingsNameBangla2 = $siblingsNameBangla2;

        return $this;
    }

    /**
     * Get siblingsNameBangla2
     *
     * @return string 
     */
    public function getSiblingsNameBangla2()
    {
        return $this->siblingsNameBangla2;
    }

    /**
     * Set siblingsNameEnglish2
     *
     * @param string $siblingsNameEnglish2
     * @return PrimaryEducation
     */
    public function setSiblingsNameEnglish2($siblingsNameEnglish2)
    {
        $this->siblingsNameEnglish2 = $siblingsNameEnglish2;

        return $this;
    }

    /**
     * Get siblingsNameEnglish2
     *
     * @return string 
     */
    public function getSiblingsNameEnglish2()
    {
        return $this->siblingsNameEnglish2;
    }

    /**
     * Set birthDate2
     *
     * @param string $birthDate2
     * @return PrimaryEducation
     */
    public function setBirthDate2($birthDate2)
    {
        $this->birthDate2 = $birthDate2;

        return $this;
    }

    /**
     * Get birthDate2
     *
     * @return string 
     */
    public function getBirthDate2()
    {
        return $this->birthDate2;
    }

    /**
     * Set siblingsNameBangla3
     *
     * @param string $siblingsNameBangla3
     * @return PrimaryEducation
     */
    public function setSiblingsNameBangla3($siblingsNameBangla3)
    {
        $this->siblingsNameBangla3 = $siblingsNameBangla3;

        return $this;
    }

    /**
     * Get siblingsNameBangla3
     *
     * @return string 
     */
    public function getSiblingsNameBangla3()
    {
        return $this->siblingsNameBangla3;
    }

    /**
     * Set siblingsNameEnglish3
     *
     * @param string $siblingsNameEnglish3
     * @return PrimaryEducation
     */
    public function setSiblingsNameEnglish3($siblingsNameEnglish3)
    {
        $this->siblingsNameEnglish3 = $siblingsNameEnglish3;

        return $this;
    }

    /**
     * Get siblingsNameEnglish3
     *
     * @return string 
     */
    public function getSiblingsNameEnglish3()
    {
        return $this->siblingsNameEnglish3;
    }

    /**
     * Set birthDate3
     *
     * @param string $birthDate3
     * @return PrimaryEducation
     */
    public function setBirthDate3($birthDate3)
    {
        $this->birthDate3 = $birthDate3;

        return $this;
    }

    /**
     * Get birthDate3
     *
     * @return string 
     */
    public function getBirthDate3()
    {
        return $this->birthDate3;
    }

    /**
     * Set siblingsNameBangla4
     *
     * @param string $siblingsNameBangla4
     * @return PrimaryEducation
     */
    public function setSiblingsNameBangla4($siblingsNameBangla4)
    {
        $this->siblingsNameBangla4 = $siblingsNameBangla4;

        return $this;
    }

    /**
     * Get siblingsNameBangla4
     *
     * @return string 
     */
    public function getSiblingsNameBangla4()
    {
        return $this->siblingsNameBangla4;
    }

    /**
     * Set siblingsNameEnglish4
     *
     * @param string $siblingsNameEnglish4
     * @return PrimaryEducation
     */
    public function setSiblingsNameEnglish4($siblingsNameEnglish4)
    {
        $this->siblingsNameEnglish4 = $siblingsNameEnglish4;

        return $this;
    }

    /**
     * Get siblingsNameEnglish4
     *
     * @return string 
     */
    public function getSiblingsNameEnglish4()
    {
        return $this->siblingsNameEnglish4;
    }

    /**
     * Set birthDate4
     *
     * @param string $birthDate4
     * @return PrimaryEducation
     */
    public function setBirthDate4($birthDate4)
    {
        $this->birthDate4 = $birthDate4;

        return $this;
    }

    /**
     * Get birthDate4
     *
     * @return string 
     */
    public function getBirthDate4()
    {
        return $this->birthDate4;
    }

    /**
     * Set lawfulGuardianName
     *
     * @param string $lawfulGuardianName
     * @return PrimaryEducation
     */
    public function setLawfulGuardianName($lawfulGuardianName)
    {
        $this->lawfulGuardianName = $lawfulGuardianName;

        return $this;
    }

    /**
     * Get lawfulGuardianName
     *
     * @return string 
     */
    public function getLawfulGuardianName()
    {
        return $this->lawfulGuardianName;
    }

    /**
     * Set lawfulGuardianNid
     *
     * @param string $lawfulGuardianNid
     * @return PrimaryEducation
     */
    public function setLawfulGuardianNid($lawfulGuardianNid)
    {
        $this->lawfulGuardianNid = $lawfulGuardianNid;

        return $this;
    }

    /**
     * Get lawfulGuardianNid
     *
     * @return string 
     */
    public function getLawfulGuardianNid()
    {
        return $this->lawfulGuardianNid;
    }

    /**
     * Set relationWithStudent
     *
     * @param string $relationWithStudent
     * @return PrimaryEducation
     */
    public function setRelationWithStudent($relationWithStudent)
    {
        $this->relationWithStudent = $relationWithStudent;

        return $this;
    }

    /**
     * Get relationWithStudent
     *
     * @return string 
     */
    public function getRelationWithStudent()
    {
        return $this->relationWithStudent;
    }

    /**
     * Set schoolsEiin
     *
     * @param string $schoolsEiin
     * @return PrimaryEducation
     */
    public function setSchoolsEiin($schoolsEiin)
    {
        $this->schoolsEiin = $schoolsEiin;

        return $this;
    }

    /**
     * Get schoolsEiin
     *
     * @return string 
     */
    public function getSchoolsEiin()
    {
        return $this->schoolsEiin;
    }

    /**
     * Set schoolName
     *
     * @param string $schoolName
     * @return PrimaryEducation
     */
    public function setSchoolName($schoolName)
    {
        $this->schoolName = $schoolName;

        return $this;
    }

    /**
     * Get schoolName
     *
     * @return string 
     */
    public function getSchoolName()
    {
        return $this->schoolName;
    }

    /**
     * Set schoolAddress
     *
     * @param string $schoolAddress
     * @return PrimaryEducation
     */
    public function setSchoolAddress($schoolAddress)
    {
        $this->schoolAddress = $schoolAddress;

        return $this;
    }

    /**
     * Get schoolAddress
     *
     * @return string 
     */
    public function getSchoolAddress()
    {
        return $this->schoolAddress;
    }

    /**
     * Set classTeacherName
     *
     * @param string $classTeacherName
     * @return PrimaryEducation
     */
    public function setClassTeacherName($classTeacherName)
    {
        $this->classTeacherName = $classTeacherName;

        return $this;
    }

    /**
     * Get classTeacherName
     *
     * @return string 
     */
    public function getClassTeacherName()
    {
        return $this->classTeacherName;
    }

    /**
     * Set classTeacherNid
     *
     * @param integer $classTeacherNid
     * @return PrimaryEducation
     */
    public function setClassTeacherNid($classTeacherNid)
    {
        $this->classTeacherNid = $classTeacherNid;

        return $this;
    }

    /**
     * Get classTeacherNid
     *
     * @return integer 
     */
    public function getClassTeacherNid()
    {
        return $this->classTeacherNid;
    }

    /**
     * Set classTeacherDate
     *
     * @param string $classTeacherDate
     * @return PrimaryEducation
     */
    public function setClassTeacherDate($classTeacherDate)
    {
        $this->classTeacherDate = $classTeacherDate;

        return $this;
    }

    /**
     * Get classTeacherDate
     *
     * @return string 
     */
    public function getClassTeacherDate()
    {
        return $this->classTeacherDate;
    }

    /**
     * Set headTeacherName
     *
     * @param string $headTeacherName
     * @return PrimaryEducation
     */
    public function setHeadTeacherName($headTeacherName)
    {
        $this->headTeacherName = $headTeacherName;

        return $this;
    }

    /**
     * Get headTeacherName
     *
     * @return string 
     */
    public function getHeadTeacherName()
    {
        return $this->headTeacherName;
    }

    /**
     * Set headTeacherNid
     *
     * @param integer $headTeacherNid
     * @return PrimaryEducation
     */
    public function setHeadTeacherNid($headTeacherNid)
    {
        $this->headTeacherNid = $headTeacherNid;

        return $this;
    }

    /**
     * Get headTeacherNid
     *
     * @return integer 
     */
    public function getHeadTeacherNid()
    {
        return $this->headTeacherNid;
    }

    /**
     * Set headTeacherDate
     *
     * @param string $headTeacherDate
     * @return PrimaryEducation
     */
    public function setHeadTeacherDate($headTeacherDate)
    {
        $this->headTeacherDate = $headTeacherDate;

        return $this;
    }

    /**
     * Get headTeacherDate
     *
     * @return string 
     */
    public function getHeadTeacherDate()
    {
        return $this->headTeacherDate;
    }

    /**
     * Set dataEntryOparetorNid
     *
     * @param string $dataEntryOparetorNid
     * @return PrimaryEducation
     */
    public function setDataEntryOparetorNid($dataEntryOparetorNid)
    {
        $this->dataEntryOparetorNid = $dataEntryOparetorNid;

        return $this;
    }

    /**
     * Get dataEntryOparetorNid
     *
     * @return string 
     */
    public function getDataEntryOparetorNid()
    {
        return $this->dataEntryOparetorNid;
    }

    /**
     * Set dataEntryOparetorDate
     *
     * @param string $dataEntryOparetorDate
     * @return PrimaryEducation
     */
    public function setDataEntryOparetorDate($dataEntryOparetorDate)
    {
        $this->dataEntryOparetorDate = $dataEntryOparetorDate;

        return $this;
    }

    /**
     * Get dataEntryOparetorDate
     *
     * @return string 
     */
    public function getDataEntryOparetorDate()
    {
        return $this->dataEntryOparetorDate;
    }

    /**
     * Set biomatricInfoCollectorNid
     *
     * @param string $biomatricInfoCollectorNid
     * @return PrimaryEducation
     */
    public function setBiomatricInfoCollectorNid($biomatricInfoCollectorNid)
    {
        $this->biomatricInfoCollectorNid = $biomatricInfoCollectorNid;

        return $this;
    }

    /**
     * Get biomatricInfoCollectorNid
     *
     * @return string 
     */
    public function getBiomatricInfoCollectorNid()
    {
        return $this->biomatricInfoCollectorNid;
    }

    /**
     * Set biomatricInfoCollectorDate
     *
     * @param string $biomatricInfoCollectorDate
     * @return PrimaryEducation
     */
    public function setBiomatricInfoCollectorDate($biomatricInfoCollectorDate)
    {
        $this->biomatricInfoCollectorDate = $biomatricInfoCollectorDate;

        return $this;
    }

    /**
     * Get biomatricInfoCollectorDate
     *
     * @return string 
     */
    public function getBiomatricInfoCollectorDate()
    {
        return $this->biomatricInfoCollectorDate;
    }

    /**
     * Set thana
     *
     * @param integer $thana
     * @return PrimaryEducation
     */
    public function setThana($thana)
    {
        $this->thana = $thana;

        return $this;
    }

    /**
     * Get thana
     *
     * @return integer 
     */
    public function getThana()
    {
        return $this->thana;
    }

    /**
     * Set zila
     *
     * @param integer $zila
     * @return PrimaryEducation
     */
    public function setZila($zila)
    {
        $this->zila = $zila;

        return $this;
    }

    /**
     * Get zila
     *
     * @return integer 
     */
    public function getZila()
    {
        return $this->zila;
    }

    /**
     * Set division
     *
     * @param string $division
     * @return PrimaryEducation
     */
    public function setDivision($division)
    {
        $this->division = $division;

        return $this;
    }

    /**
     * Get division
     *
     * @return string 
     */
    public function getDivision()
    {
        return $this->division;
    }

    /**
     * Set postcode
     *
     * @param integer $postcode
     * @return PrimaryEducation
     */
    public function setPostcode($postcode)
    {
        $this->postcode = $postcode;

        return $this;
    }

    /**
     * Get postcode
     *
     * @return integer 
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Set thanaSchool
     *
     * @param integer $thanaSchool
     * @return PrimaryEducation
     */
    public function setThanaSchool($thanaSchool)
    {
        $this->thanaSchool = $thanaSchool;

        return $this;
    }

    /**
     * Get thanaSchool
     *
     * @return integer 
     */
    public function getThanaSchool()
    {
        return $this->thanaSchool;
    }

    /**
     * Set zilaSchool
     *
     * @param integer $zilaSchool
     * @return PrimaryEducation
     */
    public function setZilaSchool($zilaSchool)
    {
        $this->zilaSchool = $zilaSchool;

        return $this;
    }

    /**
     * Get zilaSchool
     *
     * @return integer 
     */
    public function getZilaSchool()
    {
        return $this->zilaSchool;
    }

    /**
     * Set divisionSchool
     *
     * @param string $divisionSchool
     * @return PrimaryEducation
     */
    public function setDivisionSchool($divisionSchool)
    {
        $this->divisionSchool = $divisionSchool;

        return $this;
    }

    /**
     * Get divisionSchool
     *
     * @return string 
     */
    public function getDivisionSchool()
    {
        return $this->divisionSchool;
    }

    /**
     * Set postcodeSchool
     *
     * @param integer $postcodeSchool
     * @return PrimaryEducation
     */
    public function setPostcodeSchool($postcodeSchool)
    {
        $this->postcodeSchool = $postcodeSchool;

        return $this;
    }

    /**
     * Get postcodeSchool
     *
     * @return integer 
     */
    public function getPostcodeSchool()
    {
        return $this->postcodeSchool;
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
