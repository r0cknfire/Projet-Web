<?php
namespace Exia\PortfolioBundle\Entity;
use Doctrine\ORM\Mapping AS ORM;

/**
 * @ORM\Entity
 */
class Course
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $name;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $description;

    /**
     * @ORM\Column(type="date", nullable=false)
     */
    private $date;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $diploma;

    /**
     * @ORM\Column(type="string", nullable=false)
     */
    private $location;

    /**
     * @ORM\ManyToOne(targetEntity="Exia\PortfolioBundle\Entity\User", inversedBy="course")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;

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
     * @return Course
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
     * Set description
     *
     * @param string $description
     * @return Course
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Course
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set diploma
     *
     * @param string $diploma
     * @return Course
     */
    public function setDiploma($diploma)
    {
        $this->diploma = $diploma;

        return $this;
    }

    /**
     * Get diploma
     *
     * @return string 
     */
    public function getDiploma()
    {
        return $this->diploma;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return Course
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set user
     *
     * @param \Exia\PortfolioBundle\Entity\User $user
     * @return Course
     */
    public function setUser(\Exia\PortfolioBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \Exia\PortfolioBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }
}
