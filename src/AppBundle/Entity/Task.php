<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\BlameableEntity;
use Gedmo\Timestampable\Traits\TimestampableEntity;
use KPhoen\DoctrineStateMachineBehavior\Entity\StatefulTrait;

/**
 * Task
 *
 * @ORM\Table(name="tasks")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TaskRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Task
{
    use TimestampableEntity, BlameableEntity, StatefulTrait;

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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="reference", type="text", nullable=true)
     */
    private $reference;

    /**
     * @var string
     *
     * @ORM\Column(name="imageUrls", type="text", nullable=true)
     */
    private $imageUrls;

    /**
     * @var string
     *
     * @ORM\Column(name="contents", type="text", nullable=true)
     */
    private $contents;

    /**
     * @var string
     *
     * @ORM\Column(name="state", type="string", length=25, nullable=true)
     */
    private $state = 'new';

    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean", nullable=true)
     */
    private $published;

    /**
     * @var string
     *
     * @ORM\Column(name="published_url", type="string", length=255, nullable=true)
     */
    private $publishedUrl;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="locked_by", referencedColumnName="id")
     */
    private $lockedBy;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="contributed_by", referencedColumnName="id")
     */
    private $contributedBy;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="reviewed_by", referencedColumnName="id")
     */
    private $reviewedBy;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="approved_by", referencedColumnName="id")
     */
    private $approvedBy;

    /**
     * @var User
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User")
     * @ORM\JoinColumn(name="published_by", referencedColumnName="id")
     */
    private $publishedBy;

    /**
     * @var ArrayCollection|null
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Image", mappedBy="task")
     */
    private $images;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new ArrayCollection();
    }

    /**
     * @ORM\PostPersist()
     */
    public function populateImages()
    {

    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return User
     */
    public function getLockedBy()
    {
        return $this->lockedBy;
    }

    /**
     * @param User $lockedBy
     *
     * @return Task
     */
    public function setLockedBy($lockedBy)
    {
        $this->lockedBy = $lockedBy;
        return $this;
    }

    /**
     * @return User
     */
    public function getContributedBy()
    {
        return $this->contributedBy;
    }

    /**
     * @param User $contributedBy
     *
     * @return Task
     */
    public function setContributedBy($contributedBy)
    {
        $this->contributedBy = $contributedBy;
        return $this;
    }

    /**
     * @return User
     */
    public function getReviewedBy()
    {
        return $this->reviewedBy;
    }

    /**
     * @param User $reviewedBy
     *
     * @return Task
     */
    public function setReviewedBy($reviewedBy)
    {
        $this->reviewedBy = $reviewedBy;
        return $this;
    }

    /**
     * @return User
     */
    public function getApprovedBy()
    {
        return $this->approvedBy;
    }

    /**
     * @param User $approvedBy
     *
     * @return Task
     */
    public function setApprovedBy($approvedBy)
    {
        $this->approvedBy = $approvedBy;
        return $this;
    }

    /**
     * @return User
     */
    public function getPublishedBy()
    {
        return $this->publishedBy;
    }

    /**
     * @param User $publishedBy
     *
     * @return Task
     */
    public function setPublishedBy($publishedBy)
    {
        $this->publishedBy = $publishedBy;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     *
     * @return Task
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     *
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getImageUrls()
    {
        return $this->imageUrls;
    }

    /**
     * @param string $imageUrls
     *
     * @return Task
     */
    public function setImageUrls($imageUrls)
    {
        $this->imageUrls = $imageUrls;
        return $this;
    }

    /**
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * @param string $contents
     *
     * @return Task
     */
    public function setContents($contents)
    {
        $this->contents = $contents;
        return $this;
    }

    /**
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param string $reference
     *
     * @return Task
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     *
     * @return Task
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param boolean $published
     *
     * @return Task
     */
    public function setPublished($published)
    {
        $this->published = $published;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublishedUrl()
    {
        return $this->publishedUrl;
    }

    /**
     * @param string $publishedUrl
     *
     * @return Task
     */
    public function setPublishedUrl($publishedUrl)
    {
        $this->publishedUrl = $publishedUrl;
        return $this;
    }

    /**
     * @return ArrayCollection|null
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @param ArrayCollection|null $images
     *
     * @return Task
     */
    public function setImages($images)
    {
        $this->images = $images;
        return $this;
    }

    /**
     * Sets the object state. Used by the StateMachine behavior
     *
     * @return string
     */
    public function getFiniteState()
    {
        return $this->getState();
    }

    /**
     * Sets the object state. Used by the StateMachine behavior
     *
     * @param string $state
     * @return Task
     */
    public function setFiniteState($state)
    {
        return $this->setState($state);
    }
}
