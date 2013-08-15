<?php

namespace econtacts\HomeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('econtactsHomeBundle:Default:base_home.html.twig');
    }
}
