<?php

namespace TMS\UserJoinPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('TMSUserJoinPageBundle:Default:index.html.twig', array('name' => $name));
    }
}
