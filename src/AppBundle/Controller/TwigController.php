<?php


namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class TwigController extends Controller
{

    /**
     * @Route("/layout", name="layout")
     */
    public function layoutAction(){
        /*
         * nom du contrôleur est repris dans le nom du dossier dans app/Ressources/views
         * nom de l'action (methode reliée à une route est repris dans le nom de la vue
         */
        return $this->render('twig/layout.html.twig');

    }



    /**
     * @Route("/twig", name="twig")
     */
    public function indexAction(){
        /*
         * nom du contrôleur est repris dans le nom du dossier dans app/Ressources/views
         * nom de l'action (methode reliée à une route est repris dans le nom de la vue
         */
        return $this->render('twig/index.html.twig',[
            'now' => new \DateTime(),
            'list' => [
                'element1',
                'element2',
                'element3',
                'element4']
        ]);
    }
}