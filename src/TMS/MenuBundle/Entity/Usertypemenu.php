<?php

namespace TMS\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usertypemenu
 */
class Usertypemenu
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $user_type;

    /**
     * @var integer
     */
    private $menu;


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
     * Set user_type
     *
     * @param integer $userType
     * @return Usertypemenu
     */
    public function setUserType($userType)
    {
        $this->user_type = $userType;
    
        return $this;
    }

    /**
     * Get user_type
     *
     * @return integer 
     */
    public function getUserType()
    {
        return $this->user_type;
    }

    /**
     * Set menu
     *
     * @param integer $menu
     * @return Usertypemenu
     */
    public function setMenu($menu)
    {
        $this->menu = $menu;
    
        return $this;
    }

    /**
     * Get menu
     *
     * @return integer 
     */
    public function getMenu()
    {
        return $this->menu;
    }
}
