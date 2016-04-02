<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HouseholdInfo
 *
 * @ORM\Table(name="household_info")
 * @ORM\Entity
 */
class HouseholdInfo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="Barcode", type="integer", nullable=true)
     */
    private $barcode;

    /**
     * @var string
     *
     * @ORM\Column(name="PresentVillage", type="string", length=255, nullable=true)
     */
    private $presentvillage;

    /**
     * @var integer
     *
     * @ORM\Column(name="PresentDistrictID", type="integer", nullable=true)
     */
    private $presentdistrictid;

    /**
     * @var integer
     *
     * @ORM\Column(name="PresentUpazilaID", type="integer", nullable=true)
     */
    private $presentupazilaid;

    /**
     * @var integer
     *
     * @ORM\Column(name="PresentUnionID", type="integer", nullable=true)
     */
    private $presentunionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="PresentWardNo", type="integer", nullable=true)
     */
    private $presentwardno;

    /**
     * @var string
     *
     * @ORM\Column(name="PresentPostCode", type="string", length=255, nullable=true)
     */
    private $presentpostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="ParmanentVillage", type="string", length=255, nullable=true)
     */
    private $parmanentvillage;

    /**
     * @var string
     *
     * @ORM\Column(name="ParmanentDistrictID", type="string", length=255, nullable=true)
     */
    private $parmanentdistrictid;

    /**
     * @var string
     *
     * @ORM\Column(name="ParmanentUpazilaID", type="string", length=255, nullable=true)
     */
    private $parmanentupazilaid;

    /**
     * @var string
     *
     * @ORM\Column(name="ParmanentUnionID", type="string", length=255, nullable=true)
     */
    private $parmanentunionid;

    /**
     * @var string
     *
     * @ORM\Column(name="ParmanentWardNo", type="string", length=255, nullable=true)
     */
    private $parmanentwardno;

    /**
     * @var string
     *
     * @ORM\Column(name="ParmanentAreaID", type="string", length=255, nullable=true)
     */
    private $parmanentareaid;

    /**
     * @var string
     *
     * @ORM\Column(name="ParmanentPostCode", type="string", length=255, nullable=true)
     */
    private $parmanentpostcode;

    /**
     * @var string
     *
     * @ORM\Column(name="Q1", type="string", length=255, nullable=true)
     */
    private $q1;

    /**
     * @var string
     *
     * @ORM\Column(name="PresentHouseholdNo", type="string", length=255, nullable=true)
     */
    private $presenthouseholdno;

    /**
     * @var string
     *
     * @ORM\Column(name="Q3_1", type="string", length=255, nullable=true)
     */
    private $q31;

    /**
     * @var string
     *
     * @ORM\Column(name="ParmanentHouseholdNo", type="string", length=255, nullable=true)
     */
    private $parmanenthouseholdno;

    /**
     * @var string
     *
     * @ORM\Column(name="Q4", type="string", length=255, nullable=true)
     */
    private $q4;

    /**
     * @var string
     *
     * @ORM\Column(name="Q5", type="string", length=255, nullable=true)
     */
    private $q5;

    /**
     * @var string
     *
     * @ORM\Column(name="Q6", type="string", length=255, nullable=true)
     */
    private $q6;

    /**
     * @var string
     *
     * @ORM\Column(name="Q6Others", type="string", length=255, nullable=true)
     */
    private $q6others;

    /**
     * @var string
     *
     * @ORM\Column(name="Q7", type="string", length=255, nullable=true)
     */
    private $q7;

    /**
     * @var string
     *
     * @ORM\Column(name="Q7Others", type="string", length=255, nullable=true)
     */
    private $q7others;

    /**
     * @var string
     *
     * @ORM\Column(name="Q8", type="string", length=255, nullable=true)
     */
    private $q8;

    /**
     * @var string
     *
     * @ORM\Column(name="Q9", type="string", length=255, nullable=true)
     */
    private $q9;

    /**
     * @var string
     *
     * @ORM\Column(name="Q10", type="string", length=255, nullable=true)
     */
    private $q10;

    /**
     * @var string
     *
     * @ORM\Column(name="Q11", type="string", length=255, nullable=true)
     */
    private $q11;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_1", type="string", length=255, nullable=true)
     */
    private $q121;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_2", type="string", length=255, nullable=true)
     */
    private $q122;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_3", type="string", length=255, nullable=true)
     */
    private $q123;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_4", type="string", length=255, nullable=true)
     */
    private $q124;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_5", type="string", length=255, nullable=true)
     */
    private $q125;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_6", type="string", length=255, nullable=true)
     */
    private $q126;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_7", type="string", length=255, nullable=true)
     */
    private $q127;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_8", type="string", length=255, nullable=true)
     */
    private $q128;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_9", type="string", length=255, nullable=true)
     */
    private $q129;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_10", type="string", length=255, nullable=true)
     */
    private $q1210;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_11", type="string", length=255, nullable=true)
     */
    private $q1211;

    /**
     * @var string
     *
     * @ORM\Column(name="Q12_12", type="string", length=255, nullable=true)
     */
    private $q1212;

    /**
     * @var string
     *
     * @ORM\Column(name="Q13", type="string", length=255, nullable=true)
     */
    private $q13;

    /**
     * @var string
     *
     * @ORM\Column(name="Q14", type="string", length=255, nullable=true)
     */
    private $q14;

    /**
     * @var string
     *
     * @ORM\Column(name="Q15", type="string", length=255, nullable=true)
     */
    private $q15;

    /**
     * @var string
     *
     * @ORM\Column(name="Q16_1", type="string", length=255, nullable=true)
     */
    private $q161;

    /**
     * @var string
     *
     * @ORM\Column(name="Q16_2", type="string", length=255, nullable=true)
     */
    private $q162;

    /**
     * @var string
     *
     * @ORM\Column(name="Q16_3", type="string", length=255, nullable=true)
     */
    private $q163;

    /**
     * @var integer
     *
     * @ORM\Column(name="AddPage", type="integer", nullable=true)
     */
    private $addpage;

    /**
     * @var string
     *
     * @ORM\Column(name="PageNo", type="string", length=255, nullable=true)
     */
    private $pageno;

    /**
     * @var string
     *
     * @ORM\Column(name="FormSL", type="string", length=255, nullable=true)
     */
    private $formsl;

    /**
     * @var string
     *
     * @ORM\Column(name="BookNo", type="string", length=255, nullable=true)
     */
    private $bookno;

    /**
     * @var string
     *
     * @ORM\Column(name="SourceFileName", type="string", length=255, nullable=true)
     */
    private $sourcefilename;

    /**
     * @var integer
     *
     * @ORM\Column(name="DocNo", type="integer", nullable=true)
     */
    private $docno;

    /**
     * @var integer
     *
     * @ORM\Column(name="TotalDoc", type="integer", nullable=true)
     */
    private $totaldoc;

    /**
     * @var integer
     *
     * @ORM\Column(name="Batch", type="integer", nullable=true)
     */
    private $batch;

    /**
     * @var string
     *
     * @ORM\Column(name="LastEditedBy", type="string", length=255, nullable=true)
     */
    private $lasteditedby;

    /**
     * @var integer
     *
     * @ORM\Column(name="UncertainCharacter", type="integer", nullable=true)
     */
    private $uncertaincharacter;

    /**
     * @var string
     *
     * @ORM\Column(name="ProcessDate", type="string", length=255, nullable=true)
     */
    private $processdate;

    /**
     * @var string
     *
     * @ORM\Column(name="Operator", type="string", length=255, nullable=true)
     */
    private $operator;

    /**
     * @var string
     *
     * @ORM\Column(name="IDEnumerator", type="string", length=255, nullable=true)
     */
    private $idenumerator;

    /**
     * @var string
     *
     * @ORM\Column(name="RMO", type="string", length=255, nullable=true)
     */
    private $rmo;

    /**
     * @var string
     *
     * @ORM\Column(name="PageImages", type="string", length=255, nullable=true)
     */
    private $pageimages;

    /**
     * @var string
     *
     * @ORM\Column(name="PresentAreaID", type="string", length=255, nullable=true)
     */
    private $presentareaid;

    /**
     * @var integer
     *
     * @ORM\Column(name="ROW_INDEX", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rowIndex;



    /**
     * Set barcode
     *
     * @param integer $barcode
     * @return HouseholdInfo
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
     * Set presentvillage
     *
     * @param string $presentvillage
     * @return HouseholdInfo
     */
    public function setPresentvillage($presentvillage)
    {
        $this->presentvillage = $presentvillage;

        return $this;
    }

    /**
     * Get presentvillage
     *
     * @return string 
     */
    public function getPresentvillage()
    {
        return $this->presentvillage;
    }

    /**
     * Set presentdistrictid
     *
     * @param integer $presentdistrictid
     * @return HouseholdInfo
     */
    public function setPresentdistrictid($presentdistrictid)
    {
        $this->presentdistrictid = $presentdistrictid;

        return $this;
    }

    /**
     * Get presentdistrictid
     *
     * @return integer 
     */
    public function getPresentdistrictid()
    {
        return $this->presentdistrictid;
    }

    /**
     * Set presentupazilaid
     *
     * @param integer $presentupazilaid
     * @return HouseholdInfo
     */
    public function setPresentupazilaid($presentupazilaid)
    {
        $this->presentupazilaid = $presentupazilaid;

        return $this;
    }

    /**
     * Get presentupazilaid
     *
     * @return integer 
     */
    public function getPresentupazilaid()
    {
        return $this->presentupazilaid;
    }

    /**
     * Set presentunionid
     *
     * @param integer $presentunionid
     * @return HouseholdInfo
     */
    public function setPresentunionid($presentunionid)
    {
        $this->presentunionid = $presentunionid;

        return $this;
    }

    /**
     * Get presentunionid
     *
     * @return integer 
     */
    public function getPresentunionid()
    {
        return $this->presentunionid;
    }

    /**
     * Set presentwardno
     *
     * @param integer $presentwardno
     * @return HouseholdInfo
     */
    public function setPresentwardno($presentwardno)
    {
        $this->presentwardno = $presentwardno;

        return $this;
    }

    /**
     * Get presentwardno
     *
     * @return integer 
     */
    public function getPresentwardno()
    {
        return $this->presentwardno;
    }

    /**
     * Set presentpostcode
     *
     * @param string $presentpostcode
     * @return HouseholdInfo
     */
    public function setPresentpostcode($presentpostcode)
    {
        $this->presentpostcode = $presentpostcode;

        return $this;
    }

    /**
     * Get presentpostcode
     *
     * @return string 
     */
    public function getPresentpostcode()
    {
        return $this->presentpostcode;
    }

    /**
     * Set parmanentvillage
     *
     * @param string $parmanentvillage
     * @return HouseholdInfo
     */
    public function setParmanentvillage($parmanentvillage)
    {
        $this->parmanentvillage = $parmanentvillage;

        return $this;
    }

    /**
     * Get parmanentvillage
     *
     * @return string 
     */
    public function getParmanentvillage()
    {
        return $this->parmanentvillage;
    }

    /**
     * Set parmanentdistrictid
     *
     * @param string $parmanentdistrictid
     * @return HouseholdInfo
     */
    public function setParmanentdistrictid($parmanentdistrictid)
    {
        $this->parmanentdistrictid = $parmanentdistrictid;

        return $this;
    }

    /**
     * Get parmanentdistrictid
     *
     * @return string 
     */
    public function getParmanentdistrictid()
    {
        return $this->parmanentdistrictid;
    }

    /**
     * Set parmanentupazilaid
     *
     * @param string $parmanentupazilaid
     * @return HouseholdInfo
     */
    public function setParmanentupazilaid($parmanentupazilaid)
    {
        $this->parmanentupazilaid = $parmanentupazilaid;

        return $this;
    }

    /**
     * Get parmanentupazilaid
     *
     * @return string 
     */
    public function getParmanentupazilaid()
    {
        return $this->parmanentupazilaid;
    }

    /**
     * Set parmanentunionid
     *
     * @param string $parmanentunionid
     * @return HouseholdInfo
     */
    public function setParmanentunionid($parmanentunionid)
    {
        $this->parmanentunionid = $parmanentunionid;

        return $this;
    }

    /**
     * Get parmanentunionid
     *
     * @return string 
     */
    public function getParmanentunionid()
    {
        return $this->parmanentunionid;
    }

    /**
     * Set parmanentwardno
     *
     * @param string $parmanentwardno
     * @return HouseholdInfo
     */
    public function setParmanentwardno($parmanentwardno)
    {
        $this->parmanentwardno = $parmanentwardno;

        return $this;
    }

    /**
     * Get parmanentwardno
     *
     * @return string 
     */
    public function getParmanentwardno()
    {
        return $this->parmanentwardno;
    }

    /**
     * Set parmanentareaid
     *
     * @param string $parmanentareaid
     * @return HouseholdInfo
     */
    public function setParmanentareaid($parmanentareaid)
    {
        $this->parmanentareaid = $parmanentareaid;

        return $this;
    }

    /**
     * Get parmanentareaid
     *
     * @return string 
     */
    public function getParmanentareaid()
    {
        return $this->parmanentareaid;
    }

    /**
     * Set parmanentpostcode
     *
     * @param string $parmanentpostcode
     * @return HouseholdInfo
     */
    public function setParmanentpostcode($parmanentpostcode)
    {
        $this->parmanentpostcode = $parmanentpostcode;

        return $this;
    }

    /**
     * Get parmanentpostcode
     *
     * @return string 
     */
    public function getParmanentpostcode()
    {
        return $this->parmanentpostcode;
    }

    /**
     * Set q1
     *
     * @param string $q1
     * @return HouseholdInfo
     */
    public function setQ1($q1)
    {
        $this->q1 = $q1;

        return $this;
    }

    /**
     * Get q1
     *
     * @return string 
     */
    public function getQ1()
    {
        return $this->q1;
    }

    /**
     * Set presenthouseholdno
     *
     * @param string $presenthouseholdno
     * @return HouseholdInfo
     */
    public function setPresenthouseholdno($presenthouseholdno)
    {
        $this->presenthouseholdno = $presenthouseholdno;

        return $this;
    }

    /**
     * Get presenthouseholdno
     *
     * @return string 
     */
    public function getPresenthouseholdno()
    {
        return $this->presenthouseholdno;
    }

    /**
     * Set q31
     *
     * @param string $q31
     * @return HouseholdInfo
     */
    public function setQ31($q31)
    {
        $this->q31 = $q31;

        return $this;
    }

    /**
     * Get q31
     *
     * @return string 
     */
    public function getQ31()
    {
        return $this->q31;
    }

    /**
     * Set parmanenthouseholdno
     *
     * @param string $parmanenthouseholdno
     * @return HouseholdInfo
     */
    public function setParmanenthouseholdno($parmanenthouseholdno)
    {
        $this->parmanenthouseholdno = $parmanenthouseholdno;

        return $this;
    }

    /**
     * Get parmanenthouseholdno
     *
     * @return string 
     */
    public function getParmanenthouseholdno()
    {
        return $this->parmanenthouseholdno;
    }

    /**
     * Set q4
     *
     * @param string $q4
     * @return HouseholdInfo
     */
    public function setQ4($q4)
    {
        $this->q4 = $q4;

        return $this;
    }

    /**
     * Get q4
     *
     * @return string 
     */
    public function getQ4()
    {
        return $this->q4;
    }

    /**
     * Set q5
     *
     * @param string $q5
     * @return HouseholdInfo
     */
    public function setQ5($q5)
    {
        $this->q5 = $q5;

        return $this;
    }

    /**
     * Get q5
     *
     * @return string 
     */
    public function getQ5()
    {
        return $this->q5;
    }

    /**
     * Set q6
     *
     * @param string $q6
     * @return HouseholdInfo
     */
    public function setQ6($q6)
    {
        $this->q6 = $q6;

        return $this;
    }

    /**
     * Get q6
     *
     * @return string 
     */
    public function getQ6()
    {
        return $this->q6;
    }

    /**
     * Set q6others
     *
     * @param string $q6others
     * @return HouseholdInfo
     */
    public function setQ6others($q6others)
    {
        $this->q6others = $q6others;

        return $this;
    }

    /**
     * Get q6others
     *
     * @return string 
     */
    public function getQ6others()
    {
        return $this->q6others;
    }

    /**
     * Set q7
     *
     * @param string $q7
     * @return HouseholdInfo
     */
    public function setQ7($q7)
    {
        $this->q7 = $q7;

        return $this;
    }

    /**
     * Get q7
     *
     * @return string 
     */
    public function getQ7()
    {
        return $this->q7;
    }

    /**
     * Set q7others
     *
     * @param string $q7others
     * @return HouseholdInfo
     */
    public function setQ7others($q7others)
    {
        $this->q7others = $q7others;

        return $this;
    }

    /**
     * Get q7others
     *
     * @return string 
     */
    public function getQ7others()
    {
        return $this->q7others;
    }

    /**
     * Set q8
     *
     * @param string $q8
     * @return HouseholdInfo
     */
    public function setQ8($q8)
    {
        $this->q8 = $q8;

        return $this;
    }

    /**
     * Get q8
     *
     * @return string 
     */
    public function getQ8()
    {
        return $this->q8;
    }

    /**
     * Set q9
     *
     * @param string $q9
     * @return HouseholdInfo
     */
    public function setQ9($q9)
    {
        $this->q9 = $q9;

        return $this;
    }

    /**
     * Get q9
     *
     * @return string 
     */
    public function getQ9()
    {
        return $this->q9;
    }

    /**
     * Set q10
     *
     * @param string $q10
     * @return HouseholdInfo
     */
    public function setQ10($q10)
    {
        $this->q10 = $q10;

        return $this;
    }

    /**
     * Get q10
     *
     * @return string 
     */
    public function getQ10()
    {
        return $this->q10;
    }

    /**
     * Set q11
     *
     * @param string $q11
     * @return HouseholdInfo
     */
    public function setQ11($q11)
    {
        $this->q11 = $q11;

        return $this;
    }

    /**
     * Get q11
     *
     * @return string 
     */
    public function getQ11()
    {
        return $this->q11;
    }

    /**
     * Set q121
     *
     * @param string $q121
     * @return HouseholdInfo
     */
    public function setQ121($q121)
    {
        $this->q121 = $q121;

        return $this;
    }

    /**
     * Get q121
     *
     * @return string 
     */
    public function getQ121()
    {
        return $this->q121;
    }

    /**
     * Set q122
     *
     * @param string $q122
     * @return HouseholdInfo
     */
    public function setQ122($q122)
    {
        $this->q122 = $q122;

        return $this;
    }

    /**
     * Get q122
     *
     * @return string 
     */
    public function getQ122()
    {
        return $this->q122;
    }

    /**
     * Set q123
     *
     * @param string $q123
     * @return HouseholdInfo
     */
    public function setQ123($q123)
    {
        $this->q123 = $q123;

        return $this;
    }

    /**
     * Get q123
     *
     * @return string 
     */
    public function getQ123()
    {
        return $this->q123;
    }

    /**
     * Set q124
     *
     * @param string $q124
     * @return HouseholdInfo
     */
    public function setQ124($q124)
    {
        $this->q124 = $q124;

        return $this;
    }

    /**
     * Get q124
     *
     * @return string 
     */
    public function getQ124()
    {
        return $this->q124;
    }

    /**
     * Set q125
     *
     * @param string $q125
     * @return HouseholdInfo
     */
    public function setQ125($q125)
    {
        $this->q125 = $q125;

        return $this;
    }

    /**
     * Get q125
     *
     * @return string 
     */
    public function getQ125()
    {
        return $this->q125;
    }

    /**
     * Set q126
     *
     * @param string $q126
     * @return HouseholdInfo
     */
    public function setQ126($q126)
    {
        $this->q126 = $q126;

        return $this;
    }

    /**
     * Get q126
     *
     * @return string 
     */
    public function getQ126()
    {
        return $this->q126;
    }

    /**
     * Set q127
     *
     * @param string $q127
     * @return HouseholdInfo
     */
    public function setQ127($q127)
    {
        $this->q127 = $q127;

        return $this;
    }

    /**
     * Get q127
     *
     * @return string 
     */
    public function getQ127()
    {
        return $this->q127;
    }

    /**
     * Set q128
     *
     * @param string $q128
     * @return HouseholdInfo
     */
    public function setQ128($q128)
    {
        $this->q128 = $q128;

        return $this;
    }

    /**
     * Get q128
     *
     * @return string 
     */
    public function getQ128()
    {
        return $this->q128;
    }

    /**
     * Set q129
     *
     * @param string $q129
     * @return HouseholdInfo
     */
    public function setQ129($q129)
    {
        $this->q129 = $q129;

        return $this;
    }

    /**
     * Get q129
     *
     * @return string 
     */
    public function getQ129()
    {
        return $this->q129;
    }

    /**
     * Set q1210
     *
     * @param string $q1210
     * @return HouseholdInfo
     */
    public function setQ1210($q1210)
    {
        $this->q1210 = $q1210;

        return $this;
    }

    /**
     * Get q1210
     *
     * @return string 
     */
    public function getQ1210()
    {
        return $this->q1210;
    }

    /**
     * Set q1211
     *
     * @param string $q1211
     * @return HouseholdInfo
     */
    public function setQ1211($q1211)
    {
        $this->q1211 = $q1211;

        return $this;
    }

    /**
     * Get q1211
     *
     * @return string 
     */
    public function getQ1211()
    {
        return $this->q1211;
    }

    /**
     * Set q1212
     *
     * @param string $q1212
     * @return HouseholdInfo
     */
    public function setQ1212($q1212)
    {
        $this->q1212 = $q1212;

        return $this;
    }

    /**
     * Get q1212
     *
     * @return string 
     */
    public function getQ1212()
    {
        return $this->q1212;
    }

    /**
     * Set q13
     *
     * @param string $q13
     * @return HouseholdInfo
     */
    public function setQ13($q13)
    {
        $this->q13 = $q13;

        return $this;
    }

    /**
     * Get q13
     *
     * @return string 
     */
    public function getQ13()
    {
        return $this->q13;
    }

    /**
     * Set q14
     *
     * @param string $q14
     * @return HouseholdInfo
     */
    public function setQ14($q14)
    {
        $this->q14 = $q14;

        return $this;
    }

    /**
     * Get q14
     *
     * @return string 
     */
    public function getQ14()
    {
        return $this->q14;
    }

    /**
     * Set q15
     *
     * @param string $q15
     * @return HouseholdInfo
     */
    public function setQ15($q15)
    {
        $this->q15 = $q15;

        return $this;
    }

    /**
     * Get q15
     *
     * @return string 
     */
    public function getQ15()
    {
        return $this->q15;
    }

    /**
     * Set q161
     *
     * @param string $q161
     * @return HouseholdInfo
     */
    public function setQ161($q161)
    {
        $this->q161 = $q161;

        return $this;
    }

    /**
     * Get q161
     *
     * @return string 
     */
    public function getQ161()
    {
        return $this->q161;
    }

    /**
     * Set q162
     *
     * @param string $q162
     * @return HouseholdInfo
     */
    public function setQ162($q162)
    {
        $this->q162 = $q162;

        return $this;
    }

    /**
     * Get q162
     *
     * @return string 
     */
    public function getQ162()
    {
        return $this->q162;
    }

    /**
     * Set q163
     *
     * @param string $q163
     * @return HouseholdInfo
     */
    public function setQ163($q163)
    {
        $this->q163 = $q163;

        return $this;
    }

    /**
     * Get q163
     *
     * @return string 
     */
    public function getQ163()
    {
        return $this->q163;
    }

    /**
     * Set addpage
     *
     * @param integer $addpage
     * @return HouseholdInfo
     */
    public function setAddpage($addpage)
    {
        $this->addpage = $addpage;

        return $this;
    }

    /**
     * Get addpage
     *
     * @return integer 
     */
    public function getAddpage()
    {
        return $this->addpage;
    }

    /**
     * Set pageno
     *
     * @param string $pageno
     * @return HouseholdInfo
     */
    public function setPageno($pageno)
    {
        $this->pageno = $pageno;

        return $this;
    }

    /**
     * Get pageno
     *
     * @return string 
     */
    public function getPageno()
    {
        return $this->pageno;
    }

    /**
     * Set formsl
     *
     * @param string $formsl
     * @return HouseholdInfo
     */
    public function setFormsl($formsl)
    {
        $this->formsl = $formsl;

        return $this;
    }

    /**
     * Get formsl
     *
     * @return string 
     */
    public function getFormsl()
    {
        return $this->formsl;
    }

    /**
     * Set bookno
     *
     * @param string $bookno
     * @return HouseholdInfo
     */
    public function setBookno($bookno)
    {
        $this->bookno = $bookno;

        return $this;
    }

    /**
     * Get bookno
     *
     * @return string 
     */
    public function getBookno()
    {
        return $this->bookno;
    }

    /**
     * Set sourcefilename
     *
     * @param string $sourcefilename
     * @return HouseholdInfo
     */
    public function setSourcefilename($sourcefilename)
    {
        $this->sourcefilename = $sourcefilename;

        return $this;
    }

    /**
     * Get sourcefilename
     *
     * @return string 
     */
    public function getSourcefilename()
    {
        return $this->sourcefilename;
    }

    /**
     * Set docno
     *
     * @param integer $docno
     * @return HouseholdInfo
     */
    public function setDocno($docno)
    {
        $this->docno = $docno;

        return $this;
    }

    /**
     * Get docno
     *
     * @return integer 
     */
    public function getDocno()
    {
        return $this->docno;
    }

    /**
     * Set totaldoc
     *
     * @param integer $totaldoc
     * @return HouseholdInfo
     */
    public function setTotaldoc($totaldoc)
    {
        $this->totaldoc = $totaldoc;

        return $this;
    }

    /**
     * Get totaldoc
     *
     * @return integer 
     */
    public function getTotaldoc()
    {
        return $this->totaldoc;
    }

    /**
     * Set batch
     *
     * @param integer $batch
     * @return HouseholdInfo
     */
    public function setBatch($batch)
    {
        $this->batch = $batch;

        return $this;
    }

    /**
     * Get batch
     *
     * @return integer 
     */
    public function getBatch()
    {
        return $this->batch;
    }

    /**
     * Set lasteditedby
     *
     * @param string $lasteditedby
     * @return HouseholdInfo
     */
    public function setLasteditedby($lasteditedby)
    {
        $this->lasteditedby = $lasteditedby;

        return $this;
    }

    /**
     * Get lasteditedby
     *
     * @return string 
     */
    public function getLasteditedby()
    {
        return $this->lasteditedby;
    }

    /**
     * Set uncertaincharacter
     *
     * @param integer $uncertaincharacter
     * @return HouseholdInfo
     */
    public function setUncertaincharacter($uncertaincharacter)
    {
        $this->uncertaincharacter = $uncertaincharacter;

        return $this;
    }

    /**
     * Get uncertaincharacter
     *
     * @return integer 
     */
    public function getUncertaincharacter()
    {
        return $this->uncertaincharacter;
    }

    /**
     * Set processdate
     *
     * @param string $processdate
     * @return HouseholdInfo
     */
    public function setProcessdate($processdate)
    {
        $this->processdate = $processdate;

        return $this;
    }

    /**
     * Get processdate
     *
     * @return string 
     */
    public function getProcessdate()
    {
        return $this->processdate;
    }

    /**
     * Set operator
     *
     * @param string $operator
     * @return HouseholdInfo
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get operator
     *
     * @return string 
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set idenumerator
     *
     * @param string $idenumerator
     * @return HouseholdInfo
     */
    public function setIdenumerator($idenumerator)
    {
        $this->idenumerator = $idenumerator;

        return $this;
    }

    /**
     * Get idenumerator
     *
     * @return string 
     */
    public function getIdenumerator()
    {
        return $this->idenumerator;
    }

    /**
     * Set rmo
     *
     * @param string $rmo
     * @return HouseholdInfo
     */
    public function setRmo($rmo)
    {
        $this->rmo = $rmo;

        return $this;
    }

    /**
     * Get rmo
     *
     * @return string 
     */
    public function getRmo()
    {
        return $this->rmo;
    }

    /**
     * Set pageimages
     *
     * @param string $pageimages
     * @return HouseholdInfo
     */
    public function setPageimages($pageimages)
    {
        $this->pageimages = $pageimages;

        return $this;
    }

    /**
     * Get pageimages
     *
     * @return string 
     */
    public function getPageimages()
    {
        return $this->pageimages;
    }

    /**
     * Set presentareaid
     *
     * @param string $presentareaid
     * @return HouseholdInfo
     */
    public function setPresentareaid($presentareaid)
    {
        $this->presentareaid = $presentareaid;

        return $this;
    }

    /**
     * Get presentareaid
     *
     * @return string 
     */
    public function getPresentareaid()
    {
        return $this->presentareaid;
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
