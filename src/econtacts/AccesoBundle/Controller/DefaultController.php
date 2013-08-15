<?php

namespace econtacts\AccesoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use econtacts\AccesoBundle\Entity\Acceso;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    public function accesoAction()
    {
    	$acceso = new Acceso();
    	$form = $this->createFormBuilder($acceso);
    	$form = $this->createFormBuilder($acceso)
    	->add('usuario', 'text')
    	->add('password', 'password')
    	->getForm();
    	
    	return $this->render('econtactsAccesoBundle:Default:acceso.html.twig', array(
    			'form' => $form->createView(),
    	));
    }
}
