<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 07/11/2017
 * Time: 10:20
 */

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;



class MemberController extends Controller

{

    private $list = [['nom' => 'jouet', 'prenom' => 'jerome', 'email' => 'jeromejouet@laposte.net', 'img' => 'logo.png'],
                ['nom' => 'De-Carvalho', 'prenom' => 'Steven', 'email' => 'Nainbus2000@gmail.com', 'img' => 'logo.png'],
                ['nom' => 'Yedo', 'prenom' => 'Cedric', 'email' => 'legoaneantitout@gmail.com', 'img' => 'logo.png'],
                ['nom' => 'Atouchi', 'prenom' => 'Billal', 'email' => 'BillalAtouchi@gmail.com', 'img' => 'logo.png']];
    /**
     * @Route("/members", name = "listmembers")
     */
    public function listMembers()
    {
        // replace this example code with whatever you need
        return $this->render('members/members.html.twig', [
           'list' => $this->list
        ]);
    }

    /**
     * @Route("/member/{id}", name = "detailsmembers")
     */
    public function detailsMembers($id)
    {
        // replace this example code with whatever you need
        return $this->render('members/details.html.twig', [
            'detail' => $this->list[$id]
        ]);
    }

}