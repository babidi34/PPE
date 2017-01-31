<?php

namespace NeigeEtSoleilBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AppartementsController extends Controller
{
    public function AppartementsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $appartements = $em->getRepository('NeigeEtSoleilBundle:Appartements')->findAll();
        
        return $this->render('NeigeEtSoleilBundle:Default:Appartements/Layout/Appartements.html.twig', array('appartements' => $appartements));
    }
    
    public function PresentationAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $appartement = $em->getRepository('NeigeEtSoleilBundle:Appartements')->find($id);
        return $this->render('NeigeEtSoleilBundle:Default:Appartements/Layout/Presentation.html.twig', array('appartement' => $appartement));
    }
}
