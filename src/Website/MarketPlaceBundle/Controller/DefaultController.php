<?php

namespace Website\MarketPlaceBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

/**
 * DefaultController controller
 * 
 * @Route("/")
 */

class DefaultController extends Controller
{
    /**
     * @Route("/hola/{name}/", name="default_testing")     
     * @Template()
     */
    
    public function indexAction($name)
    {
        return $this->render('WebsiteMarketPlaceBundle:Default:index.html.twig', array('name' => $name));
    }
}
