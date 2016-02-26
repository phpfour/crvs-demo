<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Gedmo\Timestampable\Traits\TimestampableEntity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

/**
 * User
 *
 * @ORM\Table(name="users")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 *
 * @UniqueEntity("username", message="The username is already in use")
 * @UniqueEntity("email", message="The email is already in use")
 */
class User extends BaseUser
{
    use TimestampableEntity;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $firstName;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $lastName;

    /**
    * @var string
    *
    * @ORM\Column(name="google_id", type="string", nullable=true)
    */
    private $googleId;

    /**
     * @return string
     */
    public function getName()
    {
        if (empty($this->firstName) && empty($this->lastName)) {
            return $this->getUsername();
        } else {
            return trim($this->getFirstName() . ' ' . $this->getLastName());
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getGoogleId()
    {
        return $this->googleId;
    }

    /**
     * @param string $googleId
     *
     * @return User
     */
    public function setGoogleId($googleId)
    {
        $this->googleId = $googleId;
        return $this;
    }

    /**
     * @return string
     */
    public function getRole()
    {
        if ($this->hasRole('ROLE_SUPER_ADMIN')) {
            return 'super_admin';
        }

        if ($this->hasRole('ROLE_ADMIN')) {
            return 'admin';
        }

        if ($this->hasRole('ROLE_CONTRIBUTOR')) {
            return 'contributor';
        }

        if ($this->hasRole('ROLE_REVIEWER')) {
            return 'reviewer';
        }

        if ($this->hasRole('ROLE_APPROVER')) {
            return 'approver';
        }

        if ($this->hasRole('ROLE_EDITOR')) {
            return 'editor';
        }
    }

    public function getGroupState()
    {
        if ($this->hasRole('ROLE_CONTRIBUTOR')) {
            return ['new'];
        }

        if ($this->hasRole('ROLE_REVIEWER')) {
            return ['ready_for_review'];
        }

        if ($this->hasRole('ROLE_APPROVER')) {
            return ['ready_for_approval'];
        }

        if ($this->hasRole('ROLE_EDITOR')) {
            return ['ready_for_publish'];
        }
    }
}