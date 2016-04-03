<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Geocode
 *
 * @ORM\Table(name="geocodes")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\GeocodeRepository")
 */
class Geocode
{
    /**
     * @var int
     *
     * @ORM\Column(name="geo_code", type="string")
     * @ORM\Id
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="division_code", type="integer")
     */
    private $divisionCode;

    /**
     * @var string
     *
     * @ORM\Column(name="division_name", type="string", length=255)
     */
    private $divisionName;

    /**
     * @var int
     *
     * @ORM\Column(name="district_code", type="integer")
     */
    private $districtCode;

    /**
     * @var string
     *
     * @ORM\Column(name="district_name", type="string", length=255)
     */
    private $districtName;

    /**
     * @var int
     *
     * @ORM\Column(name="upazilla_code", type="integer")
     */
    private $upazillaCode;

    /**
     * @var string
     *
     * @ORM\Column(name="upazilla_name", type="string", length=255)
     */
    private $upazillaName;

    /**
     * @var int
     *
     * @ORM\Column(name="union_code", type="integer")
     */
    private $unionCode;

    /**
     * @var string
     *
     * @ORM\Column(name="union_name", type="string", length=255)
     */
    private $unionName;


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
     * Set divisionCode
     *
     * @param integer $divisionCode
     * @return Geocode
     */
    public function setDivisionCode($divisionCode)
    {
        $this->divisionCode = $divisionCode;

        return $this;
    }

    /**
     * Get divisionCode
     *
     * @return integer 
     */
    public function getDivisionCode()
    {
        return $this->divisionCode;
    }

    /**
     * Set divisionName
     *
     * @param string $divisionName
     * @return Geocode
     */
    public function setDivisionName($divisionName)
    {
        $this->divisionName = $divisionName;

        return $this;
    }

    /**
     * Get divisionName
     *
     * @return string 
     */
    public function getDivisionName()
    {
        return $this->divisionName;
    }

    /**
     * Set districtCode
     *
     * @param integer $districtCode
     * @return Geocode
     */
    public function setDistrictCode($districtCode)
    {
        $this->districtCode = $districtCode;

        return $this;
    }

    /**
     * Get districtCode
     *
     * @return integer 
     */
    public function getDistrictCode()
    {
        return $this->districtCode;
    }

    /**
     * Set districtName
     *
     * @param string $districtName
     * @return Geocode
     */
    public function setDistrictName($districtName)
    {
        $this->districtName = $districtName;

        return $this;
    }

    /**
     * Get districtName
     *
     * @return string 
     */
    public function getDistrictName()
    {
        return $this->districtName;
    }

    /**
     * Set upazillaCode
     *
     * @param integer $upazillaCode
     * @return Geocode
     */
    public function setUpazillaCode($upazillaCode)
    {
        $this->upazillaCode = $upazillaCode;

        return $this;
    }

    /**
     * Get upazillaCode
     *
     * @return integer 
     */
    public function getUpazillaCode()
    {
        return $this->upazillaCode;
    }

    /**
     * Set upazillaName
     *
     * @param string $upazillaName
     * @return Geocode
     */
    public function setUpazillaName($upazillaName)
    {
        $this->upazillaName = $upazillaName;

        return $this;
    }

    /**
     * Get upazillaName
     *
     * @return string 
     */
    public function getUpazillaName()
    {
        return $this->upazillaName;
    }

    /**
     * Set unionCode
     *
     * @param integer $unionCode
     * @return Geocode
     */
    public function setUnionCode($unionCode)
    {
        $this->unionCode = $unionCode;

        return $this;
    }

    /**
     * Get unionCode
     *
     * @return integer 
     */
    public function getUnionCode()
    {
        return $this->unionCode;
    }

    /**
     * Set unionName
     *
     * @param string $unionName
     * @return Geocode
     */
    public function setUnionName($unionName)
    {
        $this->unionName = $unionName;

        return $this;
    }

    /**
     * Get unionName
     *
     * @return string 
     */
    public function getUnionName()
    {
        return $this->unionName;
    }
}
