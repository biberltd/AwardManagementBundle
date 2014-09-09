<?php

namespace BiberLtd\Bundle\AwardManagementBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('BiberLtdAwardManagementBundle:Default:index.html.twig', array('name' => $name));
    }
}
