<?php

namespace MaParcelleDeBonheurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homepageAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/homepage.html.twig');
    }

    public function leconceptAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/leconcept.html.twig');
    }

    public function maparcelleAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/maparcelle.html.twig');
    }

    public function lekitdujardinierAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/lekitdujardinier.html.twig');
    }

    public function lesplusdupatronAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/lesplusdupatron.html.twig');
    }

    public function reserverAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/reservation.html.twig');
    }

    public function adminAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/admin.html.twig');
    }

    public function gestiondesparcellesAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/parcelles.html.twig');
    }

    public function gestiondesarticlesAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/articles.html.twig');
    }
}