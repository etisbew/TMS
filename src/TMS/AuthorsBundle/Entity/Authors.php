<?php

namespace TMS\AuthorsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Authors
 */
class Authors
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $user;

    /**
     * @var string
     */
    private $parent_submission;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \DateTime
     */
    private $dob;

    /**
     * @var \DateTime
     */
    private $dead_when;

    /**
     * @var string
     */
    private $anonymous;

    /**
     * @var string
     */
    private $pseudonymousn;

    /**
     * @var string
     */
    private $pseudonym;

    /**
     * @var string
     */
    private $contribution;

    /**
     * @var integer
     */
    private $completed_year;

    /**
     * @var \DateTime
     */
    private $published_when;

    /**
     * @var string
     */
    private $published_where;

    /**
     * @var string
     */
    private $isbn;

    /**
     * @var string
     */
    private $nationality;

    /**
     * @var string
     */
    private $citizen;

    /**
     * @var string
     */
    private $domicilied;


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
     * Set user
     *
     * @param string $user
     * @return Authors
     */
    public function setUser($user)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set parent_submission
     *
     * @param string $parentSubmission
     * @return Authors
     */
    public function setParentSubmission($parentSubmission)
    {
        $this->parent_submission = $parentSubmission;
    
        return $this;
    }

    /**
     * Get parent_submission
     *
     * @return string 
     */
    public function getParentSubmission()
    {
        return $this->parent_submission;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Authors
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
     * Set dob
     *
     * @param \DateTime $dob
     * @return Authors
     */
    public function setDob($dob)
    {
        $this->dob = $dob;
    
        return $this;
    }

    /**
     * Get dob
     *
     * @return \DateTime 
     */
    public function getDob()
    {
        return $this->dob;
    }

    /**
     * Set dead_when
     *
     * @param \DateTime $deadWhen
     * @return Authors
     */
    public function setDeadWhen($deadWhen)
    {
        $this->dead_when = $deadWhen;
    
        return $this;
    }

    /**
     * Get dead_when
     *
     * @return \DateTime 
     */
    public function getDeadWhen()
    {
        return $this->dead_when;
    }

    /**
     * Set anonymous
     *
     * @param string $anonymous
     * @return Authors
     */
    public function setAnonymous($anonymous)
    {
        $this->anonymous = $anonymous;
    
        return $this;
    }

    /**
     * Get anonymous
     *
     * @return string 
     */
    public function getAnonymous()
    {
        return $this->anonymous;
    }

    /**
     * Set pseudonymousn
     *
     * @param string $pseudonymousn
     * @return Authors
     */
    public function setPseudonymousn($pseudonymousn)
    {
        $this->pseudonymousn = $pseudonymousn;
    
        return $this;
    }

    /**
     * Get pseudonymousn
     *
     * @return string 
     */
    public function getPseudonymousn()
    {
        return $this->pseudonymousn;
    }

    /**
     * Set pseudonym
     *
     * @param string $pseudonym
     * @return Authors
     */
    public function setPseudonym($pseudonym)
    {
        $this->pseudonym = $pseudonym;
    
        return $this;
    }

    /**
     * Get pseudonym
     *
     * @return string 
     */
    public function getPseudonym()
    {
        return $this->pseudonym;
    }

    /**
     * Set contribution
     *
     * @param string $contribution
     * @return Authors
     */
    public function setContribution($contribution)
    {
        $this->contribution = $contribution;
    
        return $this;
    }

    /**
     * Get contribution
     *
     * @return string 
     */
    public function getContribution()
    {
        return $this->contribution;
    }

    /**
     * Set completed_year
     *
     * @param integer $completedYear
     * @return Authors
     */
    public function setCompletedYear($completedYear)
    {
        $this->completed_year = $completedYear;
    
        return $this;
    }

    /**
     * Get completed_year
     *
     * @return integer 
     */
    public function getCompletedYear()
    {
        return $this->completed_year;
    }

    /**
     * Set published_when
     *
     * @param \DateTime $publishedWhen
     * @return Authors
     */
    public function setPublishedWhen($publishedWhen)
    {
        $this->published_when = $publishedWhen;
    
        return $this;
    }

    /**
     * Get published_when
     *
     * @return \DateTime 
     */
    public function getPublishedWhen()
    {
        return $this->published_when;
    }

    /**
     * Set published_where
     *
     * @param string $publishedWhere
     * @return Authors
     */
    public function setPublishedWhere($publishedWhere)
    {
        $this->published_where = $publishedWhere;
    
        return $this;
    }

    /**
     * Get published_where
     *
     * @return string 
     */
    public function getPublishedWhere()
    {
        return $this->published_where;
    }

    /**
     * Set isbn
     *
     * @param string $isbn
     * @return Authors
     */
    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    
        return $this;
    }

    /**
     * Get isbn
     *
     * @return string 
     */
    public function getIsbn()
    {
        return $this->isbn;
    }

    /**
     * Set nationality
     *
     * @param string $nationality
     * @return Authors
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
     * Set citizen
     *
     * @param string $citizen
     * @return Authors
     */
    public function setCitizen($citizen)
    {
        $this->citizen = $citizen;
    
        return $this;
    }

    /**
     * Get citizen
     *
     * @return string 
     */
    public function getCitizen()
    {
        return $this->citizen;
    }

    /**
     * Set domicilied
     *
     * @param string $domicilied
     * @return Authors
     */
    public function setDomicilied($domicilied)
    {
        $this->domicilied = $domicilied;
    
        return $this;
    }

    /**
     * Get domicilied
     *
     * @return string 
     */
    public function getDomicilied()
    {
        return $this->domicilied;
    }
}
