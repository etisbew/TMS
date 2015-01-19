<?php

namespace TMS\MenuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Submenu
 */
class Submenu
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $href;

    /**
     * @var string
     */
    private $action;

    /**
     * @var \TMS\MenuBundle\Entity\Menu
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
     * Set description
     *
     * @param string $description
     * @return Submenu
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
     * Set href
     *
     * @param string $href
     * @return Submenu
     */
    public function setHref($href)
    {
        $this->href = $href;
    
        return $this;
    }

    /**
     * Get href
     *
     * @return string 
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Set action
     *
     * @param string $action
     * @return Submenu
     */
    public function setAction($action)
    {
        $this->action = $action;
    
        return $this;
    }

    /**
     * Get action
     *
     * @return string 
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set menu
     *
     * @param \TMS\MenuBundle\Entity\Menu $menu
     * @return Submenu
     */
    public function setMenu(\TMS\MenuBundle\Entity\Menu $menu = null)
    {
        $this->menu = $menu;
    
        return $this;
    }

    /**
     * Get menu
     *
     * @return \TMS\MenuBundle\Entity\Menu 
     */
    public function getMenu()
    {
        return $this->menu;
    }
	public function __toString()
	{
		return $this->getDescription() ? $this->getDescription() : "";
	}
}
