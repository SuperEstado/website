<?php

namespace Website\LayoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WebsiteLayoutBundle:Default:index.html.twig', array('name' => $name));
    }
}
