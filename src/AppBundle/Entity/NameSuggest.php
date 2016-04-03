<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * NameSuggest
 *
 * @ORM\Table(name="names")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NameSuggestRepository")
 */
class NameSuggest
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
     * @ORM\Column(name="english", type="string", length=255)
     */
    private $english;

    /**
     * @var string
     *
     * @ORM\Column(name="bangla", type="string", length=255)
     */
    private $bangla;

    /**
     * @var int
     *
     * @ORM\Column(name="priority", type="smallint", nullable=true)
     */
    private $priority;

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
     * Set english
     *
     * @param string $english
     * @return NameSuggest
     */
    public function setEnglish($english)
    {
        $this->english = $english;

        return $this;
    }

    /**
     * Get english
     *
     * @return string 
     */
    public function getEnglish()
    {
        return $this->english;
    }

    /**
     * Set bangla
     *
     * @param string $bangla
     * @return NameSuggest
     */
    public function setBangla($bangla)
    {
        $this->bangla = $bangla;

        return $this;
    }

    /**
     * Get bangla
     *
     * @return string 
     */
    public function getBangla()
    {
        return $this->bangla;
    }

    /**
     * Set priority
     *
     * @param integer $priority
     * @return NameSuggest
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return integer 
     */
    public function getPriority()
    {
        return $this->priority;
    }
}
