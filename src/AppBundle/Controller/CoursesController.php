<?php


namespace AppBundle\Controller;

use AppBundle\Entity\Courses;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

class CoursesController extends Controller
{

    /**
     * @Route("/courses", name="courses")
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
        $results = $doctrine->getRepository(Courses::class)->findAll();



        return $this->render('courses/index.html.twig',[
          'results' => $results
        ]);
    }

    /**
     * @Route("/course/{slug}", name="courses.detail")
     * @param $slug
     * @return \Symfony\Component\HttpFoundation\Response
     */

    public function detailAction($slug)
    {
        /*
         * doctrine
         */
        $doctrine = $this->getDoctrine();

        /*
         * getRepository : SELECT
         */
        $results = $doctrine->getRepository(Courses::class)->findOneBy([
            'slug' => $slug
        ]);

        return $this->render('courses/details.html.twig',[
            'results' => $results
        ]);
    }

    /**
     * @Route("/courses/query", name="course.query")
     */

    public function queryAction(){
        /*
         * doctrine
         */
        $doctrine = $this->getDoctrine();

        /*
         * appel d'une methode de la classe de dépôt (Repository)
         */
        $result = $doctrine->getRepository(Courses::class)->testQuery();
        exit(dump($result));


    }


}

