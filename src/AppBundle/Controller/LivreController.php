<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Categorie;
use AppBundle\Entity\Courses;
use AppBundle\Entity\livre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class LivreController extends Controller
{

    /**
     * @Route("/bookstore", name="bookmark")
     */
    public function indexAction()
    {
        /*
         * doctrine
         */
        $doctrine = $this->getDoctrine();

        /*
         * getRepository : SELECT
         */
        $results = $doctrine->getRepository(Categorie::class)->findAll();



        return $this->render('livre/index.html.twig',[
          'results' => $results
        ]);
    }

    /**
     * @Route("/bookstore/category/{id}", name="livre.detail")
     */

    public function detailAction($id)
    {
        /*
         * doctrine
         */
        $doctrine = $this->getDoctrine();

        /*
         * getRepository : SELECT
         */
        $results = $doctrine->getRepository(Categorie::class)->find($id);



        return $this->render('livre/details.html.twig',[
            'results' => $results
            ]);

    }

    /**
     * @Route("/bookstore/book/{id}", name="livre.detail.livre")
     */

    public function bookAction($id)
    {
        /*
         * doctrine
         */
        $doctrine = $this->getDoctrine();

        /*
         * getRepository : SELECT
         */
        $results = $doctrine->getRepository(livre::class)->find($id);



        return $this->render('livre/book.html.twig',[
            'results' => $results
        ]);

    }

}

