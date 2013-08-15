<?php

namespace econtacts\ContactBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use econtacts\ContactBundle\Entity\Contact;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    
    public function contactAction(Request $request)
    {
    	$contact = new Contact();
    	$form = $this->createFormBuilder($contact);
    	$form = $this->createFormBuilder($contact)
            ->add('email', 'email')
            ->add('message', 'textarea')
            ->getForm();
 
        return $this->render('econtactContactBundle:Default:contact.html.twig', array(
            'form' => $form->createView(),
    	));
    }
}
