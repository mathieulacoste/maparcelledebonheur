<?php

namespace MaParcelleDeBonheurBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use MaParcelleDeBonheurBundle\Entity\Articles;

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
        $articles = $this->getDoctrine()->getRepository(articles::class)->findAll();

        return $this->render('@MaParcelleDeBonheur/Default/lesplusdupatron.html.twig',array(
            'articles'=>$articles,
        ));
    }

    public function lesplusdupatronarticleAction($id)
    {
        $article = $this->getDoctrine()->getRepository(articles::class)->find($id);

        return $this->render('@MaParcelleDeBonheur/Default/lesplusdupatronarticle.html.twig',array(
            'article'=>$article,
        ));
    }

    public function contactAction()
    {
        return $this->render('@MaParcelleDeBonheur/Default/reservation.html.twig');
    }
}
