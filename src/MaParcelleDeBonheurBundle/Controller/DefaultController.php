<?php

namespace MaParcelleDeBonheurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function homepageAction()
    {
        $titrePage = "Ma parcelle de bonheur";
        return $this->render('@MaParcelleDeBonheur/Default/homepage.html.twig', array(
            'titrepage' => $titrePage,
        ));
    }

    public function leconceptAction()
    {
        $titrePage = "Le concept";
        return $this->render('@MaParcelleDeBonheur/Default/leconcept.html.twig', array(
            'titrepage' => $titrePage,
        ));
    }

    public function maparcelleAction()
    {
        $titrePage = "Ma parcelle";
        return $this->render('@MaParcelleDeBonheur/Default/maparcelle.html.twig', array(
            'titrepage' => $titrePage,
        ));
    }

    public function lekitdujardinierAction()
    {
        $titrePage = "Mon kit du jardinier";
        return $this->render('@MaParcelleDeBonheur/Default/lekitdujardinier.html.twig', array(
            'titrepage' => $titrePage,
        ));
    }

    public function lesplusdupatronAction()
    {
        $titrePage = "Les Plus du patron";
        return $this->render('@MaParcelleDeBonheur/Default/lesplusdupatron.html.twig', array(
            'titrepage' => $titrePage,
        ));
    }

    public function reserverAction()
    {
        $titrePage = "Contact";
        return $this->render('@MaParcelleDeBonheur/Default/reservation.html.twig', array(
            'titrepage' => $titrePage,
        ));
    }

    public function adminAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/admin.html.twig');
    }
}
